<?php
// Set the filename for the traffic counter
$filename = 'traffic.txt';

// Check if the traffic counter file exists
if (file_exists($filename)) {
  // If the file exists, read the current traffic count
  $current_count = intval(file_get_contents($filename));
} else {
  // If the file doesn't exist, create it with a starting count of 0
  $current_count = 0;
  file_put_contents($filename, '0');
}

// Increment the traffic count by 1
$current_count++;

// Save the updated traffic count to the file
file_put_contents($filename, strval($current_count));


?>