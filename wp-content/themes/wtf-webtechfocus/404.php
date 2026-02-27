<?php
get_header();
 ?>

<section id="archive" class="hero-polygon"  style="--wtf-bg-image: url('<?php echo get_theme_file_uri('assets/media/james-harrison-vpOeXr5wmR4-unsplash.jpg') ?>');">
    <?php if (wp_kses_post(get_field('background_video')) == True) { ?>
        <div class="bg-video">
            <video autoplay muted loop>
                <source src="<?php get_theme_file_uri('assets/media/coverr-coding-on-a-laptop-2116-1080p.mp4'); ?>" type="video/mp4">
                <source src="<?php get_theme_file_uri('assets/media/coverr-coding-on-a-laptop-2116-1080p.webm'); ?>" type="video/webm">
                Your browser is not supported!
            </video>
        </div>
    <?php } ?>

    <div class="container hero-polygon--content">
            <div class="row d-flex justify-content-center align-items-center text-center">
                
                    <h2 class="h1">Page not found</h2>

               
            </div>
            <div class="col py-5">
                    <a href="/" class="btn btn-primary iconic">
                        <p class="h3 m-0 p-0">Go to homepage</p>
                    </a>
                </div>
       
    </div>
</section>




<section id="404">
<div class="container">

    <div class="row d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-8 error">
                <p class="text-primary" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:10rem;">4</p>
            </div>
            <div class="col-8 error">
                <svg style="width: -webkit-fill-available; fill: var(--wtf-primary);">
                    <!-- <use xlink:href="assets/icons/icomoon-entypoPlus/sprite.svg#icon-emoji-flirt"></use> -->
                    <use xlink:href="<?php echo get_theme_file_uri('/assets/icons/icomoon-entypoPlus/sprite.svg#icon-emoji-sad') ?>"></use>
                </svg>
            </div>
            <div class="col-8 error">
                <p class="text-primary" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:10rem;">4</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center text-center py-5">
            <h4>Ohh Noo... Page not found</h4>
            <p>Please verify url or go to the home page!</p>
        </div>
    </div>
    </div>

</section>

<?php
get_footer();
?>