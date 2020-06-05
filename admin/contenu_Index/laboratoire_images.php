
	   <?php //include('partie_head.php');
          // require('../../navbar.php');
    //require('function.php');

    $resultat = getLaboImg();
     ?>
       
      <!-- =========================================
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6"></div> -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>   <!--  -->
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <?php
        $comp =0;
        foreach ($resultat as $result) {
          if($comp ==0){echo'<div class="carousel-item active">';}
          else{echo'<div class="carousel-item">';}
          $comp++;
          echo'<img src="'.$result["image"].'" class="d-block w-100" alt="...">';
          echo'<div class="carousel-caption d-none d-md-block">';
          echo' <h5>'.$result["title"].'</h5>';
          echo' <p>'.$result["description"].'</p>';
          echo '</div>
              </div>';

        }
          ?>
 <!-- 
    <div class="carousel-item">
      <img src="moi3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> 
      </div> </div>-->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>                    

       <!-- 
       <script src="js/jquery.js"></script>
       <script src="js/js_bootstrap/bootstrap.min.js"></script>
        <script src="js/fichier_js.js"></script> -->
