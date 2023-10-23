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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1,maximum-scale=1">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="CSS/Adminstyle.css">

</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Travel</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="Admin Panel.php" class="active"><span class="lab la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="Manage Users.php"><span class="lab la-users"></span>
                    <span>Manage Users</span></a>
                </li>

                <li>
                    <a href="Tour Packages.php"><span class="lab la-clipboard-list"></span>
                    <span>Tour Packages</span></a>
                </li>

                <li>
                    <a href="Manage Bookings.php"><span class="lab la-shipping-bag"></span>
                    <span>Manage Bookings</span></a>
                </li>

                <li>
                    <a href="Manage Inventory.php"><span class="lab la-receipt"></span>
                    <span>Manage Inventory</span></a>
                </li>

                <li>
                    <a href="Manage Enquiries.php"><span class="lab la-user-circle"></span>
                    <span>Manage Enquiries</span></a>
                </li>

                <li>
                    <a href="Manage Tasks.php"><span class="lab la-clipboard-list"></span>
                    <span>Manage Tasks</span></a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <div class="info">
                    <img src="Images/Papee.png" width="40px" height="40px"  alt="">
                    <div>
                      <h4>Perpetua Kosen</h4>
                      <small>Super Admin</small>
                    </div>
                </div>

                <select class="drop-down">
                        <option>Log Out</option>
                </select>
            </div>
                            
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Users</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                        </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>8</h1>
                        <span>Total Packages</span>
                    </div>

                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span>Bookings</span>
                    </div>

                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Enquiries</span>
                    </div>

                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>13,000 Ksh</h1>
                        <span>Income</span>
                    </div>

                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>

            </div>

            <div class="recent-grid">
                <div class="bookings">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Bookings</h3>

                            <button>See all <span class="las.la-arrow-right"></span></button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Packages Title</td>
                                        <td>Category</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Flight Packages</td>
                                        <td>Flight</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wedding Packages</td>
                                        <td>Wedding, Honey Moon & Anniversary</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Birthday Packages</td>
                                        <td>Birthday, Proposal & Engagement</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Flight Packages</td>
                                        <td>Flight</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Honey Moon Packages</td>
                                        <td>Wedding, Honey Moon & Anniversary</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Weekend Gateways Packages</td>
                                        <td>Weekend Gateways</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Anniversary Packages</td>
                                        <td>Wedding, Honey Moon & Anniversary</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Engagement Packages</td>
                                        <td>Birthday, Proposal & Engagement</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in progress
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Proposal Packages</td>
                                        <td>Birthday, Proposal & Engagement</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                </tbody>
                            </div>
                            </table>
                            <div class="card-body"></div>
                                <div class="table-responsive"></div>
                        </div>
                        </div>
                    </div>
                </div>

                

                <div class="customers">
                <div class="card">
                        <div class="card-header">
                            <h3>New customers</h3>

                            <button>See all <span class="las.la-arrow-right"></span></button>

                        </div>
                        
                        <div class="card-body">
                            <div class="customers">
                                <div class="info">
                                <img src="Images/Papee.png" width="40px" height="40px"  alt="">
                                <div>
                                    <h4>Harriet Melki</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                                
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customers">
                                <div class="info">
                                <img src="Images/Papee.png" width="40px" height="40px"  alt="">
                                <div>
                                    <h4>Linet Ndungwa</h4>
                                    <small>Tourist</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                                
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="customers">
                                <div class="info">
                                <img src="Images/Papee.png" width="40px" height="40px"  alt="">
                                <div>
                                    <h4>Terry Mwangangi</h4>
                                    <small>Tourist</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                                
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customers">
                                <div class="info">
                                <img src="Images/Papee.png" width="40px" height="40px"  alt="">
                                <div>
                                    <h4>Nelson Kosen</h4>
                                    <small>Tourist</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="customers">
                                <div class="info">
                                <img src="Images/Papee.png" width="40px" height="40px"  alt="">
                                <div>
                                    <h4>Alphonce Kosen</h4>
                                    <small>Tourist</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>
            </div>
        </div>


        </main>
    
    </div>


</body>
</html>
