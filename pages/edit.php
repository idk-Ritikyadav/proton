<?php
  include('../scripts/edit-script.php');
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<title>Edit Your Details</title>
    <style>
      
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

        h3{
          color: bisque;
          font-size: 2rem;
        }

        .btn{
          margin-top: 1rem;
        }
    </style>
</head>

<body>
<?php include('../components/navbar.php'); ?>

    <main>
        <div class="container">

           
<form action="../scripts/editinfo.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <?php if(!empty($msg)){echo $msg; }?>
          <h3>Edit Your Details Correctly</h3>
                  <div class="form-group ">
                    <label for="name" class="col-sm col-form-label">Name</label>
                    <div class="">
                      <input type="text" class="form-control border " name="name" id="name" value="<?php echo $row['name']; ?>" placeholder="Enter name" required>
                    </div>
                  </div>

                  
          
                  <div class="form-group ">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="">
                      <input type="tel" class="form-control border " name="phone" id="phone" value="<?php echo $row['phone']; ?>" placeholder="Enter phone number" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="">
                      <input type="text" class="form-control border " name="address" id="address" value="<?php echo $row['address']; ?>" placeholder="Enter address" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="stream" class="col-sm-2 col-form-label">Stream</label>
                    <div class="">
                      <input type="text" class="form-control border " name="stream" id="stream" value="<?php echo $row['stream']; ?>" placeholder="Enter stream" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="shift" class="col-sm-2 col-form-label">Shift</label>
                    <div class="">
                      <input type="text" class="form-control border " name="shift" id="shift" value="<?php echo $row['shift']; ?>" placeholder="Enter shift" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="year" class="col-sm-2 col-form-label">Year</label>
                    <div class="">
                      <input type="text" class="form-control border " name="year" id="year" value="<?php echo $row['year']; ?>" placeholder="Enter your admission year" required>
                    </div>
                  </div>
                  <button type="submit" value="Update" class="btn btn-primary">Edit</button>
          
                </form>
        </div>
    </main>
</body>

</html>