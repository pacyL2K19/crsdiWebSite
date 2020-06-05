<div class="sidebar-widget-area">
    <h5 class="title">Image du jour</h5>
    <div class="widget-content">
        <!-- Single Blog Post -->
        <?php
            $dayImg = echoImg();
            foreach ($dayImg as $dayImgEcho) {
                echo " 
        <div class='single-blog-post todays-pick'>
            <!-- Post Thumbnail -->
            <div class='post-thumbnail'>
                <img src='admin/img/dayimg/".$dayImgEcho['image']."' alt=''>
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

        ?>
    </div>
</div>