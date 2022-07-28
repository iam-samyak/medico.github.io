<?php

@include 'config.php';

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
}

$select = mysqli_query($conn, " SELECT * FROM user_form WHERE id = '$id' ");

$row = mysqli_fetch_array($select);

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $user_type = $_POST['user_type'];
    $status = $_POST['status'];


    $result = mysqli_query($conn, " UPDATE user_form SET name = '$name' , email = '$email' , user_type = '$user_type' , status = '$status' WHERE id = '$id' ");
    header('location:admin.php');
    
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
    <!-- header  --><header class="header">
        <a href="#home" class="logo"><i class="fas fa-heartbeat"></i> Medicio.</a>

<nav class="navbar">
    <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=user_db&table=user_form&pos=0">Database Access</a>
    <a href="http://localhost/login/admin_doctor.php">Doctor Record</a>
    <a href="http://localhost/login/admin_patient.php">Patient Record</a>
    <a href="http://localhost/login/admin_appoinment.php">Appoinment Details</a>
    <a href="http://localhost/login/logout.php" class="appoinmentbtn">Hi Admin-Logout</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</header>
        <!-- header ends -->

    <div class="form-container" id="form-container">
        <form action="" method="post">
            <h3>Update Here</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="name" required value="<?php echo $row['name']; ?>">
            <input type="email" name="email" required value="<?php echo $row['email']; ?>">
            <p>Edit user type : </p><select name="user_type" required>
            <option value="" selected disabled hidden>Choose here</option>
                <option class="opt"value="doctor">Doctor</option>
                <option class="opt"value="patient">Patient</option>
            </select><p>Edit email activation : </p><select name="status" required>
            <option value="" selected disabled hidden>Choose here</option>
                <option class="opt"value="active">Active</option>
                <option class="opt"value="inactive">Inactive</option>
            </select><br><br>
            <input type="submit" name="submit" value="Update" class="form-btn">
        </form>
    </div>

            
</body>
</html>