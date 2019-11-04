<?php
    $id = $_GET["id"];

    $query = mysqli_query($conn, "SELECT * FROM berita WHERE id_berita=$id" );
    $artikel= mysqli_fetch_array($query);

?>

<div class="container">
    <div class="section-breadcrumbs">
        <h2>Judul</h2>
        <p class="garis"></p>
    </div>
    <div class="row">
        <div class="col-sm-12 center-block">
            <div class="">
                <div class="single-post-title">
                    <h2><?= $artikel["judul"];?></h2>
                </div>
                <div class="">
                    <img src="img/berita/<?=$artikel["gambar"]; ?>" alt="Post Title" class =" center-block img-responsive">
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="s">
                <br>
                <p>
                    <?= $artikel["isi"]; ?>

                </p>
                                    
            </div>
        </div>
    </div>
</div>