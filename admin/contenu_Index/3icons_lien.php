<?php
	function afficher_Image(){
		$dayImg = echoImg();
		foreach ($dayImg as $dayImgEcho){
			    echo " 
			<div class='single-blog-post todays-pick'>
			<!-- Post Thumbnail -->
			<div class='post-thumbnail'>
			     <a href='#'> <img src='admin/img/dayimg/".$dayImgEcho['image']."' alt=''> 
			     </a>
			</div>
			<!-- Post Content -->
			<div class='post-content px-0 pb-0'>
			    <a href='#' class='headline'>
			        <h5>".nl2br($dayImgEcho['img_description'])."</h5>
			    </a>
			</div>
			</div>
			";
	    }
	}

?>
<div class="row">

	<div class="col-12 col-md-3 col-lg-3">
		<div class="wow fadeInUpBig" data-wow-delay="0.4s">
			<!-- <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s"> -->
	       		<!--  <div class="sidebar-widget-area">  </div> -->
	            <!--<h5 class="title">Image du jour</h5> -->
	            <div class="widget-content"> 
	            	<!-- <div class='single-blog-post todays-pick'> </div> -->

				            <div  style='text-align: center;' class='post-thumbnail' data-toggle="tooltip" data-placement="bottom" 
				           			title="Recherche Scientifique Appliquée">
						     	<a href='#'> <img src='admin/img/dayimg/main.png' alt=''>  </a>	
						    </div>
				 </div>				
		</div> 
	</div>
	<div class="col-12 col-md-3 col-lg-3">
		<div class="wow fadeInUpBig" data-wow-delay="0.4s">
	        
	            <div class="widget-content">
	            		<div class='post-thumbnail' data-toggle="tooltip" data-placement="bottom" 
			           			title="Génie Conseil et support">
					     	<a href='#'> <img src='admin/img/dayimg/circle.jpg' alt=''>  </a>	
					    </div>
					</div>                                    
	            
	       </div>
		</div>
		<div class="col-12 col-md-3 col-lg-3">
		    <div class="wow fadeInUpBig" data-wow-delay="0.4s">
	            <div class="widget-content"> 
	            	 <div class='post-thumbnail' data-toggle="tooltip" data-placement="bottom" 
			           			title="Recherche et développement">
					     	<a href='#'> <img src='admin/img/dayimg/rech.jpg' alt=''>  </a>	
					    </div>
					     <!-- Post Content -->
						<!-- <div class='post-content px-0 pb-0'>
					    	<a href='#' class='headline'>
					    		<h5>Recherche et développement</h5>
					    	</a>
					    </div> -->
					</div>                               
	            	  <?php // afficher_Image();?>            
	          
	       </div>
		</div>
	<div class="col-12 col-md-3 col-lg-3">
		<div class="wow fadeInUpBig" data-wow-delay="0.4s">
	            <div class="widget-content"> 
	            	 <div class='post-thumbnail' data-toggle="tooltip" data-placement="bottom" 
			           			title="Entreprenariat Scientifique">
					     	<a href='#'> <img src='admin/img/dayimg/globe.jpg' alt=''>  </a>	
					    </div>
					     <!-- Post Content -->
						<!-- <div class='post-content px-0 pb-0'>
					    	<a href='#' class='headline'>
					    		<h5>Entreprenariat Scientifique</h5>
					    	</a>
					    </div> -->
					</div>                               
	            	  <?php // afficher_Image();?>            
	       </div>
		</div>
</div>			