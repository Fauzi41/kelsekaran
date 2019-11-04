<?php
	include('fungsi/tampil_galeri.php');
?>

<section>
    <div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id = "fotogaleri">
                    <?php 
                        $i=0;
                        $total = mysqli_query($conn,"SELECT * FROM galeri");
                        $jml = mysqli_num_rows($total);
                            $perpage = 7;
                            $jmlpage = ceil($jml/$perpage);
                            
                                if(isset($_GET["page"])){
                                    $pageactive = $_GET["page"];
                                }else{
                                    $pageactive = 1;
                                }
                            $awal = (($perpage*$pageactive)-$perpage);
                    
                        $query = "SELECT * FROM galeri ORDER BY g_id DESC LIMIT $awal,$perpage";
                        $result2 = mysqli_query($conn,$query);

                        while ($foto = mysqli_fetch_array($result2)) :?>
                        <?php if($i<2){ ?>                    
                            <li style="background-image: url(img/gallery/<?=$foto["g_gambar"]?>);" class = "tag uk2">
                                <div>
                                    <figcaption>
                                        <h3>
                                            <?=$foto["g_deskripsi"];?>
                                        </h3>
                                        
                                    </figcaption>
                                </div>
                            </li>
                        <?php }elseif ($i==2) { ?>  
                            <li style="background-image: url(img/gallery/<?=$foto["g_gambar"]?>);" class = "tag uk3">
                            <div>
                                <figcaption>
                                    <h3>
                                        <?=$foto["g_deskripsi"];?>
                                    </h3>
                                    
                                </figcaption>
                            </div>
                        </li>
                        <?php }elseif ($i==3) { ?> 
                            <li style="background-image: url(img/gallery/<?=$foto["g_gambar"]?>);" class = "tag uk3a">
                            <div>
                                <figcaption>
                                    <h3>
                                        <?=$foto["g_deskripsi"];?>
                                    </h3>
                                    
                                </figcaption>
                            </div>
                            </li>
                        <?php }else { ?>
                            <li style="background-image: url(img/gallery/<?=$foto["g_gambar"]?>);" class = "tag uk1">
                                <div>
                                    <figcaption>
                                        <h3>
                                            <?=$foto["g_deskripsi"];?>
                                        </h3>
                                        
                                    </figcaption>
                                </div>
                            </li>
                        <?php }?>
                        
                        <?php 
						$i++;
						endwhile; ?>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
							<!-- Pagination -->
                            <div class="container">
	<div class="row">
		<div class="col-sm-12">
		<div class="pagination-wrapper ">
			<ul class="pagination pagination-sm">
				<li><a href="">Page ></a></li>
<?php	for($i=1;$i<=$jmlpage;$i++) : ?>
				<li><a href="?galeri&page=<?=$i?>"><?=$i ?></a></li>
<?php endfor; ?>
			</ul>
		</div>		
		</div>
	</div>
</div>		



</section>