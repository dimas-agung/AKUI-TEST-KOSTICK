<?php
//connect
$db= mysqli_connect("localhost", "root", "", "papikostick");


function query($query){
  global $db;
  $result = mysqli_query($db, $query);
  $rows =[];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[]= $row;
  }

return $rows;

}






// $conn = mysqli_connect("localhost", "root", "", "papikostick");

// if (isset($_POST["submit"])) {
//     $nama = $_POST['nama'];
//     $nip = $_POST['nip'];
//     $jabatan = $_POST['jabatan'];
//     $pndidikan = $_POST['pendidikan'];
//     $tgl = $_POST['tanggal_test'];

//     $no1 = $_POST["no1"];
//     $no2 = $_POST["no2"];
//     $no3 = $_POST["no3"];
//     $no4 = $_POST["no4"];
//     $no5 = $_POST["no5"];
//     $no6 = $_POST["no6"];
//     $no7 = $_POST["no7"];
//     $no8 = $_POST["no8"];
//     $no9 = $_POST["no9"];
//     $no10 = $_POST["no10"];
//     $no11 = $_POST["no11"];
//     $no12 = $_POST["no12"];
//     $no13 = $_POST["no13"];
//     $no14 = $_POST["no14"];
//     $no15 = $_POST["no15"];
//     $no16 = $_POST["no16"];
//     $no17 = $_POST["no17"];
//     $no18 = $_POST["no18"];
//     $no19 = $_POST["no19"];
//     $no20 = $_POST["no20"];
//     $no21 = $_POST["no21"];
//     $no22 = $_POST["no22"];
//     $no23 = $_POST["no23"];
//     $no24 = $_POST["no24"];
//     $no25 = $_POST["no25"];
//     $no26 = $_POST["no26"];
//     $no27 = $_POST["no27"];
//     $no28 = $_POST["no28"];
//     $no29 = $_POST["no29"];
//     $no30 = $_POST["no30"];
//     $no31 = $_POST["no31"];
//     $no32 = $_POST["no32"];
//     $no33 = $_POST["no33"];
//     $no34 = $_POST["no34"];
//     $no35 = $_POST["no35"];
//     $no36 = $_POST["no36"];
//     $no37 = $_POST["no37"];
//     $no38 = $_POST["no38"];
//     $no39 = $_POST["no39"];
//     $no40 = $_POST["no40"];
//     $no41 = $_POST["no41"];
//     $no42 = $_POST["no42"];
//     $no43 = $_POST["no43"];
//     $no44 = $_POST["no44"];
//     $no45 = $_POST["no45"];
//     $no46 = $_POST["no46"];
//     $no47 = $_POST["no47"];
//     $no48 = $_POST["no48"];
//     $no49 = $_POST["no49"];
//     $no50 = $_POST["no50"];
//     $no51 = $_POST["no51"];
//     $no52 = $_POST["no52"];
//     $no53 = $_POST["no53"];
//     $no54 = $_POST["no54"];
//     $no55 = $_POST["no55"];
//     $no56 = $_POST["no56"];
//     $no57 = $_POST["no57"];
//     $no58 = $_POST["no58"];
//     $no59 = $_POST["no59"];
//     $no60 = $_POST["no60"];
//     $no61 = $_POST["no61"];
//     $no62 = $_POST["no62"];
//     $no63 = $_POST["no63"];
//     $no64 = $_POST["no64"];
//     $no65 = $_POST["no65"];
//     $no66 = $_POST["no66"];
//     $no67 = $_POST["no67"];
//     $no68 = $_POST["no68"];
//     $no68 = $_POST["no68"];
//     $no69 = $_POST["no69"];
//     $no70 = $_POST["no70"];
//     $no71 = $_POST["no71"];
//     $no72 = $_POST["no72"];
//     $no73 = $_POST["no73"];
//     $no74 = $_POST["no74"];
//     $no75 = $_POST["no75"];
//     $no76 = $_POST["no76"];
//     $no77 = $_POST["no77"];
//     $no78 = $_POST["no78"];
//     $no79 = $_POST["no79"];
//     $no80 = $_POST["no80"];
//     $no81 = $_POST["no81"];
//     $no82 = $_POST["no82"];
//     $no83 = $_POST["no83"];
//     $no84 = $_POST["no84"];
//     $no85 = $_POST["no85"];
//     $no86 = $_POST["no86"];
//     $no87 = $_POST["no87"];
//     $no88 = $_POST["no88"];
//     $no89 = $_POST["no89"];
//     $no90 = $_POST["no90"];

//     $queri = "INSERT INTO peseta VALUES('', '$nama', '$nip', '$jabatan', '$pndidikan', '$tgl')";

//     $query = "INSERT INTO pilihan VALUES ('', '$no1', '$no2', '$no3', '$no4', '$no5', '$no6', '$no7', '$no8', '$no9', '$no10', 
//     '$no11', '$no12', '$no13', '$no14', '$no15', '$no16', '$no17', '$no18', '$no19', '$no20',
//     '$no21', '$no22', '$no23', '$no24', '$no25', '$no26', '$no27', '$no28', '$no29', '$no30',
//     '$no31', '$no32', '$no33', '$no34', '$no35', '$no36', '$no37', '$no38', '$no39', '$no40',
//     '$no41', '$no42', '$no43', '$no44', '$no45', '$no46', '$no47', '$no48', '$no49', '$no50',
//     '$no51', '$no52', '$no53', '$no54', '$no55', '$no56', '$no57', '$no58', '$no59', '$no60',
//     '$no61', '$no62', '$no63', '$no64', '$no65', '$no66', '$no67', '$no68', '$no69', '$no70',
//     '$no71', '$no72', '$no73', '$no74', '$no75', '$no76', '$no77', '$no78', '$no79', '$no80',
//     '$no81', '$no82', '$no83', '$no84', '$no85', '$no86', '$no87', '$no88', '$no89', '$no90')";


//     mysqli_query($conn, $queri);
//     mysqli_query($conn, $query);
//     // $result = $conn ->query($query);
//     // if ($result == true) {
//     //     $affectedrows=$conn->affected_rows;
//     //     echo '<script>alert("y")</script>'.$affectedrows
//     //     ;
//     // }
// };


// $conn->close();


?>