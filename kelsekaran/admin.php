<?php
    require 'config/db_connect.php';
    require 'config/session.php';
    include('section/header.php');
    include('section/navbaradmin.php');
    include('section/jumbotron2.php');
?>

<?php
    if (isset($_GET['adminberita'])) {
               include 'pages_admin/berita.php';	
          }elseif (isset($_GET['tambah_galeri'])) {
                include 'fungsi/tambah_galeri.php';
          }elseif (isset($_GET['tambah_berita'])) {
                include 'fungsi/tambah_berita.php';
            }elseif (isset($_GET['tambah_admin'])) {
                include 'fungsi/tambah_admin.php';
            }elseif (isset($_GET['admingaleri'])) {
                include 'pages_admin/galeri.php';
            }elseif (isset($_GET['hapus'])) {
                include 'fungsi/hapus.php';
            }elseif (isset($_GET['edit'])) {
                include 'fungsi/edit.php';
            }elseif (isset($_GET['feedbacks'])) {
                include 'pages_admin/feedbacks.php';
            }elseif (isset($_GET['setting'])) {
                include 'pages_admin/setting.php';
            }elseif (isset($_GET['logout'])) {
                include 'config/logout.php';
          }else{
            include 'pages/home_admin.php';
          }
?>


<?php 
 	include 'section/footer.php';
?>