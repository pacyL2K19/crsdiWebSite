<head>
	<link rel="stylesheet" href="swiper.min.css">
	<link rel="stylesheet" href="styleFichierSwiper.css">
</head>
<!-- <body> -->
<div class="divSwip">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php
            $imagesLABO = getLaboImg();
            foreach ($imagesLABO as $imageLab) {
                    $background = $imageLab['image'];
                    // admin/img/laboimg/
                    // echo $imageLab['description'].'<br />';
            ?>

<div class="swiper-slide">          
                <div class="card3D">
                    <div class="sliderText" 
                    style="background:url('admin/img/laboimg/<?=$background;?>') repeat;"
                    data-toggle="tooltip" data-placement="bottom"
            title="Swiper pour défiler les images du laboratoire">
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

			<!-- Debut -->

			<!-- <div class="swiper-slide">          
				<div class="card3D">
					<div class="sliderText">
						<h3>Slide deux</h3>
					</div>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris laborum.</p>
						<a href="#">Read more</a>
					</div>
				</div>
			</div> 
 -->
		<?php
	}
		?>
			<!-- Fint  -->
			
			<!-- php  ici -->


		</div>
	</div>

<script src="js/swiper.min.js"></script>
<script>
	var swiper = new Swiper('.swiper-container',{
		effect:'coverflow',
		grabCursor:true,
		centeredSlides:true,
		slidesPerView:'auto',
		coverflowEffect:{
			// rotate:30,
			// stretch:10,
			// depth:900,
			// modifier:5,
			// slideShadows:true,
			rotate:30,
			stretch:300,
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