<?php

use Soap\Url;

get_header();
$homepageSkills = new WP_Query(array(
    'post_type' => 'skill',
    'posts_per_page' => -1
));
$homepageBenefits = new WP_Query(array(
    'post_type' => 'benefit'
));
$homepagePortfolio = new WP_Query(array(
    'post_type' => 'portfolio',
    'posts_per_page' => 3
));

?>


<section id="home" class="<?php echo wp_kses_post(the_field('hero_style')) ?>" <?php if (!wp_kses_post(get_field('background_image')) == null) { ?> style="--wtf-bg-image: url('<?php echo get_theme_file_uri('assets/media/james-harrison-vpOeXr5wmR4-unsplash.jpg')// echo wp_kses_post(the_field('background_image')) ?>');" <?php } ?>>
    <?php if (wp_kses_post(get_field('background_video')) == True) { ?>
        <div class="bg-video">
            <video autoplay muted loop>
                <source src="<?php get_theme_file_uri('assets/media/coverr-coding-on-a-laptop-2116-1080p.mp4'); ?>" type="video/mp4">
                <source src="<?php get_theme_file_uri('assets/media/coverr-coding-on-a-laptop-2116-1080p.webm'); ?>" type="video/webm">
                Your browser is not supported!
            </video>
        </div>
    <?php } ?>

    <div class="container <?php echo wp_kses_post(the_field('hero_style')) ?>--content">
        <?php if (!wp_kses_post(get_field('hero_title')) == null || !wp_kses_post(get_field('hero_subtitle')) == null) { ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <?php if (!wp_kses_post(get_field('hero_title')) == null) { ?>
                    <h2 class="h1"><?php echo wp_kses_post(the_field('hero_title')) ?></h2>
                <?php } ?>
                <?php if (!wp_kses_post(get_field('hero_subtitle')) == null) { ?>
                    <h3 class="h2"><?php echo wp_kses_post(the_field('hero_subtitle')) ?></h3>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (!wp_kses_post(get_field('hero_button_1')) == null and !wp_kses_post(get_field('hero_button_2')) == null) { ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-sm-24 col-md-10 py-2">
                    <a href="<?php echo wp_kses_post(the_field('hero_button_1')) ?>" class="btn btn-primary iconic">
                        <p class="h3 m-0 p-0"><?php echo wp_kses_post(the_field('hero_button_1_text')) ?></p>
                    </a>
                </div>
                <div class="col-sm-24 col-md-10 py-2">
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
    </div>
</section>

<?php if (!wp_kses_post(get_field('about_text')) == null) { ?>
    <section id="about" class="py-5">
        <div class="container">

            <?php if (wp_kses_post(get_field('about_title')) == null) { ?>
                <div class="row d-flex justify-content-center align-items-center text-center">
                    <h3 class="lg-h h1">Hi! Looking for a Web Developer?</h3>
                </div>
            <?php } ?>
            <?php if (!wp_kses_post(get_field('about_title')) == null || !wp_kses_post(get_field('about_subtitle')) == null) {  ?>
                <div class="row d-flex justify-content-center align-items-center text-center">
                    <?php if (!wp_kses_post(get_field('about_title')) == null) { ?>
                        <h3 class="lg-h h1"><?php echo wp_kses_post(get_field('about_title')); ?></h3>
                    <?php } ?>
                    <?php if (!wp_kses_post(get_field('about_subtitle')) == null) { ?>
                        <h4 class="text-center py-2"><?php echo wp_kses_post(get_field('about_subtitle')); ?></h4>
                    <?php } ?>
                </div>
            <?php } ?>



            <?php if (!wp_kses_post(get_field('about_text')) == null) { ?>
                <div class="row d-flex justify-content-center align-items-center text-center py-5">
                    <?php echo wp_kses_post(get_field('about_text')); ?>
                </div>
            <?php } ?>




            <div class="row d-flex justify-content-center text-center">
                <div class="col-sm-24 col-lg-24 col-md-24">
                    <a href="#contact" class="btn btn-primary iconic text-white">
                        <p class="h5 m-0 p-0">Contact me today</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>




<?php if ($homepagePortfolio->have_posts() != null) { ?>
    <section id="portfolio" class="bg-primary-emphasis bg-skew">
        <div class="container-fluid">


            <?php if (wp_kses_post(get_field('portfolio_title')) == null) { ?>
                <div class="row d-flex justify-content-center align-items-center text-center py-5">
                    <h3 class="i-h">Portfolio</h3>
                </div>
            <?php } ?>
            <?php if (!wp_kses_post(get_field('portfolio_title')) == null || !wp_kses_post(get_field('portfolio_subtitle')) == null) {  ?>
                <div class="row d-flex justify-content-center align-items-center text-center my-5">
                    <?php if (!wp_kses_post(get_field('portfolio_title')) == null) { ?>
                        <h3 class="h1 i-h"><?php echo wp_kses_post(get_field('portfolio_title')); ?></h3>
                    <?php } ?>
                    <?php if (!wp_kses_post(get_field('portfolio_subtitle')) == null) { ?>
                        <h4 class="h2"><?php echo wp_kses_post(get_field('portfolio_subtitle')); ?></h4>
                    <?php } ?>
                </div>
            <?php } ?>


            <div class="container col-24 px-4 my-5 border-bottom">
                        <div class="row flex-lg-row-reverse justify-content-center align-items-center text-center g-5 my-5">
                            <div class="col-20 col-sm-16 col-lg-12">
                            <img src="<?php echo get_theme_file_uri('assets/media/wtf-site.png') ?>" class="d-block mx-lg-auto img-fluid rounded-3" alt="Example image" width="700" height="500" loading="lazy">
                                <!--<img src="assets/media/bootstrap-docs.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
                            </div>
                            <div class="col-lg-12">
                            <h3 class="h1 display-4 fw-bold text-body-emphasis">web tech focus <span class="badge text-bg-primary">New</span></h3>
                            <p class="lead">Proud to unveil my latest project — <strong>web tech focus</strong>.</p>

<p class="lead">At <strong>Web Tech Focus</strong>, we specialize in crafting <strong>smart, tailored digital solutions</strong> for businesses and entrepreneurs. From custom websites and web apps to full-scale digital strategies, this project reflects over a decade of experience and a deep passion for helping clients thrive online.</p>

 <div class="d-grid gap-2 d-flex justify-content-center">
                                <a href="https://www.webtechfocus.com/?utm_source=marlenematos_com&utm_medium=website&utm_campaign=wtf-site" class="btn btn-primary btn-lg me-sm-3 my-2">wtf site</a>
                               <!-- <a href="https://theme.webtechfocus.com/?utm_source=marlenematos_com&utm_medium=website&utm_campaign=wtf-theme" class="btn btn-outline-primary btn-lg my-2">wtf theme</a> -->
                                </div>
                            </div>
                        </div>
                    </div>



            <div class="d-flex justify-content-center">
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-0">
                    <?php

                    while ($homepagePortfolio->have_posts()) {
                        $homepagePortfolio->the_post();


                    ?>
                        <div class="col wtf-gallery py-5">
                            <?php
                            $image = get_field('thumbnail_image');
                            if (!empty($image)): ?>
                                <img class="wtf-gallery--img" src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['title']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif;  ?>
                            <div class="wtf-gallery--btn">
                                <a href="<?php the_permalink(); ?>" class="btn btn-iconic">
                                    <svg>
                                        <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-eye-plus') ?>"></use>
                                    </svg>
                                </a>
                                <?php if (!wp_kses_post(get_field('demo_url')) == null) { ?>
                                    <a href="<?php echo wp_kses_post(get_field('demo_url')); ?>" class="btn btn-iconic">
                                        <svg>
                                            <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-link') ?>"></use>
                                        </svg>
                                    </a>
                                <?php } ?>
                            </div>
                            <span class="wtf-gallery--h h3"><?php the_title(); ?></span>
                        </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <div class="container pt-5">

            <?php if (!wp_kses_post(get_field('portfolio_text')) == null) { ?>
                <div class="row d-flex justify-content-center align-items-center text-center">

                    <?php echo wp_kses_post(get_field('portfolio_text')); ?>
                </div>

            <?php } ?>
            <div class="row d-flex justify-content-center text-center py-5">
                <p class="p--i text-center">Let’s create something amazing together!</p>
            </div>
            <!--
            <div class="row d-flex justify-content-center text-center pb-5">
                <div class="col">
                    <a href="<?php //echo site_url('/project') ?>" class="btn btn-primary iconic">
                        <p class="h5 m-0 p-0">Check out all portfolio</p>
                    </a>
                </div>
            </div>-->
        </div>

    </section>
<?php } ?>

<?php if ($homepageBenefits->have_posts() != null) { ?>

<section id="benefits" class="bg-primary-subtle bg-skew">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-24 col-lg-12 col-md-12">
                            <h3 class="i-h">Benefits</h3>
                            <h4 class="text-center py-2">Why Hire Me</h4>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center">
                    <?php while ($homepageBenefits->have_posts()) {$homepageBenefits->the_post(); ?>
                    <div class="col-24 col-md-12 col-lg-6 feature-icon--fw py-2">
                        <?php
                        if (!wp_kses_post(get_field('icon')) == null and !wp_kses_post(get_field('icon_name')) == null) {
                            //SVG Icon | Icomoon Free
                            $skillsIcomoonPackage = wp_kses_post(get_field('icon'));
                            $skillsIcomoonIconName = wp_kses_post(get_field('icon_name'));
                            $skillsIcomoonURLStart = get_theme_file_uri('/assets/icons/');
                            $skillsIcomoonURLSprite = '/sprite.svg#';
                        ?>
                            <svg>
                                <use xlink:href="<?php echo $skillsIcomoonURLStart ?><?php echo $skillsIcomoonPackage ?><?php echo $skillsIcomoonURLSprite ?><?php echo $skillsIcomoonIconName ?>"></use>
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

                        <h5 class="caps"><?php the_title(); ?></h5>
                        <p><?php echo get_the_content(); ?></p>
                        <!-- <a class="w-100 btn btn-primary text-white" href="<?php //the_permalink(); 
                                                                                ?>">Find out more</a> -->
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>


                    <div class="row d-flex justify-content-center text-center pt-5">
                        <div class="col-sm-24 col-lg-24 col-md-24">
                            <p class="p--i">Let’s bring your vision to life with a unique blend of these qualities!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>






            <?php if ($homepageSkills->have_posts() != null) { ?>
    <section id="skills">

        <div class="container">

            <div class="row d-flex justify-content-center align-items-center text-center py-5">
                <h3 class="i-h">Skills</h3>
                <h4 class="text-center py-2">Stuff I’m Good At</h4>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 my-5">
                <?php while ($homepageSkills->have_posts()) {
                    $homepageSkills->the_post(); ?>
                    <div class="feature-icon--grid col d-flex align-items-start">
                        <?php
                        if (!wp_kses_post(get_field('icon')) == null and !wp_kses_post(get_field('icon_name')) == null) {
                            //SVG Icon | Icomoon Free
                            $skillsIcomoonPackage = wp_kses_post(get_field('icon'));
                            $skillsIcomoonIconName = wp_kses_post(get_field('icon_name'));
                            $skillsIcomoonURLStart = get_theme_file_uri('/assets/icons/');
                            $skillsIcomoonURLSprite = '/sprite.svg#';
                        ?>
                            <svg>
                                <use xlink:href="<?php echo $skillsIcomoonURLStart ?><?php echo $skillsIcomoonPackage ?><?php echo $skillsIcomoonURLSprite ?><?php echo $skillsIcomoonIconName ?>"></use>
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
                        <div>
                            <h4 class="h3 fw-bold mb-0 fs-4 text-body-emphasis caps"><?php the_title(); ?></h3>
                               <!-- <p><?php //echo get_the_content(); ?></p> -->
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>



            </div>

        
        </div>
    </section>

<?php } ?>

<section class="bg-primary py-5" id="contact">

    <div class="container">

        <?php if (wp_kses_post(get_field('contact_title')) == null and wp_kses_post(get_field('contact_subtitle')) == null) { ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <h3 class="i-h">Contact</h3>
                <h4 class="text-center py-2">Let’s Have A Chat!</h4>
            </div>
        <?php } ?>
        <?php if (!wp_kses_post(get_field('contact_title')) == null || !wp_kses_post(get_field('contact_subtitle')) == null) {  ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <?php if (!wp_kses_post(get_field('contact_title')) == null) { ?>
                    <h3 class="i-h"><?php echo wp_kses_post(get_field('contact_title')); ?></h3>
                <?php } ?>
                <?php if (!wp_kses_post(get_field('contact_subtitle')) == null) { ?>
                    <h4 class="text-center py-2"><?php echo wp_kses_post(get_field('contact_subtitle')); ?></h4>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (!wp_kses_post(get_field('facebook')) == null || !wp_kses_post(get_field('x')) == null || !wp_kses_post(get_field('linkedin')) == null || !wp_kses_post(get_field('pinterest')) == null || !wp_kses_post(get_field('github')) == null) { ?>

            <div class="row d-flex justify-content-center pb-5">
                <div class="d-flex justify-content-center align-items-center social">
                    <?php if (!wp_kses_post(get_field('facebook')) == null) { ?>

                        <a title="Facebook" href="<?php echo wp_kses_post(get_field('facebook')); ?>" target="_blank" class="d-flex justify-content-center align-items-center btn btn-iconic me-2">
                            <svg class="social__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-facebook') ?>">
                                </use>
                            </svg>
                            <span class="screen-reader-text">Facebook</span>
                        </a>
                    <?php } ?>
                    <?php if (!wp_kses_post(get_field('x')) == null) { ?>
                        <a title="Twitter" href="<?php echo wp_kses_post(get_field('x')); ?>" target="_blank" class="d-flex justify-content-center align-items-center btn btn-iconic me-2">
                            <svg class="social__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-brands/sprite.svg#icon-x') ?>"></use>
                            </svg>
                            <span class="screen-reader-text">X (Twitter)</span>
                        </a>
                    <?php } ?>
                    <?php if (!wp_kses_post(get_field('linkedin')) == null) { ?>
                        <a title="LinkedIn" href="<?php echo wp_kses_post(get_field('linkedin')); ?>" target="_blank" class="d-flex justify-content-center align-items-center btn btn-iconic me-2">
                            <svg class="social__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-linkedin2') ?>">
                                </use>
                            </svg>
                            <span class="screen-reader-text">LinkedIn</span>
                        </a>
                    <?php } ?>
                    <?php if (!wp_kses_post(get_field('pinterest')) == null) { ?>
                        <a title="Pinterest" href="<?php echo wp_kses_post(get_field('pinterest')); ?>" target="_blank" class="d-flex justify-content-center align-items-center btn btn-iconic me-2">
                            <svg class="social__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-pinterest') ?>">
                                </use>
                            </svg>
                            <span class="screen-reader-text">Pinterest</span>
                        </a>
                    <?php } ?>
                    <?php if (!wp_kses_post(get_field('github')) == null) { ?>
                        <a title="GitHub" href="<?php echo wp_kses_post(get_field('github')); ?>" target="_blank" class="d-flex justify-content-center align-items-center btn btn-iconic">
                            <svg class="social__icon">
                                <use xlink:href="<?php echo get_theme_file_uri('assets/icons/icomoon-brands/sprite.svg#icon-github') ?>"></use>
                            </svg>
                            <span class="screen-reader-text">GitHub</span>
                        </a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <?php if (!wp_kses_post(get_field('contact_form')) == null) { ?>
            <div class="bg-image-angle row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border border-primary-subtle shadow-lg" style="--wtf-bg-image: url('<?php echo get_theme_file_uri('assets/media/marvin-meyer-SYTO3xs06fU-unsplash.jpg') ?>');" >
                <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                    <h5 class="h3 py-2" style="color: var(--wtf-primary);">Hire me now</h5>
                    <?php echo the_field('contact_form'); ?>
                </div>
            </div>
        <?php } ?>

        

    </div>
</section>
<?php
get_footer();
?>