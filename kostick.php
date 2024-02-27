<?php



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Tes Kostick</title>
    <meta name="description" content="Tes papikostick">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #007BFF;
        }

        label {
            cursor: pointer;
        }

        .jawaban {
            margin-bottom: 20px;
        }

        ol li {
            margin: 20px;
        }

        .card {
            border-top: 20px #007BFF solid;
        }
        @keyframes myAnim {
            0% {
                opacity: 0;
                transform: scale(0.6);
            }

            100% {
                opacity: 1;
                transform: scale(1);
}}
    </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

  </script>
  
    <script src="table2excel.js"></script>
    
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <form action="" method="post" id="myform">
                        <ol type="1">
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no1" value="A">

                                    Saya seorang pekerja keras

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no1" value="B">

                                    Saya bukan seorang pemurung
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no2" value="A">

                                    Saya suka bekerja lebih baik dari orang lain

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no2" value="B" id="no2">

                                    Saya suka mengerjakan apa yang sedang saya kerjakan, sampai selesai

                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no3" value="A" >

                                    Saya suka menunjukkan caranya melaksanakan sesuatu hal

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no3" value="B" >

                                    Saya ingin bekerja sebaik mungkin
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no4" value="A" >

                                    Saya suka melakukan hal hal lucu
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no4" value="B" >

                                    Saya senang mengatakan kepada orang lain, apa yang harus dikerjakan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no5" value="A" >

                                    Saya suka bergabung dalam kelompok

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no5" value="B" >

                                    Saya ingin diperhatikan dalam kelompok
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no6" value="A" >

                                    Saya senang bersahabat akrab dengan seseorang

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no6" value="B" >

                                    Saya senang berteman dalam satu kelompok
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no7" value="A" >

                                    Saya cepat berubah pikiran bila hal itu diperlukan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no7" value="B" >

                                    Saya berusaha untuk membuat persahabatan yang akrab
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no8" value="A" >

                                    Saya suka membalas dendam bila saya benar-benar disakiti

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no8" value="B" >

                                    Saya suka melakukan hal-hal yang baru dan berbeda
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no9" value="A" >

                                    Saya ingin atasan saya menyukai saya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no9" value="B" >

                                    Saya suka mengatakan kepada orang lain, bila mereka salah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no10" value="A"
                                        >

                                    Saya suka menyukai petunjuk-petunjuk yang diberikan kepada saya

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no10" value="B"
                                        >

                                    Saya ingin menyenangkan atasan Saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no11" value="A"
                                        >

                                    Saya mencoba sekuat tenaga

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no11" value="B"
                                        >

                                    Saya seorang yang tertib.
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no12" value="A"
                                        >

                                    Saya mampu memengaruhi orang lain melakukan apa yang saya inginkan

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no12" value="B"
                                        >

                                    Saya bukan seorang yang cepat marah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no13" value="A"
                                        >

                                    Saya suka mengatakan kepada kelompok, apa yang harus dilakukan

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no13" value="B"
                                        >

                                    Saya menekuni satu pekerjaan sampai selesai
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no14" value="A"
                                        >

                                    Saya ingin tampak gembira dan menarik
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no14" value="B"
                                        >

                                    Saya ingin betul betul berhasil
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no15" value="A"
                                        >

                                    Saya suka menyelaraskan diri dengan kelompok
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no15" value="B"
                                        >

                                    Saya suka membantu orang lain dalam mengerjakan sesuatu
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no16" value="A"
                                        >

                                    Saya cemas kalau orang lain tidak menyukai saya

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no16" value="B"
                                        >

                                    Saya senang kalau orang-orang memperhatikan saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no17" value="A"
                                        >

                                    Saya suka mencoba sesuatu yang baru
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no17" value="B"
                                        >

                                    Saya lebih suka bekerja bersama orang-orang daripada bekerja sendiri
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no18" value="A"
                                        >

                                    Kadang-kadang saya menyalahkan orang lain bila tejadi sesuatu kesalahan

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no18" value="B"
                                        >

                                    Saya cemas bila seseorang tidak menyukai saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no19" value="A"
                                        >

                                    Saya suka menyenangkan atasan-atasan saya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no19" value="B"
                                        >

                                    Saya suka mencoba pekerjaan-pekerjaan yang baru dan berbeda
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no20" value="A"
                                        >

                                    Saya menyukai petunjuk yang terinci untuk melakukan sesuatu pekerjaan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no20" value="B"
                                        >

                                    Saya suka berterus terang kepada orang lain bila menjengkelan saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no21" value="A"
                                        >

                                    Saya selalu berusaha keras
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no21" value="B"
                                        >

                                    Saya senang bekerja dengan sangat cermat dan hati-hati
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no22" value="A"
                                        >

                                    Saya adalah seorang pemimpin yang baik
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no22" value="B"
                                        >

                                    Saya mengorganisir tugas-tugas secara baik
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no23" value="A"
                                        >

                                    Saya seorang yang lambat dalam membuat keputusan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no23" value="B"
                                        >

                                    Saya mudah marah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no24" value="A"
                                        >

                                    Bila di dalam kelompok, saya lebih suka diam
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no24" value="B"
                                        >

                                    Saya senang mengerjakan beberapa pekerjaan pada waktu yang bersamaan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no25" value="A"
                                        >

                                    Saya senang bila diundang
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no25" value="B"
                                        >

                                    Saya ingin melakukan sesuatu lebih baik dari orang lain
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no26" value="A"
                                        >

                                    Saya suka berteman akrab dengan teman-teman saya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no26" value="B"
                                        >

                                    Saya suka memberi nasihat kepada orang lain
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no27" value="A"
                                        >

                                    Saya suka melakukan hal-hal yang baru dan berbeda
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no27" value="B"
                                        >

                                    Saya suka menceritakan keberhasilan saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no28" value="A"
                                        >

                                    Saya akan mempertahankannya jika memang saya benar
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no28" value="B"
                                        >

                                    Saya suka menjadi anggota suatu kelompok
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no29" value="A"
                                        >

                                    Saya menghindari perbedaan pendapat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no29" value="B"
                                        >

                                    Saya berusaha untuk lebih akrab dengan orang-orang
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no30" value="A"
                                        >

                                    Saya suka diajari mengenai caranya mengerjakan suatu pekerjaan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no30" value="B"
                                        >

                                    Saya mudah merasa jemu (bosan)
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no31" value="A"
                                        >

                                    Saya bekerja keras
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no31" value="B"
                                        >

                                    Saya banyak berpikir dan berencana
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no32" value="A"
                                        >

                                    Saya memimpin kelompok
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no32" value="B"
                                        >

                                    Hal-hal yang kecil (detail) menarik perhatian saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no33" value="A"
                                        >

                                    Saya cepat dan mudah mengambil keputusan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no33" value="B"
                                        >

                                    Saya merawat barang-barang dengan secara rapih dan teratur
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no34" value="A"
                                        >

                                    Tugas-tugas saya kerjakan secara cepat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no34" value="B"
                                        >

                                    Saya jarang marah atau sedih
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no35" value="A"
                                        >

                                    Saya ingin menjadi bagian dari kelompok
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no35" value="B"
                                        >

                                    Saya berusaha keras untuk menjadi yang lebih baik
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no36" value="A"
                                        >

                                    Saya berusaha membuat teman akrab
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no36" value="B"
                                        >

                                    Saya berusaha keras untuk menjadi yang terbaik
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no37" value="A"
                                        >

                                    Saya menyukai baju-baju dan tipe-tipe mobil model mutakhir
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no37" value="B"
                                        >

                                    Saya senang bertanggung jawab atas orang lain
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no38" value="A"
                                        >

                                    Saya suka berdebat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no38" value="B"
                                        >

                                    Saya senang mendapat perhatian
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no39" value="A"
                                        >

                                    Saya suka menyenangkan atasan saya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no39" value="B"
                                        >

                                    Saya tertarik menjadi bagian dari suatu kelompok
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no40" value="A"
                                        >

                                    Saya senang mematuhi peraturan dengan sungguh sungguh
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no40" value="B"
                                        >

                                    Saya ingin orang-orang benar-benar mengenal saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no41" value="A"
                                        >

                                    Saya berusaha keras
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no41" value="B"
                                        >

                                    Saya sangat marah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no42" value="A"
                                        >

                                    Orang lain beranggapan bahwa saya adalah seorang pemimpin yang baik
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no42" value="B"
                                        >

                                    Saya berpikir panjang dan hati-hati
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no43" value="A"
                                        >

                                    Seringkali saya mengambil kesempatan yang ada

                                </div>
                                <div class="form-check">
                                    <input required class="form-check-input" type="radio" name="no43" value="B"
                                        >

                                    saya senang mengurusi hal hal yang kecil
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no44" value="A"
                                        >

                                    Orang lain menganggap saya bekerja cepat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no44" value="B"
                                        >

                                    Orang lain menganggap saya dapat melakukan penataan yang rapi dan teratur
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no45" value="A"
                                        >

                                    Saya menyukai berolahraga
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no45" value="B"
                                        >

                                    Saya sangat menyenangkan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no46" value="A"
                                        >

                                    Saya senang bila orang-orang dapat akrab dan ramah
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no46" value="B"
                                        >

                                    Saya selalu berusaha menyelesaikan apa yang saya kerjakan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no47" value="A"
                                        >
                                    Saya suka bereksperimen dan mencoba sesuatu yang baru
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no47" value="B"
                                        >

                                    Saya selalu berusaha menyelesaikan apa yang saya kerjakan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no48" value="A"
                                        >

                                    Saya senang diperlakukan secara adil
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no48" value="B"
                                        >

                                    Saya senang mengajari orang lain bagaimana caranya mengerjakan sesuatu

                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no49" value="A"
                                        >

                                    Saya suka mengerjakan apa yang diharapkan dari saya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no49" value="B"
                                        >

                                    Saya suka mendapatkan perhatian
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no50" value="A"
                                        >

                                    Saya sukamendengarkan penjelasan yang terinci pekerjaan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no50" value="B"
                                        >

                                    Saya senang berada bersama dengan orang-orang lain
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no51" value="A"
                                        >

                                    Saya selalu berusaha mengerjakan tugas secara sempurna
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no51" value="B"
                                        >

                                    saya adalah orang yang tidak mengenal lelah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no52" value="A"
                                        >

                                    Saya adalah tipe pemimpin
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no52" value="B"
                                        >

                                    Saya mudah berteman
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no53" value="A"
                                        >

                                    Saya suka mengambil kesempatan yang ada
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no53" value="B"
                                        >

                                    Saya banyak berpikir
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no54" value="A"
                                        >

                                    Saya bekerja dengan mantap dan cepat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no54" value="B"
                                        >

                                    Saya senang bekerja sampai pada hal yang sekecil-kecilnya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no55" value="A"
                                        >

                                    Saya memiliki banyak energi untuk permainan-permainan dan olahraga
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no55" value="B"
                                        >

                                    Saya merawat barang-barang dengan rapih dan teratur
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no56" value="A"
                                        >

                                    Saya berhubungan baik dengan semua orang
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no56" value="B"
                                        >

                                    Saya bertabiat mantap dan tenang
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no57" value="A"
                                        >

                                    Saya suka bertemu dengan orang-orang baru dan mengerjakan sesuatu yang teratur
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no57" value="B"
                                        >

                                    Saya selalu ingin menyelesaikan pekerjaan dengan rapi dan teratur
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no58" value="A"
                                        >

                                    Biasanya saya mempertahankan apa yang saya yakini
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no58" value="B"
                                        >

                                    Biasanya saya suka bekerja keras
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no59" value="A"
                                        >

                                    Saya senang saran-saran dari orang yang saya hormati
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no59" value="B"
                                        >

                                    Saya senang bertanggung jawab atas orang lain
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no60" value="A"
                                        >

                                    Saya biarkan orang lain mepengaruhi saya

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no60" value="B"
                                        >

                                    Saya suka menerima banyak perhatian
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no61" value="A"
                                        >

                                    saya Biasanya bekerja sangat keras
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no61" value="B"
                                        >

                                    Saya biasanya bekerja cepat
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no62" value="A"
                                        >

                                    Bila saya berbicara, orang-orang akan mendengarkan

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no62" value="B"
                                        >

                                    Saya sangat mahir mempergunakan alat
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no63" value="A"
                                        >

                                    Saya lambat dalam mengambil keputusan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no63" value="B"
                                        >

                                    Saya lambat dalam membuat persahabatan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no64" value="A"
                                        >

                                    Biasanya saya makan secara cepat

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no64" value="B"
                                        >

                                    Saya suka membaca
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no65" value="A"
                                        >

                                    Saya menyukai pekerjaan yang memungkinkan saya berkeliling
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no65" value="B"
                                        >

                                    Saya menyukai pekerjaan yang membutuhkan ketelitian
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no66" value="A"
                                        >

                                    Saya mencari teman sebanyak mungkin

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no66" value="B"
                                        >

                                    Saya tahu hal hal yang tidak perlu
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no67" value="A"
                                        >

                                    Saya merencanakan sesuatu jauh-jauh sebelumnya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no67" value="B"
                                        >

                                    Saya selalu menyenangkan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no68" value="A"
                                        >

                                    Saya bangga atas ketenaran saya

                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no68" value="B"
                                        >

                                    Saya memusatkan perhatian pada satu persoalan sampai hal tersebut terpecahkan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no69" value="A"
                                        >

                                    Saya suka menyenangkan orang-orang yang saya hormati
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no69" value="B"
                                        >

                                    Saya ingin berhasil
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no70" value="A"
                                        >

                                    Saya senang bila orang lain yang membuat keputusan untuk kelompok
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no70" value="B"
                                        >

                                    Saya suka membuat keputusan untuk kelompok
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no71" value="A"
                                        >

                                    Saya selalu berusaha keras
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no71" value="B"
                                        >

                                    Saya memutuskan sesuatu dengan mudah dan cepat
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no72" value="A"
                                        >

                                    kelompok biasanya mengerjakan apa yang saya inginkan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no72" value="B"
                                        >

                                    Saya terlalu tergesa-gesa
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no73" value="A"
                                        >

                                    Saya lambat dalam memutuskan sesuatu
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no73" value="B"
                                        >

                                    Saya seringkali merasa lelah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no74" value="A"
                                        >

                                    Saya bekerja secara cepat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no74" value="B"
                                        >

                                    Saya mudah berteman
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no75" value="A"
                                        >

                                    Saya biasanya bersemangat atau bergairah
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no75" value="B"
                                        >

                                    Saya memerlukan banyak waktu untuk berpikir
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no76" value="A"
                                        >

                                    Saya sangat ramah kepada orang-orang
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no76" value="B"
                                        >

                                    Saya menyukai pekerjaan yang membutuhkan ketepatan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no77" value="A"
                                        >

                                    Saya banyak sekali berpikir dan berencana
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no77" value="B"
                                        >

                                    Saya meletakkan segalanya pada tempatnya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no78" value="A"
                                        >

                                    Saya senang pada pekerjaan yag membutuhkan ketelitian
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no78" value="B"
                                        >
                                    Saya tidak mudah marah
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no79" value="A"
                                        >

                                    Saya senang pada menurut pada orang-orang yang saya kagumi
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no79" value="B"
                                        >

                                    Saya selalu menyelesaikan pekerjaan yang saya mulai
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no80" value="A"
                                        >

                                    Saya senang mengikuti petunjuk-petunjuk yang jelas
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no80" value="B"
                                        >

                                    Saya senang bekerja keras
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no81" value="A"
                                        >

                                    Saya berusaha mendapatkan apa yang saya inginkan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no81" value="B"
                                        >

                                    Saya seorang pemimpin yang baik
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no82" value="A"
                                        >

                                    Saya menyuruh orang-orang untuk bekerja keras
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no82" value="B"
                                        >

                                    Saya adalah orang yang kurang berpikir panjang
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no83" value="A"
                                        >

                                    Saya memutuskan sesuatu dengan cepat
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no83" value="B"
                                        >

                                    Saya berbicara dengan cepat
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no84" value="A"
                                        >

                                    Saya biasanya bekerja tergesa-gesa
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no84" value="B"
                                        >

                                    Saya berlatih atau berolahraga dengan teratur
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no85" value="A"
                                        >

                                    Saya cepat lelah
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no85" value="B"
                                        >

                                    Saya tidak suka bertemu dengan orang
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no86" value="A"
                                        >

                                    Saya banyak membuat persahabatan
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no86" value="B"
                                        >

                                    Saya membutuhkan banyak waktu untuk berfikir
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no87" value="A"
                                        >

                                    Saya banyak suka menerapkan teori-teori dalam bekerja
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no87" value="B"
                                        >

                                    Saya suka mengerjakan sesuatu sampai pada hal sekecil-kecilnya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no88" value="A"
                                        >

                                    Saya suka mengerjakan sesuatu sampai pada hal sekecil-kecilnya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no88" value="B"
                                        >

                                    Saya suka mengatur pekerjaan saya
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required  class="form-check-input" type="radio" name="no89" value="A"
                                        >

                                    Saya meletakkan segalanya pada tempatnya
                                </div>
                                <div class="form-check">
                                    <input required   class="form-check-input" type="radio" name="no89" value="B"
                                        >

                                    Saya selalu menyenangkan
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input required  class="form-check-input" type="radio" name="no90" value="A"
                                        >

                                    Saya senang diberi petunjuk mengenai apa yang harus saya lakukan
                                </div>
                                <div class="form-check">
                                    <input required  class="form-check-input" type="radio" name="no90" value="B"
                                        >

                                    Saya harus menyelesaikan apa yang sudah saya mulai
                                </div>
                            </li>
                        </ol>
                        <button class="btn btn-success" id="submitButton" type="submit" name="submit" >Kirim</button>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
     
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
       
        <script>
  $(document).ready(function () {
    $('#submitButton').click(function (event) {
    event.preventDefault();

    // Periksa apakah ada pertanyaan yang belum dijawab
    const totalQuestions = 90;
    const answeredQuestions = $('input:radio[required]:checked').length;
    const unansweredQuestions = answeredQuestions !== totalQuestions;

    // console.log('Total Questions:', totalQuestions);
    // console.log('Answered Questions:', answeredQuestions);

    if (unansweredQuestions) {
        // Tampilkan pesan kesalahan jika ada pertanyaan yang belum dijawab
        Swal.fire({
            title: 'Error',
            text: 'Pastikan semua pertanyaan telah dijawab.',
            icon: 'error'
        });
    } else {
        getRadioValues();
    }
});
    function getRadioValues() {
      const totalRadioGroups = 90;
      const radioValues = [];

      for (let i = 1; i <= totalRadioGroups; i++) {
        const groupName = 'no' + i;
        const selectedValue = $('input[name="' + groupName + '"]:checked').val();

        if (selectedValue) {
          radioValues.push(selectedValue);
        } else {
          radioValues.push('');
        }
      }
      Np = [];
      Gp = [];
      Ah = [];
      Lp = [];
      Pp = [];
      Im = [];
      Tt = [];
      Vt = [];
      Xk = [];
      Sp = [];
      Bk = [];
      Ok = [];
      Rt = [];
      Ds = [];
      Ct =[];
      Zh = [];
      Ep = [];
      Ka = [];
      Fd = [];
      Wk = [];
      
      //no1
      if ($('input[name=no1]:checked').val() == 'A') {
            Gp.push(1);
        } else if ($('input[name=no1]:checked').val() == 'B') {
            Ep.push(1);
        }

        //no2
      if ($('input[name=no2]:checked').val() == 'A') {
                Ah.push(1);  
        } else if ($('input[name=no2]:checked').val() == 'B') {
                Np.push(1);  
        }

         //no 3
         if ($('input[name=no3]:checked').val() == 'A') {
                Pp.push(1);
        } else if ($('input[name=no3]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no4]:checked').val() == 'A') {
                Xk.push(1);
        } else if ($('input[name=no4]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no5]:checked').val() == 'A') {
                Bk.push(1);
        } else if ($('input[name=no5]:checked').val() == 'B') {
                Xk.push(1);
        }

        if ($('input[name=no6]:checked').val() == 'A') {
                Ok.push(1);
        } else if ($('input[name=no6]:checked').val() == 'B') {
                Bk.push(1);
        }

        if ($('input[name=no7]:checked').val() == 'A') {
                Zh.push(1);
        } else if ($('input[name=no7]:checked').val() == 'B') {
                Ok.push(1);
        }

        if ($('input[name=no8]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no8]:checked').val() == 'B') {
                Zh.push(1);
        }

        if ($('input[name=no9]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no9]:checked').val() == 'B') {
                Ka.push(1);
        }

        if ($('input[name=no10]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no10]:checked').val() == 'B') {
                Fd.push(1);
        }

        //no11
        if ($('input[name=no11]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no11]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no12]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no12]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no13]:checked').val() == 'A') {
                Pp.push(1);
        } else if ($('input[name=no13]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no14]:checked').val() == 'A') {
                Xk.push(1);
        } else if ($('input[name=no14]:checked').val() == 'B') {
                Ah.push(1);
        }
        
        if ($('input[name=no15]:checked').val() == 'A') {
                Bk.push(1);
        } else if ($('input[name=no15]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no16]:checked').val() == 'A') {
                Ok.push(1);
        } else if ($('input[name=no16]:checked').val() == 'B') {
                Xk.push(1);
        }

        if ($('input[name=no17]:checked').val() == 'A') {
                Zh.push(1);
        } else if ($('input[name=no17]:checked').val() == 'B') {
                Bk.push(1);
        }

        if ($('input[name=no18]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no18]:checked').val() == 'B') {
                Ok.push(1);
        }

        if ($('input[name=no19]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no19]:checked').val() == 'B') {
                Zh.push(1);
        }

        if ($('input[name=no20]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no20]:checked').val() == 'B') {
                Ka.push(1);
        }

        if ($('input[name=no21]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no21]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no22]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no22]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no23]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no23]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no24]:checked').val() == 'A') {
                Xk.push(1);
        } else if ($('input[name=no24]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no25]:checked').val() == 'A') {
                Bk.push(1);
        } else if ($('input[name=no25]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no26]:checked').val() == 'A') {
                Ok.push(1);
        } else if ($('input[name=no26]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no27]:checked').val() == 'A') {
                Zh.push(1);
        } else if ($('input[name=no27]:checked').val() == 'B') {
                Xk.push(1);
        }

        if ($('input[name=no28]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no28]:checked').val() == 'B') {
                Bk.push(1);
        }

        if ($('input[name=no29]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no29]:checked').val() == 'B') {
                Ok.push(1);
        }

        if ($('input[name=no30]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no30]:checked').val() == 'B') {
                Zh.push(1);
        }

        if ($('input[name=no31]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no31]:checked').val() == 'B') {
                Rt.push(1);
        }

        if ($('input[name=no32]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no32]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no33]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no33]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no34]:checked').val() == 'A') {
                Tt.push(1);
        } else if ($('input[name=no34]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no35]:checked').val() == 'A') {
                Bk.push(1);
        } else if ($('input[name=no35]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no36]:checked').val() == 'A') {
                Ok.push(1);
        } else if ($('input[name=no36]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no37]:checked').val() == 'A') {
                Zh.push(1);
        } else if ($('input[name=no37]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no38]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no38]:checked').val() == 'B') {
                Xk.push(1);
        }

        if ($('input[name=no39]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no39]:checked').val() == 'B') {
                Bk.push(1);
        }

        if ($('input[name=no40]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no40]:checked').val() == 'B') {
                Ok.push(1);
        }

        if ($('input[name=no41]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no41]:checked').val() == 'B') {
                Sp.push(1);
        }

        if ($('input[name=no42]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no42]:checked').val() == 'B') {
                Rt.push(1);
        }
        
        if ($('input[name=no43]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no43]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no44]:checked').val() == 'A') {
                Tt.push(1);
        } else if ($('input[name=no44]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no45]:checked').val() == 'A') {
                Vt.push(1);
        } else if ($('input[name=no45]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no46]:checked').val() == 'A') {
                Ok.push(1);
        } else if ($('input[name=no46]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no47]:checked').val() == 'A') {
                Zh.push(1);
        } else if ($('input[name=no47]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no48]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no48]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no49]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no49]:checked').val() == 'B') {
                Xk.push(1);
        }

        if ($('input[name=no50]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no50]:checked').val() == 'B') {
                Bk.push(1);
        }

        if ($('input[name=no51]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no51]:checked').val() == 'B') {
                Vt.push(1);
        }

        if ($('input[name=no52]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no52]:checked').val() == 'B') {
                Sp.push(1);
        }

        if ($('input[name=no53]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no53]:checked').val() == 'B') {
                Rt.push(1);
        }

        if ($('input[name=no54]:checked').val() == 'A') {
                Tt.push(1);
        } else if ($('input[name=no54]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no55]:checked').val() == 'A') {
                Vt.push(1);
        } else if ($('input[name=no55]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no56]:checked').val() == 'A') {
                Sp.push(1);
        } else if ($('input[name=no56]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no57]:checked').val() == 'A') {
                Zh.push(1);
        } else if ($('input[name=no57]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no58]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no58]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no59]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no59]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no60]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no60]:checked').val() == 'B') {
                Xk.push(1);
        }

        if ($('input[name=no61]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no61]:checked').val() == 'B') {
                Tt.push(1);
        }

        if ($('input[name=no62]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no62]:checked').val() == 'B') {
                Vt.push(1);
        }

         if ($('input[name=no63]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no63]:checked').val() == 'B') {
                Sp.push(1);
        }

         if ($('input[name=no64]:checked').val() == 'A') {
                Tt.push(1);
        } else if ($('input[name=no64]:checked').val() == 'B') {
                Rt.push(1);
        }

        if ($('input[name=no65]:checked').val() == 'A') {
                Vt.push(1);
        } else if ($('input[name=no65]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no66]:checked').val() == 'A') {
                Sp.push(1);
        } else if ($('input[name=no66]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no67]:checked').val() == 'A') {
                Rt.push(1);
        } else if ($('input[name=no67]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no68]:checked').val() == 'A') {
                Ka.push(1);
        } else if ($('input[name=no68]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no69]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no69]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no70]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no70]:checked').val() == 'B') {
                Pp.push(1);
        }

        if ($('input[name=no71]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no71]:checked').val() == 'B') {
                Im.push(1);
        }

        if ($('input[name=no72]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no72]:checked').val() == 'B') {
                Tt.push(1);
        }

        if ($('input[name=no73]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no73]:checked').val() == 'B') {
                Vt.push(1);
        }

        if ($('input[name=no74]:checked').val() == 'A') {
                Tt.push(1);
        } else if ($('input[name=no74]:checked').val() == 'B') {
                Sp.push(1);
        }

        if ($('input[name=no75]:checked').val() == 'A') {
                Vt.push(1);
        } else if ($('input[name=no75]:checked').val() == 'B') {
                Rt.push(1);
        }

        if ($('input[name=no76]:checked').val() == 'A') {
                Sp.push(1);
        } else if ($('input[name=no76]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no77]:checked').val() == 'A') {
                Rt.push(1);
        } else if ($('input[name=no77]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no78]:checked').val() == 'A') {
                Ds.push(1);
        } else if ($('input[name=no78]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no79]:checked').val() == 'A') {
                Fd.push(1);
        } else if ($('input[name=no79]:checked').val() == 'B') {
                Np.push(1);
        }

        if ($('input[name=no80]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no80]:checked').val() == 'B') {
                Ah.push(1);
        }

        if ($('input[name=no81]:checked').val() == 'A') {
                Gp.push(1);
        } else if ($('input[name=no81]:checked').val() == 'B') {
                Lp.push(1);
        }

        if ($('input[name=no82]:checked').val() == 'A') {
                Lp.push(1);
        } else if ($('input[name=no82]:checked').val() == 'B') {
                Im.push(1);
        }

        if ($('input[name=no83]:checked').val() == 'A') {
                Im.push(1);
        } else if ($('input[name=no83]:checked').val() == 'B') {
                Tt.push(1);
        }

        if ($('input[name=no84]:checked').val() == 'A') {
                Tt.push(1);
        } else if ($('input[name=no84]:checked').val() == 'B') {
                Vt.push(1);
        }

        if ($('input[name=no85]:checked').val() == 'A') {
                Vt.push(1);
        } else if ($('input[name=no85]:checked').val() == 'B') {
                Sp.push(1);
        }

        if ($('input[name=no86]:checked').val() == 'A') {
                Sp.push(1);
        } else if ($('input[name=no86]:checked').val() == 'B') {
                Rt.push(1);
        }

        if ($('input[name=no87]:checked').val() == 'A') {
                Rt.push(1);
        } else if ($('input[name=no87]:checked').val() == 'B') {
                Ds.push(1);
        }

        if ($('input[name=no88]:checked').val() == 'A') {
                Ds.push(1);
        } else if ($('input[name=no88]:checked').val() == 'B') {
                Ct.push(1);
        }

        if ($('input[name=no89]:checked').val() == 'A') {
                Ct.push(1);
        } else if ($('input[name=no89]:checked').val() == 'B') {
                Ep.push(1);
        }

        if ($('input[name=no90]:checked').val() == 'A') {
                Wk.push(1);
        } else if ($('input[name=no90]:checked').val() == 'B') {
                Np.push(1);
        }

       
    //   console.log(Np);
    //   console.log(Gp);
    //   console.log(Ah);
    //   console.log(Lp);
    //   console.log(Pp);
    //   console.log(Im);
    //   console.log(Tt);
    //   console.log(Vt);
    //   console.log(Xk);
    //   console.log(Sp);
    //   console.log(Bk);
    //   console.log(Ok);
    //   console.log(Rt);
    //   console.log(Ds);
    //   console.log(Ct);
    //   console.log(Zh);
    //   console.log(Ep);
    //   console.log(Ka);
    //   console.log(Fd);
    //   console.log(Wk);
    //   console.log(Np.length);
      
            var hasilNp;
             if (Np.length < 3) {
              hasilNp = 'Menunda atau menghindari pekerjaan';
            } else if (Np.length <= 4) {
              hasilNp = 'Berhati-hati atau ragu dalam bekerja';
            } else if (Np.length <= 6) {
              hasilNp = 'Cukup bertanggung jawab pada pekerjaan';
            } else if (Np.length <= 9) {
              hasilNp = 'Tekun, tanggung jawab tinggi';
            }

            var hasilGp;
             if (Gp.length <= 4) {
              hasilGp = 'Bekerja untuk kesenangan saja, bukan hasil optimal';
            } else if (Gp.length <= 9) {
              hasilGp = 'Kemauan Bekerja Keras Tinggi';
            }

            var hasilAh;
             if (Ah.length <= 5) {
              hasilAh = 'Ketidakpastian tujuan, tidak ada usaha lebih';
            } else if (Ah.length <= 9) {
              hasilAh = 'Tujuan jelas, kebutuhan sukses dan ambisi tinggi';
            }
            
            var hasilLp;
             if (Lp.length <= 4) {
              hasilLp = 'Cenderung tidak secara aktif menggunakan orang lain dalam bekerja';
            } else if (Lp.length <= 9) {
              hasilLp = 'Tingkat dimana seseorang memproyeksikan dirinya sebagai pemimpin suatu tingkat dimana ia mencoba menggunakan orang lain untuk mencapai tujuannya';
            }

            var hasilPp;
             if (Pp.length <= 4) {
              hasilPp = 'Menurunnya keinginan untuk bertanggung jawab pada pekerjaan dan tindakan orang lain';
            } else if (Pp.length <= 9) {
              hasilPp = 'Tingkat kebutuhan untuk menerima tanggung jawab orang lain, menjadi orang yang bertanggung jawab';
            }

            var hasilIm;
             if (Im.length <= 2) {
              hasilIm = 'Ragu-menolak mengambil keputusan';
            } else if (Im.length <= 4) {
              hasilIm = 'Berhati-hati membuat keputusan';
            } else if (Im.length <= 7) {
                hasilIm = 'Berhati hati-lancar dan mudah mengambil keputusan';
            } else if (Im.length <= 9) {
                hasilIm = 'Tidak ragu dalam mengambil keputusan';
            }

            var hasilTt;
             if (Tt.length < 4) {
              hasilTt = 'Melakukan segala sesuatu menurut kemauannya sendiri';
            } else if (Tt.length <= 9) {
              hasilTt = 'Tergolong aktif secara internal dan mental';
            }

            var hasilVt;
             if (Vt.length < 5) {
              hasilVt = 'Cenderung pasif';
            } else if (Vt.length <= 9) {
              hasilVt = 'Aktif secara fisik, cenderung sportif';
            }

            var hasilXk;
             if (Xk.length < 2) {
              hasilXk = 'Cenderung pemalu';
            } else if (Xk.length <= 3) {
              hasilXk = 'Rendah hati, tulus';
            } else if (Xk.length <= 5) {
                hasilXk = 'Memiliki pola perilaku yang unik';
            } else if (Xk.length <= 9) {
                hasilXk = 'Membutuhkan perhatian nyata';
            }

            var hasilSp;
             if (Sp.length < 6) {
              hasilSp = 'Perhatian rendah terhadap hubungan sosial, kurang percaya kepada orang lain';
            } else if (Sp.length <= 9) {
              hasilSp = 'Kepercayaan tinggi dalam hubungan sosial, suka interaksi sosial';
            }

            var hasilBk;
             if (Bk.length <= 3) {
              hasilBk = 'Selektif';
            } else if (Bk.length <= 5) {
              hasilBk = 'Butuh diterima, tapi tidak mudah dipengaruhi kelompok';
            } else if (Bk.length <= 9) {
                hasilBk = 'Butuh disukai dan diakui, mudah dipengaruhi';
            }

            var hasilOk;
             if (Ok.length < 3) {
              hasilOk = 'Tidak suka hubungan perorangan';
            } else if (Ok.length <= 4) {
              hasilOk = 'Sadar akan hubungan peorangan, tapi tidak terlalu tergantung';
            } else if (Ok.length <= 9) {
                hasilOk = 'Sangat tergantung, butuh penerimaan diri';
            }

            var hasilRt;
             if (Rt.length <= 4) {
              hasilRt = 'Kurang perhatian, bersifat praktis';
            } else if (Rt.length <= 9) {
              hasilRt = 'Nilai nilai penalaran tergolong tinggi';
            }

            var hasilDs;
             if (Ds.length <= 3) {
              hasilDs = 'Menyadari kebutuhan akan kecermatan, tetapi tidak berminat bekerja detail';
            } else if (Ds.length <= 9) {
              hasilDs = 'Minat tinggi untuk bekerja secara detail';
            }

            var hasilCt;
             if (Ct.length <= 2) {
              hasilCt = 'Fleksibel-tidak teratur';
            } else if (Ct.length <= 5) {
              hasilCt = 'Teratur tetapi tidak tergolong fleksibel';
            } else if(Ct.length <= 9) {
                hasilCt = 'Keteraturan tinggi cenderung kaku';
            }

            var hasilZh;
             if (Zh.length < 2) {
              hasilZh = 'Tidak suka berubah';
            } else if (Zh.length <= 4) {
              hasilZh = 'Tidak suka perubahan jika dipaksakan';
            } else if (Zh.length <= 6) {
                hasilZh = 'Mudah menyesuaikan diri';
            } else if (Zh.length == 7) {
                hasilZh = 'Membuat perubahan yang selektif, berfikir jauh kedepan';
            } else if (Zh.length <= 9) {
                hasilZh = 'Mudah gelisah, frustasi, karena segala sesuatu tidak berjalan fantastis';
            }

            var hasilEp;
             if (Ep.length < 2) {
              hasilEp = 'Terbuka, cepat berekasi, tidak normative';
            } else if (Ep.length <= 3) {
              hasilEp = 'Terbuka';
            } else if (Ep.length <= 6) {
                hasilEp = 'Punya pendekatan emosional seimbang, mampu mengendalikan';
            } else if (Ep.length >= 6) {
                hasilEp = 'Sangat normative, kebutuhan pengendalian diri yang berlebihan';
            }

            var hasilKa;
             if (Ka.length <= 2) {
              hasilKa = 'Menghindari masalah, untuk mengenali situasi sebagai masalah';
            } else if (Ka.length <= 4) {
              hasilKa = 'Suka lingkungan tenang, menghindari konflik';
            } else if (Ka.length == 5) {
                hasilKa = 'Keras kepala';
            } else if (Ka.length <= 7) {
                hasilKa = 'Agresi berhubungan dengan kerja, dorngan semangat bersaing';
            } else if (Ka.length <= 9) {
                hasilKa = 'Agresif, cenderung defensive';
            }

            var hasilFd;
             if (Fd.length < 2) {
              hasilFd = 'Cenderung egois, kemungkinan bisa memberontak';
            } else if (Fd.length <= 3) {
              hasilFd = 'Mengurus kepentingan sendiri';
            } else if (Fd.length <= 5) {
                hasilFd = 'Setia terhadap perusahaan';
            } else if (Fd.length <= 9) {
                hasilFd = 'Bersikap setia dan membantu, kemungkinan bantuannya bersifat politis';
            }

            var hasilWk;
             if (Xk.length < 4) {
              hasilWk = 'Berorientasi pada tujuan, mandiri';
            } else if (Xk.length <= 5) {
              hasilWk = 'Kebutuhan akan pengarahan dan harapan yang dirumuskan untuknya';
            } else if (Xk.length <= 9) {
                hasilWk = 'Meningkatnya orientasi terhadap tugas dan membutuhkan instruksi yang jelas';
            }
          
        //   console.log(hasilNp);
        //   console.log(hasilGp);
        //   console.log(hasilAh);
        //   console.log(hasilLp);
        //   console.log(hasilPp);
        //   console.log(hasilIm);
        //   console.log(hasilTt);
        //   console.log(hasilVt);
        //   console.log(hasilXk);
        //   console.log(hasilSp);
        //   console.log(hasilBk);
        //   console.log(hasilOk);
        //   console.log(hasilRt);
        //   console.log(hasilDs);
        //   console.log(hasilCt);
        //   console.log(hasilZh);
        //   console.log(hasilEp);
        //   console.log(hasilKa);
        //   console.log(hasilFd);
        //   console.log(hasilWk);
        //   document.getElementById('a').innerHTML = hasilNp;
        //   document.getElementById('b').innerHTML = hasilGp;
        //   document.getElementById('c').innerHTML = hasilAh;
        //   document.getElementById('d').innerHTML = hasilLp;
        //   document.getElementById('e').innerHTML = hasilPp;
        //   document.getElementById('f').innerHTML = hasilIm;
        //   document.getElementById('g').innerHTML = hasilTt;
        //   document.getElementById('h').innerHTML = hasilVt;
        //   document.getElementById('i').innerHTML = hasilXk;
        //   document.getElementById('j').innerHTML = hasilSp;
        //   document.getElementById('k').innerHTML = hasilBk;
        //   document.getElementById('l').innerHTML = hasilOk;
        //   document.getElementById('m').innerHTML = hasilRt;
        //   document.getElementById('n').innerHTML = hasilDs;
        //   document.getElementById('o').innerHTML = hasilCt;
        //   document.getElementById('p').innerHTML = hasilZh;
        //   document.getElementById('q').innerHTML = hasilEp;
        //   document.getElementById('r').innerHTML = hasilKa;
        //   document.getElementById('s').innerHTML = hasilFd;
        //   document.getElementById('t').innerHTML = hasilWk;
        
        var lengthsArray = [];

        lengthsArray.push(Np.length);
        lengthsArray.push(Ah.length);
        lengthsArray.push(Gp.length);
        lengthsArray.push(Lp.length);
        lengthsArray.push(Pp.length);
        lengthsArray.push(Im.length);
        lengthsArray.push(Tt.length);
        lengthsArray.push(Vt.length);
        lengthsArray.push(Ok.length);
        lengthsArray.push(Bk.length);
        lengthsArray.push(Sp.length);
        lengthsArray.push(Xk.length);
        lengthsArray.push(Ct.length);
        lengthsArray.push(Ds.length);
        lengthsArray.push(Rt.length);
        lengthsArray.push(Zh.length);
        lengthsArray.push(Ep.length);
        lengthsArray.push(Ka.length);
        lengthsArray.push(Fd.length);
        lengthsArray.push(Wk.length);

        

        var data = localStorage.getItem('key');

        if (data) {
        var parsedData = JSON.parse(data);
        if (parsedData && parsedData.nik) {
            var nik = parsedData.nik;
        } else {
            console.error("Properti 'nik' tidak ditemukan dalam struktur data.");
        }
        } else {
        console.error("Data tidak ditemukan di localStorage.");
        }
    

      $.ajax({
        type: 'POST',
        url: 'api/api_kostick_kirim.php',
        data: {
            nik:nik,
            hasilNp: hasilNp,
            hasilAh: hasilAh,
            hasilGp: hasilGp,
            hasilLp: hasilLp,
            hasilPp: hasilPp,
            hasilIm: hasilIm,
            hasilTt: hasilTt,
            hasilVt: hasilVt,
            hasilOk: hasilOk,
            hasilBk: hasilBk,
            hasilSp: hasilSp,
            hasilXk: hasilXk,
            hasilCt: hasilCt,
            hasilDs: hasilDs,  
            hasilRt: hasilRt,
            hasilZh: hasilZh,
            hasilEp: hasilEp,
            hasilKa: hasilKa,
            hasilFd: hasilFd,
            hasilWk: hasilWk,
            radioValues: radioValues,
            lengthsArray: lengthsArray
        },
        success: function (response) {
          Swal.fire({
            title: 'Success!',
            text: 'Your test answers have been successfully sent',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
              window.location.href = 'akhir.php';
            }
          });
        },
        error: function (response) {
        Swal.fire({
          title: 'Error!',
          text: 'Failed to send data to the server. Please try again.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }
      });
    }
  });
</script>

    
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
