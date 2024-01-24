<?php
require 'function.php';

$query = "SELECT * FROM papi_kostick";
$conn = query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="table2excel.js"></script>
    <style>
        h2 {
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>peserta</h2>
        <table id="example-table" border="1" class="table table-dark  table-striped table-bordered table-hover ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Jabatan</th>
                    <th>Pendidikan</th>
                    <th>tgl test</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($conn as $row): ?>
                    <tr>
                        <td>
                            <?= $i ?>
                        </td>
                        <td>
                            <?= $row['name'] ?>
                        </td>
                        <td>
                            <?= $row['nip'] ?>
                        </td>
                        <td>
                            <?= $row['jabatan'] ?>
                        </td>
                        <td>
                            <?= $row['pendidikan'] ?>
                        </td>
                        <td>
                            <?= $row['tgl_test'] ?>
                        </td>
                        <td><a href="admin.php?id=<?= $row['id'] ?>">Jawaban peserta</a></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <button id="download">export to excel</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script>
        document.getElementById('download').addEventListener('click', function () {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#example-table"));
        });
    </script>
</body>

</html>