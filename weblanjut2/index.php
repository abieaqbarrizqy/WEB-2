<!DOCTYPE html>
<html>
<head>
	<title>KOTA BATAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">BATAM CITY'S</h1>
		<h3 class="deskripsi">BLOG WEBSITE OF BATAM CITY</h3>
	</header>

	<div class="menu">
		<ul>
            <li><a href="index.php?page=home">HOME</a></li>
            <li><a href="index.php?page=sejarah">SEJARAH & GEOGRAFI</a></li>
            <li><a href="index.php?page=demografi">DEMOGRAFI</a></li>
            <li><a href="index.php?page=wisata">WISATA BATAM</a></li>
			<li><a href="index.php?page=about">BIODATA</a></li> 
			<li><a href="index.php?page=add">COMMENT</a></li>
			<li><a href="index.php?page=kontak">DATA</a></li>    
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
                break;
            case'sejarah':
                include "halaman/sejarah.php";
                break;
            case'demografi':
                include "halaman/demografi.php";
                break;
            case'wisata':
                include "halaman/wisata.php";
                break;
			case 'about':
				include "halaman/about.php";
				break;
			case 'kontak':
				include "kontak.php";
				break;
			case 'add':
				include "add.php";
				break;
			case 'edit':
				include "edit.php";
				break;
			case 'delete':
				include "delete.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>