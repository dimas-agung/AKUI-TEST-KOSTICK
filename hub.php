<?php
// Step 1: Database connection (use your own connection code)
require "function.php";

// Step 2: Select the JSON-encoded column
$query = "SELECT jawaban FROM papi_kostick";
$result = mysqli_query($db, $query);

// Step 3: Display the decoded values
echo "<h2>Your Column Values</h2>";

while ($row = mysqli_fetch_assoc($result)) {
    // Decode JSON-encoded data (assuming the column contains valid JSON)
    $dataArray = explode($i++,$row['jawaban']);

    if ($dataArray) {
        // Display individual elements of the array
        foreach ($dataArray as $value) {
            echo $value . "<br>";
        }
    } else {
        echo "Invalid JSON data in the column";
    }
}

// Step 4: Close the database connection
mysqli_close($db);
?>