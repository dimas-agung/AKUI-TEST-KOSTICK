<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polar Area Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="polarAreaChart" width="20" height="20"></canvas>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('polarAreaChart').getContext('2d');

            var data = {
                labels: ['N', 'A', 'G', 'L', 'P', 'I', 'T', 'V', 'O', 'B', 'S', 'X', 'C', 'D', 'R', 'Z', 'E', 'K', 'F', 'W'],
                datasets: [{
                    data: [9, 1, 4, 1, 2, 7, 6, 2, 5, 3, 2, 7, 5, 1, 8, 8, 3, 2, 4, 1],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 205, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 70, 50, 0.5)',
                        'rgba(89, 159, 20, 0.5)',
                        'rgba(40, 13, 64, 0.5)',
                        'rgba(255, 75, 64, 0.5)',
                        'rgba(255, 100, 37, 0.5)',
                        'rgba(97, 159, 28, 0.5)',
                        'rgba(47, 159, 64, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(201, 203, 207, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            var options = {
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            };

            var polarAreaChart = new Chart(ctx, {
                type: 'polarArea',
                data: data,
                options: options
            });
        });
    </script>
</body>
</html>
