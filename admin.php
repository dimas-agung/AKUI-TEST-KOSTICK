<?php
$id = $_GET["id"];
$db = mysqli_connect("localhost", "root", "", "papikostick");
$query = "SELECT * FROM papi_kostick where id = $id";
$i = 1;
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="table2excel.js"></script>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-8">

                <?php
                echo '<table id="jawab" class="table table-primary table-striped table-hover">';
                echo "
                    <thead class='table-success'><tr>  
                        <th>no</th>
                        <th>Jawaban</th></tr>
                    </thead>
                ";
                echo "<tbody>";

                while ($row = mysqli_fetch_assoc($result)) {
                    // Decode JSON-encoded data (assuming the column contains valid JSON)
                    $dataArray = explode(",", $row['jawaban']);

                    if ($dataArray) {
                        foreach ($dataArray as $value) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $value . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Invalid JSON data in the column";
                    }

                    // Display the 'name' data outside the loop
                    echo '<tr><th>Name</th><th>NIP</th></tr><tr>
                    <th>' . $row['name'] . '</th><th>' . $row['nip'] . '</th></tr></tbody>
                        </table>
                        </div>
                        <div class="col-md-4">
                        <div class="container card bg-white text-dark">
                            <div class="card-title">
                                Peserta
                            </div>
                            <div class="card-body"><p> Name: ' . $row['name'] . '
                            </p><p> Nip: ' . $row['nip'] . '
                            </p>
                            </div>
                            <button id="download" class="btn btn-success mb-2">export to excel</button>
                            
                            </div>
                        </div></div>';
                }

                // Close the database connection
                mysqli_close($db);
                ?>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
            <script>
                document.getElementById('download').addEventListener('click', function () {
                    var table2excel = new Table2Excel();
                    table2excel.export(document.querySelectorAll("#jawab"));
                });
            </script>
</body>

</html>