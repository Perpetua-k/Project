
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<title>Book Now</title>

<!--custom cssfile link -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<style>
    body{
                    width: 100%;
                    height: 90vh;
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                    background: url("Images/tourism.jpg");
                    background-position: center;
                    background-size: cover;
                    font-family: "montserrat";
                    background-position: center;
                     }

                     h1{
                        border-radius: 800px;
                        background-color: #000;
                        text-align: center;
                        color: white;
                        font-weight: bold;
                        border-width: 100px;
                     }
    </style>
<body>
<div class="title">
<h1>Book Now</h1>
</div>
 <div id="selected Services">
    <!--Selected services will be displayed here -->
        </div>

        <p>Total Price: <span id="rotal Price">Ksh 0.00</span></p>

        <!--JavaScript to retrieve and display the selected services and calculate the total price -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const selectedServices= JSON.parse(sessionStorage.getItem('selectedServices'));
                const selectedServicesContainer= document.getElementById('selectedServices');
                const totalPriceElement= document.getElementById('totalPrice');
                let totalPrice = 0;
            if (selectedServices && selectedServices.length >0){
                selectedServices.forEach(service => {
                    const serviceElement = document.createElement('p');
                    serviceElement.textContent = `Services: ${services.serviceName}, Price: Ksh. ${service.price.toFixed(2)}`;
                        selectedServiceContainer.appendchild(serviceElement);
                        totalPrice += service.price;
            });
        } else {
            selectedServicesContainer.innerHTML = '<p> No services selected.</p>';
        }

        totalPriceElement.textContent = `Ksh. ${totalPrice.toFixed(2)}`;
    });


        </script>


</body>
</html>