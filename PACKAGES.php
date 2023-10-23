<!DOCTYPE HTML>
<html>
    <head>
        <title>PACKAGES</title>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <style>
        body{
            width: 100%;
            height: 100vh;
            background-color: #809faa;
            background-position: center;
            background-size: cover;
        }
        .title h1{
            text-align: center;
            padding-top: 50px;
            font-size: 18px;
        }
        .title h1::after{
            content:"";
            height: 1px;
            width: 230px;
            background-color: #000;
            display: block;
            margin: auto;
        }
        .packages{
            width: 85%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 75px auto;
            text-align: center;
        }
        .card{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            margin: 0px 20px;
            padding: 20px 20px;
            background-image:linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url(Images/Park.jpg);
            border-radius: 10px;
            cursor: pointer;
        }
        .card:hover{
            background-color: url( );
            transition: 0.4s ease;
        }
        .card .icon{
            font-size: 35px;
            margin-bottom: 10px;
        }
        .card h2{
            font-size: 28px;
            color: navy;
            margin-bottom: 20px;
        }
        .card p{
            font-size: 17px;
            margin-bottom: 20px;
            line-height: 1.5s;
            color: #fff;
        }
        .button{
            font-size: 15px;
            text-decoration: none;
            color: #fff;
            background-color: #2c677c;
            padding: 8px 12px;
            border-radius: 5px;
            letter-spacing: 2px;
        }
        .button:hover{
            background-color: #c94f4f;
            transition: 0.4s ease;
        }
        @media screen and (max-width: 940px){
            .services{
                display: flex;
                flex-direction: column;
            }
            .card{
                width: 85%;
                display: flex;
                margin: 20px 0px;
            }
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
                <div class="title">
                    <h1>Packages</h1>
                </div>

                <div class="packages">
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <h2>Weekend Gateways Packages</h2>
                        <p>In the heart of the Maasailand enjoy one of the iconic experiences of Africa,(Float over the Mara)by floating gently over the Maasai Mara in a hot air balloon</p>
                        <img src="Images/Drive.jpg" style="width: 250px; height: 250px; border-radius: 12px;">
                        <br>
                        <br>
                        <a href="Book Now.php" class="button">Book Now</a>
                        <a href="TRAVELITINERARY.php" class="button">Get Travel Itinerary</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <h2>Birthday,Proposals & Engagement Packages</h2>
                        <p>There is so much to celebrate in life- so why not while you're on safari? Transform any moment into an extraordinary one by celebrating your birthday with us.</p>
                        <img src="Images/Birthday.jpg" style="width: 250px; height: 250px; border-radius: 12px;">
                        <br>
                        <br>
                        <a href="Book Now.php" class="button">Book Now</a>
                        <a href="TRAVELITINERARY.php" class="button">Get Travel Itinerary</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <h2>Flight Packages</h2>
                        <p>A typical air package will include internal flights to your destination, accomodation on full board basis, return airstrip transfers in the park, and a minimum of 2 game drives per day.</p>
                        <img src="Images/Proposal.jpg" style="width: 250px; height: 250px; border-radius: 12px;">
                        <br>
                        <br>
                        <a href="Book Now.php" class="button">Book Now</a>
                        <a href="TRAVELITINERARY.php" class="button">Get Travel Itinerary</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <h2>Weddings,HoneyMoons &Anniversary Packages</h2>
                        <p>Whether you want to renew your vows or celebrate a significant wedding anniversary, you can do this at an authentic low-key sunset celebration which will be beautiful and memorable celebrated in traditional safari style.</p>
                        <img src="Images/Anniversary.jpg" style="width: 250px; height: 250px; border-radius: 12px;">
                        <br>
                        <br>
                        <a href="Book Now.php" class="button">Book Now</a>
                        <a href="TRAVELITINERARY.php" class="button">Get Travel Itinerary</a>
                    </div>
                    
                </div>
            </div>
            <script>
            document.querySelectorAll('Book-Now-button').forEach(button =>{
                button.addEventListener('click', function (e){
                     e.preventDefault();  //Prevent the default link behavior
                     //Get the selected service and price
                     const poolContainer = this.parentElement;
                     const serviceName = poolContainer.querySelector('h2').textContent.trim();
                     const price = parseFloat(poolContainer.querySelector('.price').textContent.trim().replace('Ksh.20',''));
                     
                     //Encode service name and price as query parameters
                     const encodedServiceName = encodeURIComponent(serviceName);
                     const encodedPrice =encodeURIComponent(price);
                     // Check if sessionStorage exists 
                     if (!sessionStorage.getItem('selectedServices')){
                        //If it doesn't exist, create an empty array to store selected services
                        const selectedServices = [];
                        sessionStorage.setItem('selectedServices', JSON stringify(selectedServices));
                    }
                    //Retrieve the selected services from sessionStorage
                    const selectedServices =JSON.parse(sessionStorage.getItem('selectedServices'));
                    //Add the current selection to the array
                    selectedServices.push({
                        serviceName: serviceName,
                        price: price
                    });

            //Update sessionStorage with the new selection
            sessionStorage.setItem('selectedServices', JSON.stringify(selectedServices));
            //Retrieve to the booking page
             window.location.href ='Book Now.php';
            });
        });
        </script>
        </body>
</html>