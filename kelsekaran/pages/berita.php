

<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        <h1>BERITA SEMARANG</h1>
                        <p class="garis"></p>
					</div>
				</div>
            </div>
        
</div>
<div class="section">
	    	<div class="container">
				<div class="row">

<?php 
	
	$total = mysqli_query($conn,"SELECT * FROM berita");
	$jml = mysqli_num_rows($total);
		$perpage = 4;
		$jmlpage = ceil($jml/$perpage);
		
			if(isset($_GET["page"])){
				$pageactive = $_GET["page"];
			}else{
				$pageactive = 1;
			}
		$awal = (($perpage*$pageactive)-$perpage);

	$query = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT $awal,$perpage";
	$result = mysqli_query($conn,$query);
	
					while ($artikel = mysqli_fetch_array($result)) :?>
						<!-- Blog Post Excerpt -->
						<div class="col-sm-6">
							<div class="blog-post blog-single-post">
								<div class="single-post-title">
									<h2><?= $artikel["judul"];?></h2>
								</div>

								<div class="single-post-image">
									<img src="img/berita/<?=$artikel["gambar"]; ?>" alt="Post Title" class =" center-block img-responsive">
								</div>
								
								<!-- <div class="single-post-info">
									<i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
								</div> -->
								
								<div class="single-post-content">
									<p>
										<?= substr($artikel["isi"], 0, 150); echo"............"; ?>
										<a href="?artikel&id=<?=$artikel["id_berita"]?>" class="btn">Read more</a>
									</p>
								
								</div>
							</div>
						</div>
						<!-- End Blog Post Excerpt -->
					<?php 
						endwhile; ?>
				
							<!-- Pagination -->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<div class="pagination-wrapper ">
			<ul class="pagination pagination-sm">
				<li><a href="">Page ></a></li>
<?php	for($i=1;$i<=$jmlpage;$i++) : ?>
				<li><a href="?berita&page=<?=$i?>"><?=$i ?></a></li>
<?php endfor; ?>
			</ul>
		</div>		
		</div>
	</div>
</div>		

				</div>
			</div>
	    </div>
        