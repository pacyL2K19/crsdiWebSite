
          <?php
            function AfficherBouttonPaginer($depart, $lien,$pAvant,$pSuivante){ // précédente
                $lien = $lien.'?departement='.$depart;
              $p_Prev = $pAvant;
              $p_Next = $pSuivante;
              echo'<div class=" pagination_div" style="text-align: center;">';
                echo "<form action='$lien' method='POST' style='display:inline;margin:5px'>";
                    echo "<input style='display:none;' name='pageAvant' value='$pAvant'/>";
                    echo "<button type='submit' class='btn world-btn' title='Cliquer ici pour aller à la page $pAvant'>
                                <span aria-hidden='true'>&laquo;</span>
                                <span class='badge badge-light'>$pAvant</span>
                        </button>"; 
                echo '</form>';                                  
                echo "<form action='$lien' method='POST' style='display:inline;margin:5px'>";
                  echo "<input style='display:none;' name='pageSuivante' value='$pSuivante'/>";
                  echo "<button type='submit' class='btn world-btn'  title='Cliquer ici pour aller à la page $pSuivante'>
                                <span aria-hidden='true'>&raquo;</span>
                                <span class='badge badge-light'>$pSuivante</span>
                        </button>";                
                echo '</form>';
              echo'</div>';
           }
        ?>