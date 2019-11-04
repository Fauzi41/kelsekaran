<?php
    $query = mysqli_query($conn, "SELECT * FROM loginadmin");
    

    $i = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-4 adminnav">
            <a href="?tambah_admin">
                <h2>Tambah ADMIN</h2>
            </a>
        </div>
        <div class="col-sm-8"></div>
    </div>
</div>  
<hr>


<div class="container">
        <div class="row">
            <div class="col-sm-4 adminnav">
                <a href="?setting">
                <h2>List ADMIN</h2>
                </a>
            </div>
            <div class="col-sm-8"></div>
        </div>
</div> 

<div class="container sett">
    <?php while($hasil = mysqli_fetch_array($query)){ ?>
        <p class = "sett">
            <?= $i;?> . <?=$hasil["user"]; ?>
        </p>
    <?php $i++; }
        ?>
</div>