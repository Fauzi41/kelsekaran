<?php

    if(isset($_POST['tambah_admin']) && $_POST['tambah_admin'] == "TAMBAH"){
        $judul = $_POST['judul'];
        $pw = $_POST['password'];
        $pw2 = $_POST['password2'];

        if($pw=$pw2){
            $query ="INSERT INTO loginadmin SET user='$judul', pass='$pw'"; 
            mysqli_query($conn,$query);
            if($query){
                echo " <script> 
                  alert('Sukses');
                  document.location.href = 'admin.php?setting';
                </script>";
            }
        }else{
            echo " <script> 
                  alert('GAGAL');
                  document.location.href = 'admin.php?tambah_admin';
                </script>";
            
        }


        
    }



?>



<form action="" method="post" enctype="multipart/form-data" class="hpform">
    NAMA FOTO : <input type="text" name="judul"> <br>
    PASSWORD : <input type="password" name="password"> <br>
    CONFIRM PASSWORD : <input type="password" name="password2"> <br>
    <input type="submit" name="tambah_admin" value="TAMBAH">

</form>