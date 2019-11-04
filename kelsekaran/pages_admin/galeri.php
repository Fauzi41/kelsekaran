<?php
    include('fungsi/tampil_galeri.php')
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 adminnav">
            <a href="?tambah_galeri">
                <h2>Tambah Galeri</h2>
            </a>
        </div>
        <div class="col-sm-8"></div>
    </div>
</div>  
<hr>


<div class="container">
        <div class="row">
            <div class="col-sm-4 adminnav">
                <a href="?admingaleri">
                <h2>List Galeri</h2>
                </a>
            </div>
            <div class="col-sm-8"></div>
        </div>
</div>    
<br>
<div class="container">
      <table class="tg" style="undefined;table-layout: fixed; width: 727px">
            <colgroup>
            <col style="width: 46px">
            <col style="width: 71px">
            <col style="width: 71px">
            <col style="width: 201px">
            <col style="width: 236px">
            <col style="width: 102px">
            </colgroup>
            <tr>
                <th class="tg-s6z2">NO. </th>
                <th class="tg-s6z2" colspan="2">AKSI</th>
                <th class="tg-baqh">GAMBAR</th>
                <th class="tg-baqh">JUDUL</th>
                
            </tr>
            <?php
                $i=1;
                while ( $foto = mysqli_fetch_array($result2)) :?>
                 <tr>
                    <td class="tg-s6z2"><?= $i ?></td>
                    <td class="tg-s6z2">
                        <a href="?hapus&id=<?=$foto["g_id"]?>&tab=2">HAPUS</a>
                    </td>
                    <td class="tg-baqh">
                        <a href="?edit&id=<?=$foto["g_id"]?>&f=2"">UBAH</a>
                    </td>
                    <td class="tg-baqh">
                        <img src="img/gallery/<?=$foto["g_gambar"]?>" alt="">
                    </td>
                    <td class="tg-baqh"><?=$foto["g_deskripsi"]?></td>
                    
                </tr>
            <?php $i++; endwhile; ?>
            </table>

</div>