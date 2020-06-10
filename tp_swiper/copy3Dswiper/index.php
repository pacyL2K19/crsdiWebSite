<!doctype html>
<html>
<head>
	<meta chartset="utf-8" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="swiper.min.css">
	<title> 3D Touch Swipe Slider </title>
</head>
<body>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<!-- Debut -->
			<div class="swiper-slide">          
				<div class="card3D">
					<div class="sliderText">
						<h3>Slide un</h3>
					</div>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris laborum.</p>
						<a href="#">Read more</a>
					</div>
				</div>
			</div> 
			<!-- Fint  -->
			<!-- Debut -->
			<div class="swiper-slide">          
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
			<!-- Fint  -->
			<!-- Debut -->
			<div class="swiper-slide">          
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
			<!-- Fint  -->
		</div>
	</div>
<script src="swiper.min.js"></script>
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
</body>
</html>