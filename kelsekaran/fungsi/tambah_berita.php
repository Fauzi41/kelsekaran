<?php

    if(isset($_POST['tambah-berita']) && $_POST['tambah-berita'] == "TAMBAH"){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $gambar = $_FILES['gambar']['name'];

        move_uploaded_file($_FILES['gambar']['tmp_name'], "img/berita/".$gambar);

        $query ="INSERT INTO berita SET judul='$judul', isi='$isi', gambar='$gambar'"; 
        mysqli_query($conn,$query);
        if($query){
            echo " <script> 
              alert('Sukses');
              document.location.href = 'admin.php?adminberita';
            </script>";
            // header('location:index.php?berita');
            // header('location:admin.php');
        }
    }



?>



<form action="" method="post" enctype="multipart/form-data" class="hpform">
    SAMPUL BERITA : <input type="file" name="gambar"><br>
    JUDUL BERITA : <input type="text" name="judul"> <br>
    ISI BERITA : <textarea name="isi" id="" cols="30" rows="10"></textarea> <br>
    <input type="submit" name="tambah-berita" value="TAMBAH">

</form>