<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <!-- <div class="widget">
                        <h2 class="widget-title">Search</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search on the site">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="widget">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_09.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_06.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/garden_sq_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <h2 class="widget-title">Advertising</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri() ?>/upload/banner_04.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <h2 class="widget-title">Instagram Feed</h2>
                        <div class="instagram-wrapper clearfix">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="#">Gardening <span>(21)</span></a></li>
                                <li><a href="#">Outdoor Living <span>(15)</span></a></li>
                                <li><a href="#">Indoor Living <span>(31)</span></a></li>
                                <li><a href="#">Shopping Guides <span>(22)</span></a></li>
                                <li><a href="#">Pool Design <span>(66)</span></a></li>
                            </ul>
                        </div>
                    </div> -->

        <?php if (is_active_sidebar('sidebar-1')) { ?>
            
                <?php dynamic_sidebar('sidebar-1'); ?>
            
        <?php } ?>

    </div><!-- end sidebar -->
</div><!-- end col -->