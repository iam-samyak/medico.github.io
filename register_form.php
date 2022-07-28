<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
    $token = bin2hex(random_bytes(15));
    $mail = new PHPMailer(true);

    $select = " SELECT * FROM user_form WHERE email = '$email' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!';
    }
    else{
        if($pass != $cpass){
            $error[] = 'password not match!';
        }
        else{
            $insert = " INSERT INTO user_form(name, email, password, user_type, token, status) VALUES('$name','$email','$pass','$user_type','$token','inactive')";
            $iquery = mysqli_query($conn, $insert);

            if($iquery){
                 $mail->isSMTP();                                           
                 $mail->Host       = 'smtp.gmail.com';                     
                 $mail->SMTPAuth   = true;                                   
                 $mail->Username   = 'samyakjain2109@gmail.com';                    
                 $mail->Password   = 'lqpvlknuijujmmnd';                             
                 $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                 $mail->Port       = 465;                                    
                 $mail->setFrom('samyakjain2109@gmail.com', 'Medico');
             
                 $mail->addAddress($email);             
             
             
                 $mail->isHTML(true);                                 
                 $mail->Subject = 'Verify Account - Email Activation';
                 $mail->Body    = 'Click here to verfiy account. http://localhost/login/activate.php?token='.$token.'.' ;
             
                 if($mail->send()){
                    session_start();
                    $_SESSION['msg'] = "Check your mail to activate your account $email .";
                    header('location:login_form.php');}
                    else{
                       $error[] = "Email sending failed.";
                    }
            }
            else{
                echo 'unsuccessfull';
            }
        }
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
    
    <title>Register - Medicio</title>
</head>
<body>
    <!-- header  -->
    <header class="header">
            <a href="#form-container" class="logo"><i class="fas fa-heartbeat"></i> Medicio.</a>

            <nav class="navbar">
                <a href="http://localhost/login/register_form.php" class="appoinmentbtn">Login/Register</a>
            </nav>
        </header>
        <!-- header ends -->
    <div class="form-container" id="form-container">
        <form action="" method="post">
            <h3>Register Here</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?><br>
            <input type="text" name="name" required placeholder="Enter your Name">
            <input type="email" name="email" required placeholder="Enter your Email">
            <input type="password" name="password" required placeholder="Enter your Password">
            <input type="password" name="cpassword" required placeholder="Confirm your Password">
            <p>Registering as : </p><select name="user_type" required>
                <option value="" selected disabled hidden>Choose here</option>
                <option class="opt"value="doctor">Doctor</option>
                <option class="opt"value="patient">Patient</option>
            </select><br><br>
            <input type="submit" name="submit" value="Register now" class="form-btn">
            <p>Alreay have account? <a href="login_form.php">Login Here</a></p>
        </form>
    </div>

            <!-- contact section start -->
            <section class="contact" id="contact">
            <h3 class="heading">Contact<span>Us</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolorum odio temporibus fuga impedit commodi maxime laudantium modi adipisci non.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.9726496277117!2d75.89278031443688!3d22.729257932931414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd0b7d3aab15%3A0x1215c842d731998f!2sMXPERTZ!5e0!3m2!1sen!2sus!4v1658489600316!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-location-dot"></i>
                    <h3>Address</h3>
                    <p>565,Lorem, ipsum.<br>Lorem, ipsum.</p>
                </div>
                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>abcd@xyz.com<br>abcdk@xyz.com</p>
                </div>
                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>Contact Us</h3>
                    <p>+91-5455525257<br>+91-5556552232</p>
                </div>
            </div>
        </section>

        <!-- contact us section ends -->
        <!-- footer section start -->
        <section class="footer" id="footer">
            <div class="box-container">

                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"><i class="fas fa-phone"></i>+91-5455525257</a>
                    <a href="#"><i class="fas fa-phone"></i>+91-5455525257</a>
                    <a href="#"><i class="fas fa-envelope"></i>abcd@xyz.com</a>
                    <a href="#"><i class="fas fa-envelope"></i>abcd@xyz.com</a>
                    <a href="#"><i class="fas fa-location-dot"></i>5156,Lorem, ipsum dolor.</a>
                </div>
                <div class="box">
                    <h3>Follow Us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
                </div>
            </div>
            <div class="credit">© Created By <span>Samyak Jain</span> | All Rights Reserved</div>
        </section>
</body>
</html>