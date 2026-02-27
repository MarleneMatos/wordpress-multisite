<?php
get_header();
?>

<section id="archive" class="hero-polygon" style="--wtf-bg-image: url('<?php echo get_theme_file_uri('assets/media/james-harrison-vpOeXr5wmR4-unsplash.jpg') ?>');">
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

            <h2 class="h1">Archive</h2>


        </div>


        <?php if (!wp_kses_post(get_field('hero_button_1')) == null and !wp_kses_post(get_field('hero_button_2')) == null) { ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-sm-24 col-md-10">
                    <a href="<?php echo wp_kses_post(the_field('hero_button_1')) ?>" class="btn btn-primary iconic">
                        <p class="h3 m-0 p-0"><?php echo wp_kses_post(the_field('hero_button_1_text')) ?></p>
                    </a>
                </div>
                <div class="col-sm-24 col-md-10">
                    <a href="<?php echo wp_kses_post(the_field('hero_button_2')) ?>"
                        class="btn btn-primary iconic">
                        <p class="h3 m-0 p-0"><?php echo wp_kses_post(the_field('hero_button_2_text')) ?></p>
                    </a>
                </div>
            </div>
        <?php } ?>
        <?php if (!wp_kses_post(get_field('hero_button_1')) == null and wp_kses_post(get_field('hero_button_2')) == null) { ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-sm-24 col-md-12">
                    <a href="<?php echo wp_kses_post(the_field('hero_button_1')) ?>" class="btn btn-primary iconic">
                        <p class="h3 m-0 p-0"><?php echo wp_kses_post(the_field('hero_button_1_text')) ?></p>
                    </a>
                </div>
            </div>
        <?php } ?>

        <h1 class="text-primary"><?php if (is_category()) {
                                        echo "Category name will go here";
                                    }
                                    if (is_author()) {
                                        echo "Me";
                                    } ?></h1>
    </div>
</section>


<section id="work" class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
                <h3 class="i-h">Title</h3>
        </div>
        <div class="row d-flex justify-content-center">

            <?php
            while (have_posts()) {
                the_post(); ?>

                <div class="col-sm-20 col-md-12 col-lg-2 my-2">
                    <div class="card">
                         <?php
                        if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['title']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top">
<?php endif;  ?>
                         <?php
                        if (!wp_kses_post(get_field('icon')) == null and !wp_kses_post(get_field('icon_name')) == null) {
                            //SVG Icon | Icomoon Free
                            $icomoonPackage = wp_kses_post(get_field('icon'));
                            $icomoonIconName = wp_kses_post(get_field('icon_name'));
                            $icomoonURLStart = get_theme_file_uri('/assets/icons/');
                            $icomoonURLSprite = '/sprite.svg#';
                        ?>
                            <svg>
                                <use xlink:href="<?php echo $icomoonURLStart ?><?php echo $icomoonPackage ?><?php echo $icomoonURLSprite ?><?php echo $icomoonIconName ?>"></use>
                            </svg>

                        <?php } ?>
                        <?php if (!wp_kses_post(get_field('custom_icon')) == null and wp_kses_post(get_field('icon_name')) == null) {
                            $skillsCustomIconURLStart = get_theme_file_uri('/assets');
                        ?>

                            <img src="<?php echo $skillsCustomIconURLStart ?><?php echo wp_kses_post(get_field('custom_icon')) ?>" alt="">

                        <?php } ?>
                        <?php if (wp_kses_post(get_field('icon_name')) == null and wp_kses_post(get_field('custom_icon')) == null) { ?>
                            <svg>
                                <use xlink:href="<?php echo get_theme_file_uri('/assets/icons/icomoon-elegant-line/sprite.svg#icon-puzzle') ?>"></use>
                            </svg>

                        <?php } ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a class="w-100 btn btn-primary" href="<?php the_permalink(); ?>">Find out more</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="row d-flex justify-content-center">
                <?php echo paginate_links(); ?>
            </div>
        </div>
        </div>
</section>

<?php
get_footer();
?>