<!DOCTYPE html>
<html>
<head>
	<title>APEM Air Pressure Measurer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">APEM</h1>
		<h3 class="deskripsi">Air Pressure Measurer</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
			<li><a href="index.php?page=suhu">SUHU</a></li>
			<li><a href="index.php?page=tekanan">TEKANAN</a></li>
			<li><a href="index.php?page=ketinggian">KETINGGIAN</a></li>
		</ul>
	</div>

	<div class="badan">

	<?php
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;
			case 'suhu':
				include "halaman/suhu.php";
				break;
			case 'tekanan':
				include "halaman/tekanan.php";
				break;
			case 'ketinggian':
				include "halaman/ketinggian.php";
				break;	
			default:
				echo "<center><h3>Maaf, halaman tidak di temukan!</h3></center>";
				break;
		}
	}
	else
	{
		include "halaman/home.php";
	}
	?>
	</div>
</div>
</body>
</html>
