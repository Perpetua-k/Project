<!DOCTYPE HTML>
<html>
    <head>
        <title>TRAVEL ITINERARY</title>
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <style>
        body{
            font-family: "montserrat";
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("Images/Maasai Culture.jpg");
            background-size: cover;
            background-position: center;
            }
            </style>
        </head>
        <body>
            <div class="navbar">
                <div class="logo">
                    <a href="HOME.html"> Travel</a>
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
                    <a href="SignUp.html"TARGET="main">Sign Up</a>
                </div>
            </div>
            
            <div class="booking-form-box">
                <div class="radio-btn">
                    <input type="radio" class="btn" name="checkbox" checked="checked"><span>Round-trip</span>
                    <input type="radio" class="btn" name="checkbox"><span>One Way</span>
                    <input type="radio" class="btn" name="checkbox"><span>Multi-city</span>
                </div>

                <div class="booking-form">
                    <label>Departure From</label>
                    <input type="text" class="form-control" placeholder="City or Airport">
                </div>

                <div class="booking-form">
                    <label>Destination</label>
                    <input type="text" class="form-control" placeholder="City or Airport">
                </div>

                <div class="input-grp">
                    <label>Departing</label>
                    <input type="date" class="form-control select-date">
                </div>

                <div class="input-grp">
                    <label>Returning</label>
                    <input type="date" class="form-control select-date">
                </div>

                <div class="input-grp">
                    <label>Adults</label>
                    <input type="number" class="form-control" value="1">
                </div>
                
                <div class="input-grp">
                    <label>Children</label>
                    <input type="number" class="form-control" value="0">
                </div>

                <div class="input-grp">
                    <label>Travel Class</label>
                    <select class="custom-select">
                        <option value="1">Economy Class</option>
                        <option value="3">Business Class</option>
                    </select>
                </div>

                <div class="input-grp">
                    <button type="button" class="btn btn-primary trips">Show Trips</button>
                </div>

            </div>
            
<div id="imagepart">
    upload image: <input type="file" name="photo"><br>
</div>
<br><br>
</body>
</html>