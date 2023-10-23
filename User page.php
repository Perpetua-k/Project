<?php

@include 'config.php';

session_starts();

if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>User page</title>

    <!--custom cssfile link -->
<link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>
<body>

<div class="container">

    <div class="content">
        <h3>Hi, <span>User</span></h3><br>
        <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1><br>
        <p>This is a User page</p><br>
        <a href="index.php" class="btn">Login</a>
        <a href="SignUp.php" class="btn">SignUp</a>
        <a href="logout.php" class="btn">LogOut</a>
    </div>

</div>

</body>
</html>