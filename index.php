<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INES TRISEPTIANI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/ines.t.septiani.9?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a></li>
				<li><a href="https://instagram.com/septiani445?igshid=NTc4MTIwNjQ2YQ==/"><i class="fa-brands fa-instagram-square"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1> Ines Triseptiani </h1>
			<ul>
				<li ><a href="#home">HOME</a></li>
				<li><a href="#ABOUT">ABOUT ME</a></li>
				<li><a href="#myskill">MY SKILL</a></li>
				<li><a href="#myorganization">MY Organization</a></li>
				<li><a href="#contact">CONTACT</a></li>
			</ul>
		</div>
	</header>
		<section class="benner">
		<h2>WELCOME TO MY WEBSITE</h2>
	</section>


	<section class="home">
		<div class="container">
				<div class="home-left">
					<img src="ines.jpg">
					<h2>Halo..<br>
						PERKENALKAN  saya <span class="efek-ketik"></span></h2>
					<p>Selamat datang di website SAYA!</p> 
				</div>
			</div>
	</section>
	<section id="login">
            <div class="home">
            	<div class="container">
            		<h3>Form Daftar kunjungan</h3>
            		<h4>Mohon untuk mengisi form daftar kunjungan di bawah ini: </h4>
                	<div class="home-section">
                    <div class="login1">
                    <form action="proses.php" method="POST" onsubmit="validasi()">
            <div>
                <label>
                    Nama Lengkap:
                </label>
                <input type="text" name="nama" id="nama">
            </div>
            <div>
                <label>
                    Email:
                </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label>
                    Website:
                </label>
                <input type="website" name="website" id="website">
            </div>
             <div>
                <label>
                    Status:
                </label>
                <select name="status" id="status">
                	<option>Pelajar</option>
                	<option>Single</option>
                	<option>Menikah</option>
                </select>
            </div>
            <div>
                <label>
                    Alamat:
                </label>
                <textarea cols="40" rows="5" name="alamat" id="alamat">
                </textarea>
            </div>
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
            <div class="cek">
				<center>
					<a href="lihat.php" >::Database</a>
				</center>
			</div>
        </form>
    </div>
</div>
</div>
</div>
</section>
	<section id="ABOUT">
		<div class="container">
			<h3>ABOUT</h3><br>
			<p>		Halo Perkenalkan nama saya Ines Triseptiani. Saya Lahir pada tanggal 1 September 2004 di kota Bengkulu. Saya sekarang sedang Menempuh pendidikan S1 Pada Program Studi Informatika di salah satu universitas Swasta ternama di DIY yaitu Universitas Ahmad Dahlan </p>
		</div>
	</section>
	<section id="myskill">
		<div class="container">
			<h3>My skill</h3><br>
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			 <script type="text/javascript">
			 $(document).ready(function(){
    barChart();

    $(window).resize(function(){
        barChart();
    });

    function barChart(){
        $('.bar-chart').find('.progress').each(function(){
            var itemProgress = $(this),
            itemProgressWidth = $(this).parent().width() * ($(this).data('persen') / 100);
            itemProgress.css('width', itemProgressWidth);
        });
    }
});
</script>
</head>
<body>
<div class="container">
    <h2>My Skill</h2>
    <div class="bar-chart">
        <!-- legend label -->
        <div class="legend">
            <div class="label">
                <h4>Newbie</h4>
            </div>
            <div class="label">
                <h4>Menengah</h4>
            </div>
            <div class="label">
                <h4>Mahir</h4>
            </div>
            <div class="label last">
                <h4>Suhu</h4>
            </div>
        </div>

        <!-- bar -->
        <div class="chart clearfix">
            <div class="item">
                <div class="bar">
                    <span class="persen">85%</span>

                    <div class="progress" data-persen="85">
                        <span class="title">PENGETAHUAN PHP</span>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="bar">
                    <span class="persen">68%</span>

                    <div class="progress" data-persen="68">
                        <span class="title">PENGETAHUAN MySQL</span>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="bar">
                    <span class="persen">59%</span>

                    <div class="progress" data-persen="59">
                        <span class="title">PENGETAHUAN JavaScript</span>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="bar">
                    <span class="persen">92%</span>

                    <div class="progress" data-persen="91">
                        <span class="title">PENGETAHUAN HTML&amp;CSS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

		</div>
	</section>
	<section id="myorganization">
		<div class="container">
			<h3>My organization</h3><br> 
				1. Wakil Bendahara Muallimin Seintific Community 2019-2020</br>
				2. Bendahara Umum Muallimin Seintific Community 2020-2021 </br>
				3. Staff Kaderisasi Himpunan Mahasiswa Informatika 2022-2023</br>
				4. Kepala Bidang Pengkajian Ilmu Pengetahuan PC IPM KASIHAN 2022-2024</br>
			    5. Kepala Bidang Divisi Litbang Lembaga Pers GEPLAK 2022-2024</br>
			
		</div>
	</section>
	<section id="Image">
			<div class="container">
				<h3>More Image</h3>
				<div class="col-2">
					<a href="">
						<img src="fOTO1.jpg">
					</a>
				</div>

				<div class="col-2">
					<a href="">
						<img src="FOTO2.jpg">
					</a>
				</div>
			</div>
	</section>

	<section id="contact">
			<div class="container">
				<h3>Contact</h3>
				<div class="box">
					<div class="col-3">
						<h4>Address</h4>
						<p>Yogyakarta,DIY</p>
					</div>
					<div class="col-3">
						<h4>Email</h4>
						<p>inestriseptiani18@gmail.com</p>
					</div>
					<div class="col-3">
						<h4>Whatshapp</h4>
						<p>082268637565</p>
					</div>
				</div>
			</div>
	</section>
	<section id="MASSAGE">
			<div class="container">
				<h3>Contact US</h3>
				<h4>Untuk Memberikan Pesan dan Saran dapat mengisi form di bawah : </h4>
				<br>
				<div class="cont-1">
			<form action="proses2.php" method="POST" onsubmit="validasiForm()">
            <div>
                <label>
                    Nama Lengkap:
                </label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label>
                    Email:
                </label>
                <input type="email" name="mail" id="mail">
            </div>
            <div>
                <label>
                    Perusahaan :
                </label>
                <input type="text" name="company" id="company">
            </div>
             <div>
                <label>
                    Pesan :
                </label>
                <textarea cols="100" rows="5" name="message" id="message"></textarea>
            </div>
            <div>
                <label>
                    Kritik dan saran:
                </label>
                <textarea cols="100" rows="5" name="critic" id="critic">
                </textarea>
            </div>
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
            <div class="cek">
				<center>
					<a href="lihat2.php" >::Database</a>
				</center>
			</div>
        </form>
				</div>
			</div>
	</section>
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - InesTriseptiani.</small>
		</div>
	</footer>
	<script src="script.js"></script>
	<script type="text/javascript">
    	var tombolMenu = document.getElementsByClassName('tombol-menu')[0];
		var menu = document.getElementsByClassName('menu')[0];
		tombolMenu.onclick = function() {
    	menu.classList.toggle('active');
		}
		menu.onclick = function() {
    	menu.classList.toggle('active');
		}

		function validasi(){
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("status").value;
        var website = document.getElementById("website").value;
        var alamat = document.getElementById("alamat").value;
        	if (nama != "" && email !="" && status !="" && website !="" && alamat !=""){
            	alert('Anda berhasil menginputkan, selamat masuk ke web saya');
        	}else{
            	alert('Anda harus mengisi data dengan lengkap !');
        		}
    		}

    	function validasiForm(){
        var name = document.getElementById("name").value;
        var mail = document.getElementById("mail").value;
        var company = document.getElementById("company").value;
        var message = document.getElementById("message").value;
        var critic = document.getElementById("critic").value;
        	if (name != "" && mail !="" && company !="" && message !="" && critic !=""){
            	alert('Anda berhasil menginputkan, selamat masuk ke web saya');
        	}else{
            	alert('Anda harus mengisi data dengan lengkap !');
        		}
    		}
    </script>

	
</body>
</html>
