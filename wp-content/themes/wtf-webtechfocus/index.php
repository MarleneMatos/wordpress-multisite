
 
 <?php
get_header( );

while (have_posts()) {
    the_post(); 
    $image = get_field('thumbnail_image');
    ?>

<section id="page" class="hero-polygon" <?php if (!empty($image)): ?> style="--wtf-bg-image: url('<?php echo esc_url($image['url']); ?>');" <?php endif;  ?>>

<div class="container hero-polygon--content">
        <div class="row d-flex justify-content-center align-items-center text-center">
                <h2 class="h1">Marlene Matos</h2>
                <h3 class="h2"><?php the_title(); ?></h3>
        </div>
</div>
</section>
<?php } ?>

<section id="work" class="section">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-24 col-lg-12 col-md-12">
                            <h3 class="section__title">Title</h3>
                            <h4 class="section__subtitle">Check Out My Work</h4>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">

<?php
while(have_posts()){
    the_post(  ); ?>
     <!-- Portfolio Start -->
     <div class="col-sm-20 col-md-12 col-lg-8 portfolio">
                            <div class="portfolio__bg">
                            <img src="<?php echo get_theme_file_uri( '/assets/img/james-harrison-vpOeXr5wmR4-unsplash.jpg' )?>" alt="Web Tech Focus Portfolio"
                            title="Web Tech Focus Portfolio" class="portfolio__img">
                            <h5 class="portfolio__name"><?php the_title( );?></h5>
    <?php the_content( );?>

    <div class="generic-content"><?php the_excerpt( ); ?></div>
    <div class="author">Posted by <?php the_author_posts_link( ); ?> on <?php the_time('d M Y'); ?> in <?php echo get_the_category_list(', '); ?> </div>

                                <a class="w-100 btn btn-primary text-white" href="<?php the_permalink( ); ?>"
                                >Find out more</a>

                                </div>
                                </div>                       
    <?php
}
?>
<div class="row d-flex justify-content-center">
<?php echo paginate_links( ); ?>
</div>
</section>

<?php
get_footer( );
?>
