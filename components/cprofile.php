

<style>
#submit{
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px;
  font-size: 20px;
  cursor: pointer;
  margin: 10px;
  width: 90%;

}

table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: auto;
}

th, td {
  text-align: left;
  padding: 12px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.profinfo{
  margin: 0 auto;
  width: 100%;
  max-width: 800px;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 10px;
  margin-top: 20px;
}

</style>
 <div class="profinfo">

<link rel="stylesheet" href="style.css">
 <table class="table table-bordered">
   <tbody>


     <td><strong>Name:</strong></td>
     <td><?php echo $_SESSION['name']; ?></td>
     </tr>
     <tr>
       <td><strong>Username:</strong></td>
       <td><?php echo $_SESSION['username']; ?></td>
     </tr>
     <tr>
       <td><strong>Address:</strong></td>
       <td><?php echo $_SESSION['address']; ?></td>
     </tr>
     <tr>
       <td><strong>Shift:</strong></td>
       <td><?php echo $_SESSION['shift']; ?></td>
     </tr>
     <tr>
       <td><strong>Stream:</strong></td>
       <td><?php echo $_SESSION['stream']; ?></td>
     </tr>
     <tr>
       <td><strong>Phone:</strong></td>
       <td><?php echo $_SESSION['phone']; ?></td>
     </tr>
     <tr>
       <td><strong>Year:</strong></td>
       <td><?php echo $_SESSION['year']; ?></td>
     </tr>
   </tbody>
 </table>
<br>
 <a id="submit" href="../pages/edit.php?username=<?php echo $_SESSION['username']; ?>" > <i class="fa fa-pencil-square-o" style="color:white; margin:auto 1rem;" aria-hidden="true"></i>
Edit</a>
 <!-- <a href="../scripts/logout.php" class="btn">Logout</a> -->


</div>
