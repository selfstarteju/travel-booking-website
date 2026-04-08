<style>
    .admin-navbar {
        background: #1a1a1a;
        color: #fff;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }
    .admin-navbar .brand {
        font-size: 20px;
        font-weight: bold;
        color: #00d2ff;
        text-decoration: none;
    }
    .admin-navbar .nav-links {
        display: flex;
        gap: 15px;
    }
    .admin-navbar a {
        color: #ddd;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }
    .admin-navbar a:hover {
        color: #fff;
    }
    .admin-navbar .logout-btn {
        background: #e74c3c;
        padding: 5px 12px;
        border-radius: 4px;
        color: #fff;
    }
    .admin-navbar .logout-btn:hover {
        background: #c0392b;
    }
</style>

<div class="admin-navbar">
    <a href="Home.php" class="brand"><i class="fa fa-dashboard"></i> ADMIN DASHBOARD</a>
    <div class="nav-links">
        <a href="users_add.php">Users</a>
        <a href="hotels_add.php">Hotels</a>
        <a href="hotelbookings_view.php">Hotel Bookings</a>
        <a href="flights_add.php">Flights</a>
        <a href="flightbookings_view.php">Flight Bookings</a>
        <a href="trains_add.php">Trains</a>
        <a href="trainbookings_view.php">Train Bookings</a>
        <a href="queries_view.php">Queries</a>
        <a href="../index.php" target="_blank">View Site</a>
        <a href="adminLogout.php" class="logout-btn">Logout</a>
    </div>
</div>
