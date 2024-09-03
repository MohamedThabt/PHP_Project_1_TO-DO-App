<?php

/***document of this code***
 * --title >> is name of input field in form
 * --trim >> remove spaces
 * --htmlspecialchars & htmlentities >> to secure data
 * */

 session_start(); // to use session

//                 open connecttion
 $connect= mysqli_connect('localhost','root','','TO_DO');
if(!$connect){
    echo 'connect error' . mysqli_connect_error($connect);
}


 //                     check request
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'])){
    //                   sanatize data
    $title = trim(htmlspecialchars(htmlentities($_POST['title']))); 

    //          insert task in data base

    $sql = "INSERT INTO tasks (title) VALUES ('$title')";
    $result = mysqli_query($connect, $sql);
    //          to make sure transaction
    if(mysqli_affected_rows($connect) == 1){
        $_SESSION['success'] = "Task Added Successfully";
    }
   
    // redirection
    header("location:../index.php");
}











