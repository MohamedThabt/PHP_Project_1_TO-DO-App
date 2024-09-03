<?php
session_start(); // to use session


$connect= mysqli_connect('localhost','root','','TO_DO');
if(!$connect){
    echo 'connect error' . mysqli_connect_error($connect);
}


if(isset($_GET['id'])){
   

     // fetch id 
    $id =$_GET['id'];
    // delete query
    $sql = "DELETE FROM tasks WHERE id='$id'";
    mysqli_query($connect, $sql);
    // make sure query is implemented
    if(mysqli_affected_rows($connect) == 1){
        $_SESSION['success'] = "Task Deleted Succesfully";
    }

    // to reorder ids of tasks
    $sql_2="ALTER TABLE tasks AUTO_INCREMENT = 1";
    mysqli_query($connect, $sql_2 );

      // Close the connection
      mysqli_close($connect);

      
    // redirection
    header("location:../index.php");
    exit(); // Ensure no further code is executed after redirection
}





