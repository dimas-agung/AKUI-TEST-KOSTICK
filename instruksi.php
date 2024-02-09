<?php
error_reporting(0);
ini_set('display_errors', 0);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>instruksi</title>
    <meta name="description" content="Tes papikostick">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card p-4 m-3">
            <form action="kostick.php" method="post">
                <h1>Hai
                    <span id="userName"></span>
                </h1>
                <h2>Berikut adalah petunjuk mengenai Kostick's Perception and Preference inventory</h2>
                

                <p>Ada 90 (Sembilan puluh) pasang pernyataan, pilihlah satu dari setiap pasangan tersebut yang saudara
                    anggap
                    paling dekat menggambarkan diri Saudara. Bila tidak satupun dari sebuah pasangan pernyataan yang
                    cocok,
                    pilihlah yang Saudara anggap paling mendekati.</p>

                <p>Klik pada setiap pernyataan yang saudara pilih pada lembar jawaban yang tersedia.
                </p>
                Contoh:
                <ol type="1">

                    <li>
                        <ol type="a">
                            <li>Saya adalah pekerja keras</li>
                            <li>Saya tidak mudah murung</li>
                        </ol>
                    </li>


                </ol>
                <p> dalam hal ini saudara melingkari tanda anak panah horizontal untuk jawaban "a" bila pernyataan "a"
                    merupakan
                    gambaran diri saudara. Tetapi jika pernyataan "b" lebih menggambarkan diri saudara, maka lingkari
                    tanda
                    anak
                    panah diagonal.</p>
                <div class="text">
                    <p> Kerjakanlah secepat mungkin dan <b><u>PILIHLAH HANYA SATU</u></b> Pernyataan dari tiap pasang.
                    </p>

                </div>

                <button type="submit" class="btn btn-warning text-light">MULAI</button>
            </form>
        </div>
    </div>
    <script>
        var data = localStorage.getItem('nama');
        var nama = data;
            document.getElementById('userName').innerText = nama;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>