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
            header('location:Admin Panel.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:HOME.php');
        }else{
            $error[] = 'incorrect email or password';
        }
    }


};

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                margin:0;
                padding:0;
                font-family:montserrat;
                background:linear-gradient(120deg,#2980b9,#8e44ad);
                height:100vh;
                overflow:hidden;
            }
            .center{
                position:absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                width: 400px;
                background: white;
                border-radius: 10px;
            }
            .center h1{
                text-align: center;
                padding: 0 0 20px 0;
                border-bottom: 1px solid silver;
            }
            .center form{
                padding: 0 40px;
                box-sizing: border-box;
            }
            form .txt_field{
                position:relative;
                border-bottom: 2px solid #adadad;
                margin: 30px 0;
            }
            .txt_field input{
                width: 100%;
                padding: 0 5px;
                height: 40px;
                font-size: 16px;
                border: none;
                background: none;
                outline: none;
            }
            .txt_field label{
                position: absolute;
                top:50%;
                left:5px;
                color:#adadad;
                transform:translateY(-50%);
                font-size:16px;
                pointer-events: none;
                transition:.5s;
            }
            .txt_field span::before{
                content:'';
                position:absolute;
                top:40px;
                left:0px;
                width:0%;
                height:2px;
                background: #2691d9;
                transition:.5s;
            }
            .txt_field input:focus~label,
            .txt_field input:valid~label{
                top:-5px;
                color: #2691d9;
            }
            .txt_field input:focus~span::before,
            .txt_field input:valid~span::before{
                width:100%;
            }
            .pass{
                margin:-5px 0 20px 5px;
                color:#a6a6a6;
                cursor:pointer;
            }
            .pass:hover{
                text-decoration:underline;
            }
            input[type="submit"]{
                width:100%;
                height:50px;
                border:1px solid;
                background:#2691d9;
                border-radius:25px;
                font-size:18px;
                color:#e9f4fb;
                font-weight:700;
                cursor:pointer;
                outline:none;
            }
            input[type="submit"]:hover{
                border-color:#2691d9;
                transition:.5s;
            }
            .signup_link{
                margin:30px 0;
                text-align:center;
                font-size:16px;
                color:#666666;
            }
            .signup_link a{
                color:#2691d9;
                text-decoration:none;
            }
            .signup_link a:hover{
                text-decoration: underline;
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
    <div class="center">
        <h1>Login</h1>
        <form method="post">
        <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<div class="error-msg">'.$error.'</div>';
                };
            };
        ?>
            <div class="txt_field">
                <input type="text" name="username"required>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password"required>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
                <input type="submit" name="submit" value="Login">
            <div class="signup_link">
                <p>Not a member?<a href="SignUp.php">SignUp</a></p>
            </div>
        </form>
    </div>
</body>
</html>
