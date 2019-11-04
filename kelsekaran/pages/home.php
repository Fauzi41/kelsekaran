<?php
	include('fungsi/tampil_galeri.php');
	include('fungsi/tampil_berita.php');
?>


<!--	JUMBOTRON dan CAROUSEL-->
<div class="jthp">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
			<div style="height: 10px; background-color: #2185B5; -webkit-box-shadow: 0px 16px 65px 0px #2CB7E1; box-shadow: 0px 16px 65px 0px #2CB7E1; opacity: 0.8; margin-top: 50px;"></div>
			<div class="brdr">
				<img src="img/slides/1.jpg" alt="">
			</div>
			<div style="height: 10px; background-color: #2185B5; -webkit-box-shadow: 0px -6px 65px 0px #2CB7E1; box-shadow: 0px -6px 65px 0px #2CB7E1; opacity: 0.8; margin-top: -10px;"></div>
		</div>
	</div>
	</div>
</div>
<div class="row borderbiru">
    <div class="col-lg-12 borderbiru">
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/1.jpg)">
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/2.jpg)">
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/3.jpg)">
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </section>	
    </div>    	
    </div><!--/#main-slider-->
<!--AKHIR JUMBOTRON-->
	
<!-- INFOGRAFI	-->
<div class="info">
		<div class="row">
	<div>
		<p style="background-color: #00bff3; -webkit-box-shadow: 0px -15px 32px; box-shadow: 0px -15px 32px;">                     a         </p>
	</div>
		<div class="col-sm-12 text-center">
			<h3>INFOGRAFIS DEMOGRAFIS</h3>
			<h4>KELURAHAN SEKARAN</h4>
	  </div>
	  <div class="col-sm-2 col-sm-offset-2 text-center">
			<h5>JUMLAH PENDUDUK</h5>
			<a class="btn jp" href="?profil">
			<img src="img/circle.png" alt="">
			<p>3915</p>
			</a>
	  </div>
	  <div class="col-sm-4 text-center">
			<h5>LUAS WILAYAH</h5>
		<a class="btn jpt" href="?profil">
				<img src="img/circle.png" alt="">
				<p>490,72ha</p>
			</a>
	  </div>
	  <div class="col-sm-2 text-center">
		<h5>JUMLAH KELEMBAGAAN</h5>
		<a class="btn jp" href="?profil">
				<img src="img/circle.png" alt="">
				<p style="margin-right:5px;">4</p>
			</a>
	  </div>
	</div>
<!--
	<div class="row">
	<br>
		<p style="background-color: #00bff3">                   a    </p>
	</div>
-->
</div>
<!--AKHIR INFOGRAFI-->

<hr>

<!--BERITA-->
	<div class="row">
	  <div class="col-sm-12 col-md-9 thumb_berita">
			<div class="container">
				<div class="section-breadcrumbs">
					<h1>BERITA</h1>
					<p class = "garis"></p>
				</div>
			</div>
			<ul>
				
			<?php 
					$i=0;
					while ($i<6 && $artikel = mysqli_fetch_assoc($result)) :?>
				<li>
					<div class="thumbnail">
						<img src="img/berita/<?=$artikel["gambar"]; ?>" alt="" class="center-block img-responsive tag">
						<div class="caption">
							<h3 style = "font-size:16px; font-weight:bold;"><?= $artikel["judul"];?></h3>
							<p>
								<?= substr($artikel["isi"], 0, 150); echo"............"; ?>
							</p>
							<p><a href="?berita" class="btn btn-primary" role="button">Selengkapnya</a>
						</div>
					</div>
				</li>

			<?php 
						$i++;
						endwhile; ?>
				
				
				
			</ul>
</div>	
		
	  
	  <div class="col-sm-6 col-md-3 panelsemarang">
			<ul>
				<li>
						<div class="container">
						<div class="section-breadcrumbs">
							<h1>SEPUTAR SEMARANG</h1>
							<p class="garis"></p>
						</div>
					</div>
							<div class="panel panel-default textpanel">
									<div class="panel-heading">
										<i class="fa fa-external-link-square"></i>
										Berita Kota Semarang
											<div class="panel-tools">
												<a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>
											</div>
									</div>
										<div class="panel-body">
											<iframe src="http://smartcity.semarangkota.go.id/public/rssberita/index.php" height="300px" width='100%' scrolling="yes" frameborder="0"></iframe>
										</div>
							</div>
				</li>
				<li>
						<div class="container">
						<div class="section-breadcrumbs">
							<h1>JADWAL KEGIATAN</h1>
							<p class="garis"></p>
						</div>
					</div>
							<div class="panel panel-default textpanel">
									<div class="panel-heading">
										<i class="fa fa-external-link-square"></i>
										Jadwal Kegiatan Semarang
											<div class="panel-tools">
												<a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>
											</div>
									</div>
										<div class="panel-body">
											<iframe src="http://webservice.infokegiatan.semarangkota.go.id/data.php" height="350px" width='100%' scrolling="yes" frameborder="0"></iframe>
										</div>
							</div>
				</li>

			</ul>
		</div>
	<div class="row">
		<div class="col-sm-3"></div>
			<div class="col-md-2 col-sm-12">
				<a href="?berita" class="btn center-block more">
				<p>Read More</p>
				</a>
			</div>
		</div>
	</div>

	<hr>
		<!-- Galeri -->	
		<div class="row"></div>
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
							<div class="section-title section-breadcrumbs text-center ">
								<h1>GALLERY</h1>
								<p class="garis center-block"></p>
							</div>
								<div style="margin-top: -30px">
									<ul class="grid deskripsi">
									<?php 
								
											$i=0;
											while ($i<6 && $foto = mysqli_fetch_assoc($result2)) :?>
																<div class="col-md-4 col-sm-6">
																	<figure class ="thumbfigure">
																		<img src="img/gallery/<?=$foto["g_gambar"]?>" alt="" class = "center-block">
																		<figcaption>
																			
																			<span><?=$foto["g_deskripsi"] ?></span>
																			<a href="?galeri">Go To Gallery</a>
																		</figcaption>
																	</figure>
																</div>	
											<?php 
												$i++;
												endwhile; ?>
									</ul>
									
								</div>
	        	</div>
	        </div>
	    </div>
		<!-- akhir Galeri -->

	    