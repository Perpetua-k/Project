<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_type = $_POST['user_type'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist';

    }else{

        if($pass != $cpass){

            $error[] = 'password did not match!';

        }else{
            $insert = "INSERT INTO users (name, username, email, user_type, password) VALUES('$name','$username','$email','$user_type','$pass')";
            mysqli_query($conn, $insert);
            header('location:index.php');
        }
    }


};

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> SignUp Form</title>
        <!--Custom css file link-->
        <link rel="stylesheet" href="CSS/style.css">
        <!--Custom font link-->
        <link href="https://fonts.googleapis.com/css2?family=montserrat" rel="stylesheet">
        <style>

            body{
                background:linear-gradient(120deg,#20908e,#a983ba);
                font-family:'montserrat';
            }
            .form-container{
                width: 450px;
                height: 90vh;
                background-color: #fff;
                border-radius: 1em;
                margin-top: 15px;
                margin-left: 500px;
            }

            form{
                width: 400px;
                margin-left: 20px;
            }
            form h3{
                text-align: center;
                padding-top: 20px;
                text-transform: uppercase;
            }
            form p{
                font-size: 18px;
            }
            form .box{
                margin-top: 20px;
                font-size: 18px;
            }form .user_type{
                margin-top: 20px;
                font-size: 18px;
            }
            form input{
                width: 100%;
                padding: 7px;
                border: none;
                border: 1px solid gray;
                border-radius: 6px;
                outline: none;
            }
            input[type="submit"]{
                width: 100%;
                height: 35px;
                margin-top: 20px;
                border: none;
                background-color: #49c1b5;
                color: white;
                font-size: 18px;
                cursor: pointer;
            }
            p{
                text-align:center;
                padding-top: 20px;
                font-size: 15px;
            }
            p a{
                text-decoration: none;
                color: cyan;
                padding: 0 5px;
            }
            .error-msg{
                color: cyan;
                font-size: 20px;
                background-color: grey;
                width: 100%;
                height: 50px;
                text-align: center;
                padding: 15px 0;

            }
        </style>
    </head>
    <body>
<!--Header start-->
    <div class="navbar">
            <div class="logo">
                <a href="HOME.php"> Travel</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="HOME.php"TARGET="main">HOME</a></li>
                    <li><a href="PACKAGES.php"TARGET="main">PACKAGES</a></li>
                    <li><a href="TRAVELITINERARY.php"TARGET="main">TRAVEL ITINERARY</a></li>
                    <li><a href="CONTACT.php"TARGET="main">CONTACT</a></li>
                    <li><a href="FAQS.php"TARGET="main">FAQS</a></li>
                </ul>
        </div>
        <div class="signup">
            <a href="SignUp.php" target = "main">Sign Up</a>
        </div>
    </div>
<!--Header Ends here-->

<!--Signup form starts here-->
    <div class="form-container">
        <form action="" method="post">
            <h3>Sign Up</h3>
            <p>It's free and only takes a minute</p>
            
<!--PHP error code starts here-->
            <?php
            
                if(isset($error)){
                    foreach($error as $error){
                        echo '<div class="error-msg">'.$error.'</div>';
                    };
                };
            ?>
<!--PHP error code starts ends-->

                <input type="text" name="name" required placeholder="enter your name" class="box">
                <input type="text" name="username" required placeholder="enter your username" class="box">
                <input type="email" name="email" required placeholder="enter your email" class="box">
                <select name="user_type" class="box">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <input type="password" name="password" required placeholder="enter your password" class="box">
                <input type="password" name="cpassword" required placeholder="confirm your password" class="box">
                <p>By clicking the register button, you agree to our <br>
                 <a href="#">Terms and Conditions</a> and <a href="#">Policy and Privacy</a></p>
                 <input type="submit" name="submit" value="Register" class="form-btn">
                 <p>Already a member?<a href="index.php">Login Now</a></p>
            </form>
        </div>
<!--Signup form ends here-->
    </body>
</html>