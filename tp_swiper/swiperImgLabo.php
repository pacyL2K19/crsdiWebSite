
<div class="divSwip">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<!-- Debut -->
			<?php
			$imagesLABO = getLaboImg();

			foreach ($imagesLABO as $imageLab) {
					$background = $imageLab['image'];
			?>
			<div class="swiper-slide" style="background:url('admin/img/laboimg/<?=$background;?>');">          
				<div class="card3D">
					<div class="sliderText">
						<h3><?=$imageLab['title']?></h3>
					</div>
					<div class="content">
						<p><?=$imageLab['description']?>
							 <span><?=$imageLab['date_post']?></span>
						</p>
						<a href="enCours.php">Savoir Plus</a>
					</div>
				</div>
			</div> 
			<!-- Fint  -->
			<?php
		}
			?>

		</div>
	</div>

<!-- <script src="monFichierSwiper.js"></script> -->
<script>
	var swiper = new Swiper('.swiper-container',{
		effect:'coverflow',
		grabCursor:true,
		centeredSlides:true,
		slidesPerView:'auto',
		coverflowEffect:{
			rotate:30,
			stretch:10,
			depth:900,
			modifier:5,
			slideShadows:true,
		},
		pagination:{
			el:'.swiper-pagination',
		},
	});
</script>
</div>