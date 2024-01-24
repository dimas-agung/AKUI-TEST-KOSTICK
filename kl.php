<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Data Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

    <h1>Data from Database</h1>

    <table id="dataTable" class="table table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(document).ready(function () {
            // AJAX request to get data from the PHP script
            $.ajax({
                url: "http://192.168.1.50:8000/api/Pelamar",
                type: "GET",
                dataType: "json",
                success: function (data) {
                    // Display the data in the 'dataTable' table
                    var tableBody = $("#dataTable tbody");

                    data.forEach(function (item) {
                        var row = "<tr><td>" + item.id + "</td><td>" + item.name + "</td><td>" + item.email + "</td></tr>";
                        tableBody.append(row);
                    });
                },
                error: function (error) {
                    console.error("AJAX Error:", error);
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>