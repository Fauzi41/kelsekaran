


<?php
    $id = $_GET["id"];
    $tabel = $_GET["tab"];

    if($tabel==1){ 
        $res=mysqli_query($conn, "SELECT * FROM berita WHERE id_berita=$id");

        while($data=mysqli_fetch_assoc($res)){
            $gambar=$data["gambar"];
        }
        unlink("img/berita/$gambar");

        mysqli_query($conn, "DELETE FROM berita WHERE id_berita=$id");
        ?>

        <script> 
            alert('Sukses');
            document.location.href = 'admin.php?adminberita';
        </script>";


 <?php   }elseif($tabel==2){
        $res=mysqli_query($conn, "SELECT * FROM galeri WHERE g_id=$id");

        while($data=mysqli_fetch_assoc($res)){
            $gambar=$data["g_gambar"];
        }
        unlink("img/gallery/$gambar");
    
        mysqli_query($conn, "DELETE FROM galeri WHERE g_id=$id");
        ?>

        <script> 
            alert('Sukses');
            document.location.href = 'admin.php?admingaleri';
        </script>";

 <?php } ?>


