

<!DOCTYPE html>
<html lang="en">

<?php include('../scripts/info-script.php');
include('../scripts/register-script.php');
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<title>Enter Your Information</title>
  <style>
    .btn:disabled{
  background-color: white;
  color: grey;
  opacity: 0.3;
}

.container {
      width: 100%;
      height: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 1rem;
      border: 1px solid #ccc;
      border-radius: 0.5rem;
      margin-top: 1rem;
    }
    .form-group {
      margin: 0.3rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.3rem;
    }

    .form-control {
      width: 100%;
      padding: 0.5rem;
      border-radius: 0.5rem;
      border: 2px solid #ccc;


    }

    .form-control:focus {
      outline: none;
      border: 2px solid #007bff;
    }

    .formimg {
      padding: 1rem;
    }

    span {
      text-align: center;
      font-size: 1.5rem;
      font-weight: 600;
      color: #007bff;
    }

    .btn {
      margin-top: 1rem;
    }
  </style>
</head>

<body>
  <?php include('../components/navbar.php'); ?>

  <main>
    <div class="container">


      <form action="" method="post">
        <span>Please Fill Your Details Correctly</span>
        <div class="form-group ">
          <label for="name">Name</label>
          <div class="">
            <input type="text" class="form-control border " name="name" id="name" placeholder="Your name" required>
          </div>
        </div>

        <div class="form-group ">
          <label for="phone" class="col-sm-2 col-form-label">Phone</label>
          <div class="">
            <input type="tel" class="form-control border " name="phone" id="phone" placeholder="Your Phone number " required>
          </div>
        </div>

        <div class="form-group ">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="">
            <input type="text" class="form-control border " name="address" id="address" placeholder="Your address" required>
          </div>
        </div>

        <div class="form-group ">
          <label for="stream" class="col-sm-2 col-form-label">Stream</label>
          <div class="">
            <select name="stream" id="stream" class="form-control border " required>
              <option value="Science">Science</option>
              <option value="Management">Management</option>
              <option value="Humanities">Humanities</option>
              <option value="others">others</option>

            </select>


          </div>
        </div>

        <div class="form-group ">
          <label for="shift" class="col-sm-2 col-form-label">Shift</label>

          <div class="">
            <select name="shift" id="shift" class="form-control border " required>
              <option value="Day">Day</option>
              <option value="Morning">Morning</option>
            </select>
          </div>
        </div>

        <div class="form-group ">
          <label for="year" class="col-sm-2 col-form-label">Year</label>
          <div class="">
            <input type="date" name="year" id="year" class="form-control border">
          </div>
        </div>

        <button type="submit" class="btn">Submit</button>

      </form>
    </div>
  </main>

  <script>
    let name = document.getElementById('name');
    var phone = document.getElementById('phone');
    var address = document.getElementById('address');
    var stream = document.getElementById('stream');
    var shift = document.getElementById('shift');
    var year = document.getElementById('year');

//disable submit btn until the form is validated properly
name.addEventListener('input', validateForm);
phone.addEventListener('input', validateForm);
address.addEventListener('input', validateForm);
stream.addEventListener('input', validateForm);
shift.addEventListener('input', validateForm);
year.addEventListener('input', validateForm);

function validateForm() {
let valid =true;
if(name.value.length < 3) {
valid = true;


}
if(phone.value.length < 10) {
valid = false;
}
if(address.value.length < 5) {
valid = false;
}
if(stream.value.length < 1) {
valid = false;
}
if(shift.value.length < 1) {
valid = false;
}
if(year.value.length < 1) {
valid = false;
}

if(valid) {

document.querySelector('button[type="submit"]').disabled = false;
} else {
document.querySelector('button[type="submit"]').disabled = true;
}

}




  </script>
</body>

</html>