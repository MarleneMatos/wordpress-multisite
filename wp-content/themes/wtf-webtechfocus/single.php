<?php
get_header();

while (have_posts()) {
    the_post(); 
    $image = get_field('thumbnail_image');
    ?>


    <section id="single" class="hero-polygon" <?php if (!empty($image)): ?> style="--wtf-bg-image: url('<?php echo esc_url($image['url']); ?>');" <?php endif;  ?>>

    <div class="container hero-polygon--content">
            <div class="row d-flex justify-content-center align-items-center text-center">
                    <h2 class="h1">Marlene Matos</h2>
                    <h3 class="h2"><?php the_title(); ?></h3>
            </div>
    </div>
</section>
<?php
} ?>



<section class="container">
    <div class="row d-flex justify-content-center">
        <?php the_content(); ?>
<!--
        <div class="generic-content"><?php // the_excerpt(); ?></div>
-->

    </div>
</section>

<?php
get_footer();
?>