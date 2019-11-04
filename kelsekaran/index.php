<?php
	include('section/header.php');
	include('section/navbar.php');
	require('config/db_connect.php'); 
	

 ?>

 <div>
 	<?php 
 		if (isset($_GET['profil'])) {
       include 'section/jumbotron.php';
 			include 'pages/profil.php';	
 		}elseif (isset($_GET['berita'])) {
      include 'section/jumbotron.php';
			 include 'pages/berita.php';
			}elseif (isset($_GET['artikel'])) {
				include 'section/jumbotron.php';
					   include 'pages/artikel.php';
 		}elseif (isset($_GET['galeri'])) {
      include 'section/jumbotron.php';
 			include 'pages/galeri.php';
 		}elseif (isset($_GET['contact'])) {
      include 'section/jumbotron.php';
 			include 'pages/kontak.php';
 		}elseif (isset($_GET['layanan'])) {
      include 'section/jumbotron.php';
			 include 'pages/layanan.php';
		}elseif (isset($_GET['informasi'])) {
      include 'section/jumbotron.php';
 			include 'pages/informasi.php';
 		}else{
 			include 'pages/home.php';
 		}

 	 ?>
 </div>

 <?php 
 	include 'section/footer.php';
  ?>