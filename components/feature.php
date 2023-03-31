
    <script src="https://www.youtube.com/iframe_api"></script>
    <style>
      #player {
        width: 100%;
        height: 500px;
      }
    </style>
  </head>
  <body>
    <div id="player"></div>
    <script>
      // Load the YouTube Data API client library
      gapi.load('client', function() {
        gapi.client.load('youtube', 'v3', function() {
          // Specify the video ID of the initial video to play
          var initialVideoId = 'VF3Z5AfWJgck';
          
          // Create a new YouTube player object
          var player = new YT.Player('player', {
            height: '500',
            width: '100%',
            videoId: initialVideoId,
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
          
          // When the player is ready, start loading related videos
          function onPlayerReady(event) {
            var request = gapi.client.youtube.search.list({
              part: 'snippet',
              relatedToVideoId: initialVideoId,
              type: 'video',
              maxResults: 10
            });
            request.execute(function(response) {
              processResults(response.result.items);
            });
          }
          
          // When the player's state changes, check if the video ended and load more related videos
          function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED) {
              var request = gapi.client.youtube.search.list({
                part: 'snippet',
                relatedToVideoId: initialVideoId,
                type: 'video',
                maxResults: 10,
                pageToken: nextPageToken
              });
              request.execute(function(response) {
                processResults(response.result.items);
              });
            }
          }
          
          // Process a list of search results and load them into the player
          function processResults(items) {
            var videoIds = [];
            var html = '';
            for (var i = 0; i < items.length; i++) {
              var item = items[i];
              var videoId = item.id.videoId;
              var title = item.snippet.title;
              var thumbnailUrl = item.snippet.thumbnails.high.url;
              videoIds.push(videoId);
              html += '<div class="related-video">' +
                      '<img src="' + thumbnailUrl + '" alt="' + title + '">' +
                      '<h3>' + title + '</h3>' +
                      '</div>';
            }
            $('#related-videos').append(html);
            player.cuePlaylist(videoIds);
          }
        });
      });
    </script>
    </body>