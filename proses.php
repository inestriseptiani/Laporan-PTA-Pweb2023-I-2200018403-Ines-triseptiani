<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body{
            font-family: roboto;
            background-color: #147FB9 ;
        }
        .container{
            position: relative;
            text-align: center;
        }
    </style>
</head>
<body>
  <div class="container">
        <h1 align="center">Terima Kasih Telah Mengunjungi Web Kami</h1>
      <?php 
        $Nama = $_POST['nama'];
        $Email = $_POST['email'];
        $Status = $_POST['status'];
        $Website = $_POST['website'];
        $Alamat = $_POST['alamat'];
        $tanggal= date("Y-m-d");

        echo "<head><title>My Guest Book</title></head>";
        $fp = fopen("file.txt", "a+");
        fputs($fp, "$tanggal|$Nama|$Email|$Status|$Website|$Alamat\n");
        fclose($fp);

        echo "Lihat Database<br>";
        echo "<a href='indeks.php'>Link mengisi data<br>";
        echo "<a href='lihat.php'>Lihat Database</a><br>";

        ?>
  </div>
</body>
</html>
