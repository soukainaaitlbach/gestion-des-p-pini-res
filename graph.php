<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Line Chart Example</title>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 800px; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>

    <?php
    include('config.php');

    
   

    // Fetch data from the database
    $sql = "SELECT date, temperature, indicechaleur, humiditesol FROM mesure ORDER BY date";
    $result = mysqli_query($con,$sql);

    // Initialize arrays to hold chart data
    $dates = [];
    $measurement1 = [];
    $measurement2 = [];
    $measurement3 = [];

    // Process result set
   
        while ($row = mysqli_fetch_array( $result)) {
            $dates[] = $row['date'];
            $measurement1[] = (float) $row['temperature'];
            $measurement2[] = (float) $row['indicechaleur'];
            $measurement3[] = (float) $row['humiditesol'];
        }
   

    // Close connection
    $con->close();
    ?>

    <script>
        // Chart data
        var dates = <?php echo json_encode($dates); ?>;
        var measurement1 = <?php echo json_encode($measurement1); ?>;
        var measurement2 = <?php echo json_encode($measurement2); ?>;
        var measurement3 = <?php echo json_encode($measurement3); ?>;

        // Create chart
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Measurement 1',
                    data: measurement1,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    fill: false
                }, {
                    label: 'Measurement 2',
                    data: measurement2,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: false
                }, {
                    label: 'Measurement 3',
                    data: measurement3,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Measurements Over Time'
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
