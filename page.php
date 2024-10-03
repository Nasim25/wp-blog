<?php get_header() ?>

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <h2><?php the_title() ?></h2>
                    <?php the_content() ?>
                </div>
                <hr class="invis">
            </div>

            <?php get_sidebar() ?>
        </div>
    </div>
</section>

<?php get_footer() ?>