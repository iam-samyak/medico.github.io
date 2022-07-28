<?php

@include 'config.php';

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
}

$select = mysqli_query($conn, " SELECT * FROM appoinment_details WHERE app_id = '$id' ");

$row = mysqli_fetch_array($select);

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);


    $result = mysqli_query($conn, " UPDATE appoinment_details SET app_name = '$name' , app_email = '$email' , app_date = '$date'  WHERE app_id = '$id' ");
    header('location:admin_appoinment.php');
    
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
            <h3>Update Appoinment Here</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="name" required placeholder="Name" value="<?php echo $row['app_name']; ?>">
            <input type="email" name="email" required placeholder="Email" value="<?php echo $row['app_email']; ?>">
            <input type="date" name="date" required value="<?php echo $row['app_date']; ?>"><br>
            <br><br>
            <input type="submit" name="submit" value="Update" class="form-btn">
        </form>
    </div>

            
</body>
</html>