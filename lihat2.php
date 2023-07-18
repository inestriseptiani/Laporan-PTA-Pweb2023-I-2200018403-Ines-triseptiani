<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            position: relative;
            font-family: Roboto;
            background-color: #147FB9;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            overflow: hidden;
            font-size: 15px;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-55%, -55%);
            width: 70vh;
            background: white;
            border-radius: 10px;
        }
        .center h1{
            text-align: center;
            padding: 0 0 10px 0;

        }
    </style>
</head>
<body>
    <div class="center">
        <h1>DATA BASE</h1>
        <?php 

            echo "<head><title>My Guest Book</title></head>";
            $fp = fopen("file2.txt", "r");

            echo "<table border='0' align='center'>";
            while ($isi = fgets($fp)) {
            $pisah = explode('|', $isi);
            echo "<tr><td>Tanggal: </td><td>: $pisah[0] </td></tr>";
            echo "<tr><td>Nama: </td><td>: $pisah[1] </td></tr>";
            echo "<tr><td>Email: </td><td>: $pisah[2] </td></tr>";
            echo "<tr><td>Perusahaan: </td><td>: $pisah[3] </td></tr>";
            echo "<tr><td>Pesan: </td><td>: $pisah[4] </td></tr>";
            echo "<tr><td>Kritik dan Saran: </td><td>: $pisah[5] </td></tr>";
            }

            echo "</table>";
            echo "<a href='indeks.php'> Mengisi Database </a>";

        ?>
    </div>
</body>
</html>
