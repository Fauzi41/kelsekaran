<?php
    include('fungsi/tampil_berita.php')
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 adminnav">
            <a href="?tambah_berita">
                <h2>Tambah Berita</h2>
            </a>
        </div>
        <div class="col-sm-8"></div>
    </div>
</div>  
    <hr>
<div class="container">
        <div class="row">
            <div class="col-sm-4 adminnav">
                <a href="?adminberita">
                <h2>List Berita</h2>
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
                while ( $artikel = mysqli_fetch_array($result)) :?>
                 <tr>
                    <td class="tg-s6z2"><?= $i ?></td>
                    <td class="tg-s6z2">
                        <a href="?hapus&id=<?=$artikel["id_berita"]?>&tab=1">HAPUS</a>
                    </td>
                    <td class="tg-baqh">
                        <a href="?edit&id=<?=$artikel["id_berita"]?>&f=1">UBAH</a>
                    </td>
                    <td class="tg-baqh">
                        <img src="img/berita/<?=$artikel["gambar"]?>" alt="">
                    </td>
                    <td class="tg-baqh"><?=$artikel["judul"]?></td>
                    
                </tr>
            <?php $i++; endwhile; ?>
            </table>

</div>


