<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $queries = $_POST["queries"];

    $servername = "localhost";
    $usernameConn = "root";
    $passwordConn = "";
    $dbname = "projectmeteor";

    $conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contact_queries (name, email, query) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $queries);

    if ($stmt->execute()) {
        header("Location: contactUs.php?success=1");
    } else {
        echo "Error logging query.";
    }

    $stmt->close();
    $conn->close();
}
?>
