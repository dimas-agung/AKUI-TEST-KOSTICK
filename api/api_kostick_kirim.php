<?php
require 'url_api.php';
$ch = curl_init();

$url = $url_api . 'api/Papi-Kostick/Store';

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, 1);

$data = array(
    'nik' => $_POST['nik'],
    'hasil_1' => $_POST['hasilNp'],
    'hasil_2' => $_POST['hasilAh'],
    'hasil_3' => $_POST['hasilGp'],
    'hasil_4' => $_POST['hasilLp'],
    'hasil_5' => $_POST['hasilPp'],
    'hasil_6' => $_POST['hasilIm'],
    'hasil_7' => $_POST['hasilTt'],
    'hasil_8' => $_POST['hasilVt'],
    'hasil_9' => $_POST['hasilOk'],
    'hasil_10' => $_POST['hasilBk'],
    'hasil_11' => $_POST['hasilSp'],
    'hasil_12' => $_POST['hasilXk'],
    'hasil_13' => $_POST['hasilCt'],
    'hasil_14' => $_POST['hasilDs'],
    'hasil_15' => $_POST['hasilRt'],
    'hasil_16' => $_POST['hasilZh'],
    'hasil_17' => $_POST['hasilEp'],
    'hasil_18' => $_POST['hasilKa'],
    'hasil_19' => $_POST['hasilFd'],
    'hasil_20' => $_POST['hasilWk'],
    'hasil_test' => json_encode($_POST['radioValues']),
    'skor' => json_encode($_POST['lengthsArray']),
);


$post_fields = http_build_query($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

echo $response;
?>
