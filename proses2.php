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
        <h1 align="center">Terima Kasih Telah Menggunakan Jasa Kami</h1>
      <?php 
        $Name = $_POST['name'];
        $Mail = $_POST['mail'];
        $Company = $_POST['company'];
        $Message = $_POST['message'];
        $Kritik = $_POST['critic'];
        $tanggal= date("Y-m-d");

        echo "<head><title>My Guest Book</title></head>";
        $fp = fopen("file2.txt", "a+");
        fputs($fp, "$tanggal|$Name|$Mail|$Company|$Message|$Kritik\n");
        fclose($fp);

        echo "Lihat Database<br>";
        echo "<a href='indeks.php'>Link mengisi data<br>";
        echo "<a href='lihat2.php'>Lihat Database</a><br>";

        ?>
  </div>
</body>
</html>
