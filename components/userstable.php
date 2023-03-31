<style>
  table {
    border-collapse: collapse;
    width: 100%;
    text-align: left;
    font-size: 1em;
    font-weight: 500;
  }

  thead th {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }

  tbody td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }

  tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  @media screen and (max-width: 600px) {

    table,
    thead,
    tbody,
    th,
    td,
    tr {
      display: block;
    }

    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr {
      border: 1px solid #ccc;
    }

    td {
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
    }

    td:before {
      position: absolute;
      top: 6px;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
      content: attr(data-column);
      color: #000;
      font-weight: 700;
    }
  }
</style>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<?php
include('../scripts/connection.php');

$sql = "SELECT * FROM userdetails";
$result = mysqli_query($conn, $sql);
$total_user = mysqli_num_rows($result);
?>

<table>
  <thead>
    <tr>
      <th>Username</th>
      <th>Name</th>
      <th>Stream</th>
      <th>Shift</th>
      <th>Phone</th>
      <th>Year</th>
      <th>Address</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <?php
  // Fetch the data from the users table
  $sql = "SELECT * FROM userdetails";
  $result = mysqli_query($conn, $sql);
  $total_user = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
        <tr>
          <td>" . $row["username"] . "</td>
          <td>" . $row["name"] . "</td>
          <td>" . $row["stream"] . "</td>
          <td>" . $row["shift"] . "</td>
          <td>" . $row["phone"] . "</td>
          <td>" . $row["year"] . "</td>
          <td>" . $row["address"] . "</td>
          <td>
            <a href='modify.php?id=" . $row["id"] . "'><i class='fas fa-edit'></i></a>
          </td>
          <td>
            <a href='../scripts/delete-script.php?id=" . $row["id"] . "'><i class='fas fa-trash-alt'></i></a>
          </td>
        </tr>
      ";
    }
  } else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
  }

  mysqli_close($conn);
  ?>
</table>
