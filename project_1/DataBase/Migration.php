<?php
//========================================
//               CREATE DATABASE        ||
//========================================
// 

$connect = mysqli_connect("localhost", "root", "");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully". '<br>';

// SQL query to create database
$sql = "CREATE DATABASE IF NOT EXISTS TO_DO";

// Execute query
if (mysqli_query($connect, $sql)) {
    echo "Database created successfully" . '<br>';
} else {
    echo "Error creating database: " . mysqli_error($connect);
}

// Close connection
mysqli_close($connect);



 
//========================================
//               CRAETE TASKS  TABLE    ||
//========================================
//              open connection
$connect = mysqli_connect("localhost","root","","TO_DO");

if(!$connect){
    echo "connect error" . mysqli_error($connect);
}


// create table
$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL
)";

if( mysqli_query($connect, $sql)){
    echo "the tasks table created successfully". '<br>';
}
else {
    echo "Error creating database: " . mysqli_error($connect);
}
// close connection
mysqli_close($connect);









?>