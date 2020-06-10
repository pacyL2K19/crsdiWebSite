<?php

if (isset($_GET['page']) /*&& !empty($_GET['page'])*/) {
    $page = $_GET['page'];

    if ($page == "newpost") {
        require('newarticle.php');
    }

    elseif ($page == "editpost") {
        require('editarticle.php');
    }

    elseif ($page == "delpost") {
      require('deletearticle.php');
    }

    elseif ($page == "delcomment") {
        require('deletecomment.php');
    }
    elseif ($page == "newimg") {
        require('newimage.php');
    }
    elseif ($page == "newtopic") {
        require('newtopic.php');
    }
    elseif ($page == "newproject") {
        require('newproject.php');
    }
    elseif ($page == "labo") {
        require('labo.php');
    }
    elseif($page == "newactivity"){
        require('newactivite.php');
    }
    elseif ($page == "deleteactivity") {
      require('deleteactivity.php');
    }

}

else{
    require('access.php');
}
?>
        