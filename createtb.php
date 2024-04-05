<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, "csp");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "connected successfully";

$sql = "CREATE TABLE women (
    name VARCHAR(20),
    password VARCHAR(20),
    email VARCHAR(20),
    mnum INT,
    gender VARCHAR(20),
    languagesknown VARCHAR(20),
    dob VARCHAR(20),
    addr VARCHAR(20)
)";

if (mysqli_query($con, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);
?>
