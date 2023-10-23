<main>
    <div id="chart"></div>
    <script>
        var data = [
        {label: "Users", value: 50},
        {label: "Bookings", value: 100},
        {label: "Settings", value: 150},
        {label: "Packages", value: 20}
        ];


        var ctx = document.getElementById('chart')getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.map(item => item.label),
                datasets: [{
                    label: 'Data',
                    data: data.map(item =>item.value),
                    backgroundColor:'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


    </script>
    

</main>
