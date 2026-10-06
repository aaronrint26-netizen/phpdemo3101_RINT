<?php

$hostname =  "localhost";
$username = "root";
$password = "";
$db_name = "attendance_db";

$conn = new mysqli($hostname, $username, $password, $db_name);
if ($conn) {
    echo "Database is connected!";
}else{
    echo "Error!";
}

// Select all data

$query = $conn->query("SELECT * FROM students");
$data = $query->fetch_all(MYSQLI_ASSOC);
echo "<br>";
echo "<br>";
echo "Data in attendance table";
foreach ($data as $row) {
    echo "<br>";
    echo "<br>";
    echo $row['student_id'], "<br>";
    echo $row['name'], "<br>";
}

?>