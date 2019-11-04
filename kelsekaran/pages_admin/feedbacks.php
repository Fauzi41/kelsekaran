<?php
    include('fungsi/tampil_fb.php');
?>

<div class="container">
        <div class="row">
            <div class="col-sm-4 adminnav">
                <a href="?feedbacks">
                <h2>List Feedback User</h2>
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
            <col style="width: 200px">
            <col style="width: 200px">
            <col style="width: 400px">
            
            </colgroup>
            <tr>
                <th class="tg-s6z2">NO. </th>
                <th class="tg-baqh">NAMA</th>
                <th class="tg-baqh">EMAIL</th>
                <th class="tg-baqh">PESAN</th>
                
            </tr>
            <?php
                $i=1;
                while ( $artikel = mysqli_fetch_array($result2)) :?>
                 <tr>
                    <td class="tg-s6z2"><?= $i ?>
                    </td>
                    
                    <td class="tg-baqh">
                        <?=$artikel["fb_nama"]?>
                     </td>
                     <td class="tg-baqh">
                        <?=$artikel["fb_email"]?>
                     </td>
                     <td class="tg-baqh">
                        <?=$artikel["fb_pesan"]?>
                     </td>
                    
                    
                </tr>
            <?php $i++; endwhile; ?>
            </table>

</div>