<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width", initial-scale="1.0"/>
        <title>FAQS</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@400;700&display=swap" rel="stylesheet">
        <style>
        
        
        body{
            font-family: "montserrat";
            background: #1c1c1c;
            background-image:linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url("Images/Tour Vehicles.jpg");
            color: #fff;
        }
        section {
            min-height: 100vh;
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .title {
            font-size: 3rem;
            margin: 2 rem;
        }
        .faq {
            max-width: 700px;
            margin-top: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #fff;
            cursor: pointer;
        }
        .question {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .question h3{
            font-size: 1.8rem;
        }
        .answer{
            max-height: 0;
            overflow: hidden;
            transition: max-height 1.4s ease;
        }
        .answer p{
            padding-top: 1rem;
            line-height: 1.6;
            font-size: 1.4rem;
        }
        .faq.active .answer{
            max-height: 300px;
            animation: fade 1s ease-in-out;
        }
/*
.faq.active .answer{
transform: rotate(180deg);
}*/
    svg{
        transition: transform 0.5s ease-in;
    }
    @keyframes fade{
        from{
            opacity: 0;
            transform: translateY(-10px);
        }
        to{
            opacity: 1;
            transform: translateY(0px);
        }
        }
        </style>
        </head>
        <body>
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
                <section>
                    <div class="faq">
                        <div class="question">
                            <h3>What is the wildebeest Migration and when is it?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" troke-width="7" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>
                                The wildebeest are the world's greatest wildlife spectacle. Beginning of November they head southback into Tanzania and the southern where calves are born during a six week period early each year-January and Mid-March. In April the cycle begins once more. 
                                There is no real beginning or end to a wildebeest's journey Its life is an endless pilgrimage, a constant search for food and water. The only beginning is at the moment of birth.
                            </p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>What kind of animals will I see while in Maasai Mara National Reserve?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" troke-width="7" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>
                                In addition to the famous Big 5(elephant, rhino, lion, Buffalo and leopard), it hosts a variety of animals like antellopes, impalas, gazelles, wildebeest, zebra,
                                hyenas, cheetahs, warthogs, hippos, crocodiles, baboons,monkeys and tortoise.
                            </p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>What will I experience on a game drive?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" troke-width="7" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>
                                There are usually two games drives per day, one in the early morning lasting 3-5 hours and one in the late afternoon which lasts about 3hours. In addition to seeing the wildlife,
                                you can stop to speak with the Maasai heading their cattles or take part in festivities being held in a nearby village and take in whatever is happening on that day.
                            </p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>What kind of food do i expect while on my tour?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" troke-width="7" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>
                                There is a good selection of vegeterian choices. Fresh fruits tasty desserts, hot beverages, coffee and tea are readily available. At times when we are in the field, we will bring boxed
                                lunches with us for a picnic. Depending on the lodges meals may be buffet or plated.
                            </p>
                        </div>
                    </div>
                </section>
                <script src="./app.js"></script>
                <script>
                const faqs = document.querySelectorAll(".faq");
                faqs.forEach(faq => {
                    faq.addEventListener("click", () => {
                        faq.classList.toggle("active");
                    });
                    });
                </script>
        </body>
</html>
