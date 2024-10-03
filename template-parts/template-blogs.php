<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <div class="page-wrapper">
            <div class="blog-list clearfix">
                <div class="blog-box row">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="garden-single.html" title="">

                                <?php the_post_thumbnail('', [
                                    'class' => 'img-fluid',
                                ]) ?>
                                <div class="hovereffect"></div>
                            </a>
                        </div>
                    </div>

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a></h4>

                        <?php the_excerpt() ?>

                        <small><a href="garden-category.html" title=""><i class="fa fa-eye"></i> 1887</a></small>
                        <small><a href="garden-single.html" title=""><?php the_date() ?></a></small>
                        <small><a href="#" title="">by <?php the_author_posts_link() ?></a></small>
                        <?php the_category() ?>
                    </div>
                </div>

                <hr class="invis">

            </div>
        </div>

        <hr class="invis">

        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-start">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
<?
    }
}
?>