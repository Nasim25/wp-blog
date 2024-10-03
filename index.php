<?php get_header() ?>

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <?php get_template_part('template-parts/template', 'blogs') ?>
            </div>

            <?php get_sidebar() ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php get_footer() ?>
