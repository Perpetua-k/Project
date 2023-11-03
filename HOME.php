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
            header('location:Book Now.php');
        }else{
            $error[] = 'incorrect email or password';
        }
    }


};

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title>Kosen Tours</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
        <style>
        .body{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: space-around;
        align-items: center;
        background: url("Images/background.jpg");
        background-position: center;
        background-size: cover;
    }
        </style>
    <div class="navbar">
        <div class="logo">
            <img class="logo" src="Images/logo.jpg">
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
            <a href="SignUp.php"TARGET="main">Sign Up</a>
        </div>
    </div>

    <div class="body">
        <div class="heading">
            <h1>Travel with Kosen Tours</h1>
            <br>
            <p>The World is a book and Those who do not travel read only a page <br> Escape the ordinary with us where there are no boundaries<br> A lifetime experience that will leave you breathless...</p>
            <br>
            <br>
            <a href="PACKAGES.php">Explore</a>
        </div>
        <!--image slider starts-->
            <div class="slider">
                <div class="slides">
                    <!--radio button starts-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio button end-->

                    <!--slide images start-->
                    
                    <div class="slide first">
                    <h2>Balloon Safaris</h2>
                        <p> From ballooning in the Maasai Mara,discover the experience that will stir your soul...something you can't get from a jeep</p><br>
                        <img src="Images/Mara Triangle.jpg" alt="">
                    </div>

                    <div class="slide">
                    <h2>Great Migration</h2>
                        <p> A journey for the emotion...for many... a dream of a lifetime by creating memories. It definitely has to be on everyone's Bucket List!</p><br>
                        <img src="Images/Mara River.jpg" alt="">
                    </div>

                    <div class="slide">
                    <h2>Game Drives</h2>
                        <p> Every dawn is a different adventure, a serene silence travelling in the wild...essentials Africa</p><br>
                        <img src="Images/drives.jpg" alt="">
                    </div>
                    <div class="slide">
                    <h2>Maasai Culture</h2>
                        <p> A journey for the emotion...for many... a dream of a lifetime by creating memories. It definitely has to be on everyone's Bucket List!</p><br>
                        <img src="Images/Maasai Culture.jpg" alt="">
                    </div>
                </div>
                <!--slide images end-->
                <!--automatic navigation starts-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                 <!--automatic navigation ends-->

            </div>
            <!--manual navigation starts--> 
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation ends-->  
        <!--image slider ends-->

        <script type="text/javascript">
            var counter =1;
            setInterval(function(){
                document.getElementById('radio' + counter). checked = true;
                counter ++;
                if(counter > 4){
                    counter = 1;
                } 
            },5000);
            
        </script>
    </div>
    <div class="footer">
        <a href="#">Copyright</a>
        <a href="#">Terms and Conditions</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Cookies</a>
        <a href="#">Complaints</a>
    </div>
    
   </body>
</html>
