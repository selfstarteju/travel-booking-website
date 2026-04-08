<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../adminLogin.php');
}
require_once("../db/db.php");
$bookingID="";
$hotelName="";
$date="";
$username="";
$cancelled="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//get data from the form
function getData()
{
	$data = array();

	$data[1]=$_POST['hotelName'];
	$data[2]=$_POST['date'];
	$data[3]=$_POST['username'];
	$data[4]=$_POST['cancelled'];
	return $data;
}
//search
if(isset($_POST['search']))
{
	$info = getData();
	$search_query="SELECT * FROM hotelbookings WHERE bookingID = '$info[0]'";
	$search_result=mysqli_query($conn, $search_query);
		if($search_result)
		{
			if(mysqli_num_rows($search_result))
			{
				while($rows = mysqli_fetch_array($search_result))
				{
					$bookingID = $rows['bookingID'];
					$hotelName = $rows['hotelName'];
					$date = $rows['date'];
					$username = $rows['username'];
					$cancelled = $rows['cancelled'];

				}
			}else{
				echo("No data are available");
			}
		} else{
			echo("Result error");
		}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Panel | Hotel Bookings </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background: #f4f7f6; font-family: 'Inter', sans-serif;">
    <?php include("admin_nav.php"); ?>


	

    <div class="col-lg-8">
			<h1 class="text-danger text-center" style="font-weight:bold">Hotel Booking Details</h1>
			<br>
			<br>
			<div>
<?php
$sql = "SELECT bookingID, hotelName, date, username, cancelled FROM hotelbookings";
$result = mysqli_query($conn, $sql);

echo "
<center>
<table class='table table-striped table-bordered table-hover' style='width:90%; border: 2px solid #ddd; background: white; text-align: center; margin-top:20px;'>
<tr class='text-white' style='font-size:18px; background:#2c5364'>
<th>Booking ID</th>
<th>Hotel Name</th>
<th>Date</th>
<th>Username</th>
<th>Cancelled</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {

      echo "<tr>";
echo "<td>" . $row['bookingID'] . "</td>";
echo "<td>" . $row['hotelName'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['cancelled'] . "</td>";

echo "</tr>";


    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div>
</div>
</body>
</html>
