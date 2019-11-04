<?php
    $id = $_GET["id"];
    $tabel = $_GET["f"];
?>


<?php   if($tabel==1){ 
    $res=mysqli_query($conn, "SELECT * FROM berita WHERE id_berita=$id");
    $data = mysqli_fetch_array($res);
    
    
    $gambarlama = $data["gambar"];


    if(isset($_POST['editberita'])){
        $judul = $_POST['jdl'];
        $isi = $_POST['psn'];

        $edit = mysqli_query($conn, "UPDATE berita SET
            judul = '$judul',
            isi = '$isi'

            WHERE id_berita=$id");
        header('location:admin.php?adminberita');

    }
?>

<form action="" method="post" enctype="multipart/form-data" class="hpform">
    <div class="">
		<img src="img/berita/<?=$gambarlama ?>" alt="Post Title" class =" center-block img-responsive">
	</div>
    SAMPUL BERITA : <input type="file" name="gbr"><br>
    JUDUL BERITA : <input type="text" name="jdl" value= "<?=$data["judul"] ?>"> <br>
    ISI BERITA : <textarea name="psn" id="" cols="30" rows="10"> <?=$data["isi"];?> </textarea> <br>
    <input type="submit" name="editberita" value="EDIT">
</form>


<?php }elseif($tabel==2){ 
    $res=mysqli_query($conn, "SELECT * FROM galeri WHERE g_id=$id");
    $data = mysqli_fetch_array($res);
    
    
    $gambarlama = $data["g_gambar"];


    if(isset($_POST['editberita'])){
        $judul = $_POST['jdl'];
        

        $edit = mysqli_query($conn, "UPDATE galeri SET
            g_deskripsi = '$judul'

            WHERE g_id=$id");
        header('location:admin.php?admingaleri');

    }?>
    <form action="" method="post" enctype="multipart/form-data" class="hpform">
    <div class="">
		<img src="img/gallery/<?=$gambarlama ?>" alt="Post Title" class =" center-block img-responsive">
	</div>
    SAMPUL GALERI : <input type="file" name="gbr"><br>
    JUDUL GALERI : <input type="text" name="jdl" value= "<?=$data["g_deskripsi"] ?>"> <br>
    
    <input type="submit" name="editberita" value="EDIT">
    </form>

<?php } ?>
