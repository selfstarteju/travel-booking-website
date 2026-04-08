<?php session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../adminLogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
    <title>Admin Dashboard | Tourism Management</title>
    <style>
      body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        background-attachment: fixed;
        color: #fff;
        margin: 0;
        padding: 0;
      }
      
      .navbar-admin {
        background: rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(10px);
        border: none;
        border-radius: 0;
        padding: 15px 0;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      }
      
      .navbar-admin .navbar-brand {
        color: #fff !important;
        font-weight: 800;
        font-size: 24px;
        letter-spacing: 1px;
      }
      
      .navbar-admin .nav > li > a {
        color: #e0e0e0 !important;
        font-weight: 600;
        transition: color 0.3s;
      }
      
      .navbar-admin .nav > li > a:hover {
        color: #00d2ff !important;
        background: transparent;
      }
      
      .header-title {
        text-align: center;
        margin: 40px 0 60px;
        font-weight: 800;
        font-size: 48px;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0px 4px 15px rgba(0,0,0,0.5);
      }

      .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        padding: 0 15px;
        margin-bottom: 60px;
      }

      .card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 30px 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 210, 255, 0.2);
        background: rgba(255, 255, 255, 0.1);
      }

      .card i {
        font-size: 50px;
        margin-bottom: 20px;
        background: -webkit-linear-gradient(45deg, #3a7bd5, #00d2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .card h3 {
        font-size: 24px;
        font-weight: 800;
        margin-bottom: 20px;
        color: #fff;
      }

      .card .btn-custom {
        display: block;
        width: 100%;
        margin-bottom: 10px;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s;
        border: none;
      }

      .btn-add { background: rgba(58, 123, 213, 0.8); color: white; }
      .btn-add:hover { background: #3a7bd5; color: white; }

      .btn-update { background: rgba(255, 153, 0, 0.8); color: white; }
      .btn-update:hover { background: #ff9900; color: white; }

      .btn-view { background: rgba(0, 200, 83, 0.8); color: white; }
      .btn-view:hover { background: #00c853; color: white; }

      .btn-custom:last-child {
        margin-bottom: 0;
      }

    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-admin">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><i class="fa fa-globe"></i> Tourism Admin</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php" target="_blank"><i class="fa fa-external-link"></i> View User Panel</a></li>
          <li><a href="adminLogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <h1 class="header-title">Admin Dashboard</h1>

      <div class="dashboard-grid">
        <!-- Users Card -->
        <div class="card">
          <i class="fa fa-users"></i>
          <h3>User Management</h3>
          <a href="users_add.php" class="btn btn-custom btn-add"><i class="fa fa-plus"></i> Add User</a>
          <a href="users_update.php" class="btn btn-custom btn-update"><i class="fa fa-edit"></i> Update User</a>
        </div>

        <!-- Hotels Card -->
        <div class="card">
          <i class="fa fa-building"></i>
          <h3>Hotel Management</h3>
          <a href="hotels_add.php" class="btn btn-custom btn-add"><i class="fa fa-plus"></i> Add Hotel</a>
          <a href="hotels_update.php" class="btn btn-custom btn-update"><i class="fa fa-edit"></i> Update Hotel</a>
          <a href="hotelbookings_view.php" class="btn btn-custom btn-view"><i class="fa fa-eye"></i> View Bookings</a>
        </div>

        <!-- Flights Card -->
        <div class="card">
          <i class="fa fa-plane"></i>
          <h3>Flight Management</h3>
          <a href="flights_add.php" class="btn btn-custom btn-add"><i class="fa fa-plus"></i> Add Flight</a>
          <a href="flights_update.php" class="btn btn-custom btn-update"><i class="fa fa-edit"></i> Update Flight</a>
          <a href="flightbookings_view.php" class="btn btn-custom btn-view"><i class="fa fa-eye"></i> View Bookings</a>
        </div>

        <!-- Trains Card -->
        <div class="card">
          <i class="fa fa-train"></i>
          <h3>Train Management</h3>
          <a href="trains_add.php" class="btn btn-custom btn-add"><i class="fa fa-plus"></i> Add Train</a>
          <a href="trains_update.php" class="btn btn-custom btn-update"><i class="fa fa-edit"></i> Update Train</a>
          <a href="trainbookings_view.php" class="btn btn-custom btn-view"><i class="fa fa-eye"></i> View Bookings</a>
        </div>
        <!-- Queries Card -->
        <div class="card">
          <i class="fa fa-envelope"></i>
          <h3>Contact Queries</h3>
          <a href="queries_view.php" class="btn btn-custom btn-view"><i class="fa fa-eye"></i> View Queries</a>
        </div>
      </div>
      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
