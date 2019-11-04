<?php 
    $query = "SELECT * FROM berita ORDER BY id_berita DESC";
     $result = mysqli_query($conn,$query);
    // $artikel = mysqli_fetch_assoc($result);
     
    // while ($namaa = mysqli_fetch_assoc($result)){
    //     var_dump($namaa["judul"]);
    // }
?>