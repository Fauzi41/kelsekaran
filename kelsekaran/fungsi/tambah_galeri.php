<?php

    if(isset($_POST['tambah_galeri']) && $_POST['tambah_galeri'] == "TAMBAH"){
        $judul = $_POST['judul'];
        $gambar = $_FILES['gambar']['name'];

        move_uploaded_file($_FILES['gambar']['tmp_name'], "img/gallery/".$gambar);

        $query ="INSERT INTO galeri SET g_deskripsi='$judul', g_gambar='$gambar'"; 
        mysqli_query($conn,$query);
        if($query){
            echo " <script> 
              alert('Sukses');
              document.location.href = 'admin.php?admingaleri';
            </script>";
        }
    }



?>



<form action="" method="post" enctype="multipart/form-data" class="hpform">
    FOTO : <input type="file" name="gambar"><br>
    NAMA FOTO : <input type="text" name="judul"> <br>
    <input type="submit" name="tambah_galeri" value="TAMBAH">

</form>