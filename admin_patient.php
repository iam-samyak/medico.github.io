<?php
    @include 'config.php';

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($conn," DELETE FROM user_form WHERE id = $id ");
        header('location:admin_patient.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Medicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <!-- header  -->
    <header class="header">
        <a href="#home" class="logo"><i class="fas fa-heartbeat"></i> Medicio.</a>

        <nav class="navbar">
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=user_db&table=user_form&pos=0">Database Access</a>
            <a href="http://localhost/login/admin_doctor.php">Doctor Record</a>
            <a style="color:#00CDFF;" href="http://localhost/login/admin_patient.php">Patient Record</a>
            <a href="http://localhost/login/admin_appoinment.php">Appoinment Details</a>
            <a href="http://localhost/login/logout.php" class="appoinmentbtn">Hi Admin-Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    
    <?php
        $select = mysqli_query($conn, "SELECT * FROM user_form");
    
    ?>
    <table class="table" style="margin-top:12rem;">
        <thead>
         <tr>
            <th style="text-align: center; font-size: 1.5rem;" scope="col">#Id</th>
            <th style="text-align: center; font-size: 1.5rem;" scope="col">Patient Name</th>
            <th style="text-align: center; font-size: 1.5rem;" scope="col">Email</th>
            <th style="text-align: center; font-size: 1.5rem;" scope="col">Password</th>
            <th style="text-align: center; font-size: 1.5rem;" scope="col">Email Activation</th>
            <th style="text-align: center; font-size: 1.5rem;" scope="col">Action</th>
            
        </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_array($select)){
                if($row['user_type'] == 'patient'){
            
        ?>
            <tr>
                <td style="text-align:center; font-size:1.2rem;"><?php echo $row['id']; ?></td>
                <td style="text-align:center; font-size:1.2rem;"><?php echo $row['name']; ?></td>
                <td style="text-align:center; font-size:1.2rem;"><?php echo $row['email']; ?></td>
                <td style="text-align:center; font-size:1.2rem;"><?php echo $row['password']; ?></td>
                <td style="text-align:center; font-size:1.2rem;"><?php echo $row['status']; ?></td>
                <th style="text-align: center; font-size: 1.5rem;" scope="col">
                <a href="http://localhost/login/admin_update.php?edit=<?php echo $row['id']; ?>" ><i class="fas fa-edit"></i></a>
                <a style="color:red;" href="http://localhost/login/admin_patient.php?delete=<?php echo $row['id']; ?>" ><i class="fas fa-trash"></i></a>
            </th>
            </tr>
        <?php
            }
        };
        ?>

    </table>
    <a href="http://localhost/login/admin_add.php" ><i class="fas fa-plus" style="text-align: center; font-size: 2rem; float:right; margin-right:4rem; background-color:green;color:white;padding:0rem;border-radius:0.2rem;"></i></a>



    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>