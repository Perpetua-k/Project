<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_type = $_POST['user_type'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = "SELECT * FROM users WHERE username = '$username' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:Admin Panel.php');
        }else{
            $error[] = 'incorrect email or password';
        }
    }


};

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Admin page</title>

    <!--custom cssfile link -->
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link href="https://fonts.googleapis.com/css2?family=montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

</head>
<body>

<div class="container">

    <div class="content">
        <h3>Hi, <span>admin</span></h3>
        <h1>Welcome <span></span></h1>
        <p>This is an Admin page</p>
        <a href="index.php" class="btn">Login</a>
        <a href="SignUp.php" class="btn">SignUp</a>
        <a href="LogOut.php" class="btn">LogOut</a>
    </div>
    <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<div class="error-msg">'.$error.'</div>';
                };
            };
        ?>
        
</div>

</body>
</html>