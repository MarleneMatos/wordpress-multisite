<?php
get_header();

while (have_posts()) {
    the_post(); ?>

    <header class="banner-polygon">
        <div class="banner-polygon__text-box">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-12">
                    <nav style="--wtf-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/events') ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="author">Posted by <?php the_author_posts_link(); ?> on <?php the_time('d M Y'); ?> in <?php echo get_the_category_list(', '); ?> </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-24 banner-polygon__title">
                    <img src="<?php echo get_theme_file_uri('/assets/logos/mm-logo.svg') ?>" alt="Marlene Matos logo"
                        class="header__logo d-flex justify-content-center align-items-center">
                    <h2 class="banner-polygon__title--main">Marlene Matos</h2>
                    <h3 class="banner-polygon__title--sub"><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </header>
<?php
} ?>



<section class="container">
    <div class="row d-flex justify-content-center">
        <?php the_content(); ?>

        <div class="generic-content"><?php the_excerpt(); ?></div>
        
    </div>
</section>

<?php
get_footer();
?>