<!DOCTYPE HTML>
<html>
    <head>
        <title>Contact</title>
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" intergrity=" sha384-wvfxpqpZZVQGK6TAh5PV1GOfQNHSoD2xbE+QkPxCAF1NEHevoEH3S10sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <style>
        .body{
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-position: center;
        background-size: cover;
        }
        .contact{
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: url("Images/tourism.jpg");
            background-size: cover;
        }
        
        </style>
        </head>
        <body>
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
                    <a href="SignUp.php"TARGET="main">Sign Up</a>
                </div>
            </div>
            <section class="contact">
                <div class="body">
                    <div class="heading">
                        <h2><b>Contact Us</b><h2>
                            <p>Travel with Kosen Tours</p>
                        </div>
                    </div>
                    <div class="container">
                        
                            <div class="contactForm">
                                <form>
                                    <h2>Send Message</h2>
                                    <div class="inputBox">
                                        <input type="text" name="" required="required">
                                        <span>Full Name</span>
                                    </div>
                                    <div class="inputBox">
                                        <input type="text" name="" required="required">
                                        <span>Email</span>
                                    </div>
                                    <div class="inputBox">
                                        <textarea required="required"></textarea>
                                        <span>Type your Message....</span>
                                    </div>
                                    <div class="inputBox">
                                        <input type="submit" name="" value="Send">
                                    </div>
                                </form>
                            </div>

                            <div class="contactInfo">
                            <div class="box">
                                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="text">
                                    <h3>Address</h3>
                                    <p>40500 Narok,<br>256 Total</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="text">
                                    <h3>Phone Number</h3>
                                    <p>+254790660530</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p>papeekosen@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        </body>
</html>