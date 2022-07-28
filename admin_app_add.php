<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);

    $select = " SELECT * FROM appoinment_details WHERE app_email = '$email' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'appoinment already exist!';
    }
    else{
            mysqli_query($conn, " INSERT INTO appoinment_details(app_name, app_email, app_date) VALUES('$name','$email','$date')");
            header('location:admin_appoinment.php');
    }
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <title>Admin - Medicio</title>
</head>
<body>
    <!-- header  -->
    <header class="header">
        <a href="#home" class="logo"><i class="fas fa-heartbeat"></i> Medicio.</a>

<nav class="navbar">
    <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=user_db&table=user_form&pos=0">Database Access</a>
    <a href="http://localhost/login/admin_doctor.php">Doctor Record</a>
    <a href="http://localhost/login/admin_patient.php">Patient Record</a>
    <a style="color:#00CDFF;" href="http://localhost/login/admin_appoinment.php">Appoinment Details</a>
    <a href="http://localhost/login/logout.php" class="appoinmentbtn">Hi Admin-Logout</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</header>
        <!-- header ends -->
    <div class="form-container" id="form-container">
        <form action="" method="post">
            <h3>Add new appoinment here</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?><br>
            <input type="text" name="name" required placeholder="Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="date" name="date" required class="box"><br>
            <input type="submit" name="submit" value="Add Appoinment" class="form-btn">
        </form>
    </div>

</body>
</html>