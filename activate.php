<?php

session_start();

@include 'config.php';

if(isset($_GET['token'])){

    $token = $_GET['token'];

    $updatequery = " UPDATE user_form set status='active' where token='$token' ";
    $query = mysqli_query($conn, $updatequery);
    
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account update successfully!!";
            header('location:login_form.php');
        }
        else{
            $_SESSION['msg'] = "You are logged out!!";
            header('location:login_form.php');
        }
    }
    else{
        $_SESSION['msg'] = "Account not updated .";
        header('location:register_form.php');
    }
}


?>