<?php get_header(); ?>

<!-- slider -->
<div class="navbar-001 js-show-container">
    <div class="custom-slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">

                <?php $i=0 ?>

                <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                    <?php if (get_field('show_ad_on_main_page')) { ?>

                        <li data-target="#myCarousel" data-slide-to="<?= $i ?>" <?php if ($i==0) { ?> class="active" <?php } ?>>
                            <div class="full-indicator hidden-xs">
                                <img src="<?php the_post_thumbnail_url('preview') ?>" alt="slider<?= $i+1 ?>">
                                <div class="indicator-text hidden-sm">
                                    <span><?php the_field('ad_second_text') ?></span>
                                    <span><?php the_field('ad_text') ?></span>
                                </div> 
                            </div>
                        </li>

                        <?php $i++ ?>    

                    <?php } ?>

                <?php endwhile; endif ?>

            </ol>
                
            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <?php $i=0 ?>

                <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                    <?php if (get_field('show_ad_on_main_page')) { ?>

                        <div class="item <?php if ($i==0) { ?> active <?php } ?>">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3 slider-inner">
                                            <h1 class="fadeInDown animated"><?php the_field('ad_text') ?></h1>
                                            <span class="animated zoomIn"><?php the_field('ad_second_text') ?></span>
                                            <div class="button-group animated bounceInUp">
                                                <a class="btn btn-color text-uppercase" href="<?php the_permalink() ?>">подробнее</a>
                                                <a class="btn btn-outline text-uppercase" href="#">все акции</a>
                                            </div>
                                        </div> 
                                    </div>                                                                 
                                </div>
                            </div>
                            <img class="slider__main-img img-responsive hidden-xs" src="<?php the_post_thumbnail_url('main') ?>" alt="slide<?= $i+1 ?>">
                            <!-- <img src="<?php the_post_thumbnail_url('mobile') ?>" class="img-responsive hidden-sm hidden-md hidden-lg" alt="slide<?= $i+1 ?>"> -->
                            <div style="background-image: linear-gradient(rgba(256,256,256,0.65), rgba(256,256,256,0.65)), url('<?php the_post_thumbnail_url('mobile') ?>')"class="img-responsive hidden-sm hidden-md hidden-lg" alt="slide<?= $i+1 ?>"></div>
                        </div>

                        <?php $i++ ?>    

                    <?php } ?>

                <?php endwhile; endif ?>

            </div>
                
            <!-- Left and right controls -->
            <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>        
</div>

<?php get_footer(); ?>