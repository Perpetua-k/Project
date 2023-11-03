<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $user_id = mysqli_real_escape_string($conn, $_POST['name']);
    $package_id = mysqli_real_escape_string($conn, $_POST['package']);
    $status = mysqli_real_escape_string($conn, $_POST['pending confirmed pending']);
    $user_type = $_POST['user_type'];
    $date_created = ($_POST['date']);
    

    $select = "SELECT * FROM book_list WHERE user_id = '$name' && date_created = '$date'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:Admin Panel.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:index.php');
        }else{
            $error[] = 'incorrect name or date_created';
        }
    }


};

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
</head>
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
                    height: 400px;
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
                    position: relative;
                    border-bottom: 2px solid #adadad;
                    margin: 30px 0;
                    display: inline-block;
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
                
                
</style>
<body>
<div class="center">
    <h1>Booking</h1>
    <form method="post">
    <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<div class="error-msg">'.$error.'</div>';
                };
            };
        ?>
            <div class="form-wrapper">
                <form action="#" method="post">
                <input type="date" name="date" placeholder="select a date" required><br><br>
                <input type="name" name="name" placeholder="enter your name here" class="box" required><br><br>
                <input type="text" name="schedule" placeholder="enter day of availability" class="box" required><br><br>

                <div class="input-grp">
                    <label>How Many People</label><br>
                    <input type="number" class="form-control" value="0"><br><br>
                </div>

                <select name="" id="">
                    <option value="weekend getaways">weekend getaways</option>
                    <option value="birthday">birthday</option>
                    <option value="proposal">proposal</option>
                    <option value="engagement">engagement</option>
                    <option value="flight">flight</option>
                    <option value="wedding">wedding</option>
                    <option value="honeymoon">honeymoon</option>
                    <option value="anniversary">anniversary</option>
                </select><br><br>
                <input type="submit" name="submit" class="btn"><br><br>
                 <a href="TRAVELITINERARY.php">Go to Itinerary</a>
                </form>
            </div>
    </form>
</div>
    
</body>
</html>