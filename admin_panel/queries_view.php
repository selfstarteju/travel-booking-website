<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../adminLogin.php');
}
require_once("../db/db.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>View Contact Queries | Tourism Admin</title>
    <style>
      body { background: #f4f7f6; font-family: 'Inter', sans-serif;}
      .table-container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-top: 20px;}
      .header-area { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
      .table thead { background-color: #2c5364; color: white; }
    </style>
  </head>
  <body>
  <?php include("admin_nav.php"); ?>

  <div class="container">
      <div class="header-area">
          <h2><i class="fa fa-envelope"></i> Contact Us Queries</h2>
      </div>

      <div class="table-container">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Query</th>
                      <th>Date Received</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $sql = "SELECT * FROM contact_queries ORDER BY created_at DESC";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_array($result)) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                          echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                          echo "<td>" . htmlspecialchars($row["query"]) . "</td>";
                          echo "<td>" . $row["created_at"] . "</td>";
                          echo "</tr>";
                      }
                  } else {
                      echo "<tr><td colspan='5' class='text-center'>No queries found!</td></tr>";
                  }
                  $conn->close();
                  ?>
              </tbody>
          </table>
      </div>
  </div>

  </body>
</html>
