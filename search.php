<?php
get_header();
?>


<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <?php
                $s = get_search_query();
                $args = array(
                    's' => $s,
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->have_posts();
                        get_template_part('template-parts/template', 'blogs');
                    }
                    wp_reset_postdata();
                } else {
                ?>
                    <h4>No Product founnd</h4>';
                <?php
                } ?>
            </div>

            <?php get_sidebar() ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php get_footer() ?>