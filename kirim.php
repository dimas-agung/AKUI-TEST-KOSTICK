<?php

$name = $_POST['nama'];
$nip = $_POST['nip'];
$jabatan = $_POST['jabatan'];
$pendidikan = $_POST['pendidikan'];
$tgl_test = $_POST['tgl_test'];
$raw = $_POST['jawaban'];
$jawaban = implode(',', $raw);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papikostick";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO `papi_kostick` (`id`, `name`, `nip`, `pendidikan`, `jabatan`, `tgl_test`, `jawaban`) VALUES ('', '$name', '$nip', '$jabatan', '$pendidikan', '$tgl_test', '$jawaban')
";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>