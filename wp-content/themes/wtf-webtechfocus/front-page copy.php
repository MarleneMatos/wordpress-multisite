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

<section id="work" class="bg-primary-emphasis bg-skew">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h3 class="i-h">Previous Experience</h3>
        </div>

        <div class="row d-flex align-items-center justify-content-center work-logos text-center">
            <div class="col-24 work">
                <div class="work-logos">
                    <img src="<?php echo get_theme_file_uri('assets/logos/first4lawyers-logo-white.png') ?>" alt="Seen on logo 3">
                </div>
                <div class="work-logos">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                        x="0px" y="0px" viewBox="0 0 467 467" enable-background="new 0 0 467 467"
                        xml:space="preserve">
                        <image id="image0" width="467" height="467" x="0" y="0"
                            href="data:image/png;base64,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 MMpReXUAAAAASUVORK5CYII=" />
                    </svg>
                </div>
                <div class="work-logos">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                        x="0px" y="0px" viewBox="0 0 350 56"
                        style="enable-background:new 0 0 350 56;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #ffffff;
                            }

                            .st1 {
                                fill: url(#SVGID_1_);
                            }
                        </style>
                        <path class="st0"
                            d="M11.4,25.4v16.4H7.7V21.5c0-0.7,0.2-1.3,0.5-1.7c0.4-0.4,0.9-0.6,1.5-0.6c0.3,0,0.6,0.1,0.8,0.2  c0.3,0.1,0.6,0.3,0.8,0.6l15.8,15.7V19.2h3.8v20.6c0,0.8-0.2,1.3-0.5,1.7c-0.4,0.4-0.8,0.6-1.4,0.6c-0.6,0-1.2-0.3-1.8-0.8  L11.4,25.4z" />
                        <path class="st0"
                            d="M44.6,41.8c-1.6,0-3-0.3-4.3-0.9c-1.3-0.6-2.5-1.4-3.5-2.4c-1-1-1.7-2.2-2.3-3.6c-0.5-1.4-0.8-2.9-0.8-4.5  c0-1.7,0.3-3.1,0.8-4.5c0.5-1.4,1.3-2.5,2.3-3.5c1-0.9,2.1-1.7,3.5-2.2c1.3-0.5,2.8-0.8,4.3-0.8H50c1.6,0,3.1,0.3,4.5,0.8  c1.3,0.5,2.5,1.3,3.5,2.3c1,1,1.7,2.1,2.3,3.5c0.5,1.4,0.8,2.8,0.8,4.5c0,1.6-0.3,3.1-0.8,4.5c-0.5,1.4-1.3,2.6-2.3,3.6  c-1,1-2.1,1.8-3.5,2.4c-1.3,0.6-2.8,0.9-4.4,0.9H44.6z M50,37.9c1,0,2-0.2,2.9-0.6c0.9-0.4,1.6-0.9,2.2-1.5c0.6-0.7,1.1-1.4,1.5-2.3  c0.3-0.9,0.5-1.9,0.5-2.9c0-1.1-0.2-2-0.5-2.9c-0.4-0.9-0.8-1.7-1.5-2.3c-0.6-0.6-1.4-1.1-2.2-1.5C52,23.5,51,23.3,50,23.3h-5.4  c-1,0-2,0.2-2.8,0.5c-0.8,0.4-1.6,0.9-2.2,1.5c-0.6,0.6-1.1,1.4-1.4,2.3c-0.4,0.9-0.5,1.9-0.5,2.9c0,1,0.2,2,0.5,2.9  c0.3,0.9,0.8,1.7,1.4,2.3c0.6,0.6,1.4,1.2,2.2,1.5c0.9,0.4,1.8,0.6,2.8,0.6H50z" />
                        <path class="st0"
                            d="M85.5,41.8l-5.7-6.2h-8.4v-3.4h9.3c1.4,0,2.5-0.4,3.2-1.1c0.7-0.8,1.1-1.9,1.1-3.4c0-1.5-0.4-2.6-1.1-3.3  c-0.8-0.7-1.8-1-3.2-1H68.5v18.5h-3.9V19.4h16.1c1.3,0,2.4,0.2,3.4,0.6c1,0.4,1.9,0.9,2.6,1.6c0.7,0.7,1.2,1.6,1.6,2.6  c0.4,1,0.6,2.1,0.6,3.4c0,1.9-0.4,3.4-1.2,4.7c-0.8,1.3-2,2.2-3.4,2.7l6.8,6.8H85.5z" />
                        <path class="st0" d="M99.7,41.8V23.3h-8.5v-3.9h20.9v3.9h-8.5v18.5H99.7z" />
                        <path class="st0"
                            d="M114.7,41.9V19.4h3.9v22.5H114.7z M132.8,41.9v-9.8h-11.3v-3.5h11.3v-9.3h3.9v22.5H132.8z" />
                        <path class="st0"
                            d="M141.2,41.8V19.4h20.1v3.9h-16.2v14.6h16.2v3.9H141.2z M147.9,32.1v-3.3h12.4v3.3H147.9z" />
                        <path class="st0"
                            d="M185.7,41.8l-5.7-6.2h-8.4v-3.4h9.4c1.4,0,2.5-0.4,3.2-1.1c0.7-0.8,1.1-1.9,1.1-3.4c0-1.5-0.4-2.6-1.1-3.3  c-0.7-0.7-1.8-1-3.1-1h-12.2v18.5h-3.9V19.4H181c1.3,0,2.4,0.2,3.4,0.6c1,0.4,1.9,0.9,2.6,1.6c0.7,0.7,1.2,1.6,1.6,2.6  c0.4,1,0.5,2.1,0.5,3.4c0,1.9-0.4,3.4-1.2,4.7c-0.8,1.3-1.9,2.2-3.4,2.7l6.8,6.8H185.7z" />
                        <path class="st0"
                            d="M196.7,25.4v16.4H193V21.5c0-0.7,0.2-1.3,0.5-1.7c0.4-0.4,0.9-0.6,1.5-0.6c0.3,0,0.6,0.1,0.9,0.2  c0.3,0.1,0.5,0.3,0.8,0.6l15.8,15.7V19.2h3.7v20.6c0,0.8-0.2,1.3-0.5,1.7c-0.4,0.4-0.8,0.6-1.4,0.6c-0.6,0-1.2-0.3-1.8-0.8  L196.7,25.4z" />
                        <path class="st0"
                            d="M229.1,41.8V19.4h13c1.6,0,3,0.3,4.4,0.8c1.4,0.5,2.5,1.3,3.5,2.3c1,1,1.7,2.1,2.3,3.5c0.5,1.4,0.8,2.8,0.8,4.5  c0,1.6-0.3,3.1-0.8,4.5c-0.6,1.4-1.3,2.6-2.3,3.6c-1,1-2.1,1.8-3.5,2.4c-1.3,0.6-2.8,0.9-4.4,0.9H229.1z M242.1,37.9  c1,0,1.9-0.2,2.8-0.6c0.8-0.4,1.6-0.9,2.2-1.5c0.6-0.7,1.1-1.4,1.5-2.3c0.3-0.9,0.5-1.9,0.5-2.9c0-1.1-0.2-2-0.5-2.9  c-0.4-0.9-0.8-1.7-1.5-2.3c-0.6-0.6-1.4-1.1-2.2-1.5c-0.8-0.3-1.8-0.5-2.8-0.5H233v14.6H242.1z" />
                        <path class="st0" d="M256.4,41.8V19.4h3.9v22.4H256.4z" />
                        <path class="st0"
                            d="M262.5,19.4h4.8l10.2,17.3l10.2-17.3h4.5l-12.9,21.5c-0.2,0.4-0.5,0.7-0.8,0.9c-0.3,0.2-0.7,0.3-1.1,0.3  c-0.4,0-0.8-0.1-1.1-0.3c-0.3-0.2-0.6-0.5-0.8-0.9L262.5,19.4z" />
                        <g>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse"
                                x1="265.9709" y1="15.7327" x2="289.0334" y2="15.7327">
                                <stop offset="3.030300e-02" style="stop-color:#ffffff" />
                                <stop offset="1" style="stop-color:#ffffff" />
                            </linearGradient>
                            <path class="st1"
                                d="M277.6,25.5L266,6h4.8l6.8,12.2l7-12.1h4.5L277.6,25.5z" />
                        </g>
                        <path class="st0"
                            d="M294.9,41.8V19.4h20.1v3.9h-16.2v14.6H315v3.9H294.9z M301.6,32.1v-3.3h12.4v3.3H301.6z" />
                        <path class="st0"
                            d="M339.4,41.8l-5.7-6.2h-8.4v-3.4h9.4c1.4,0,2.5-0.4,3.2-1.1c0.7-0.8,1.1-1.9,1.1-3.4c0-1.5-0.4-2.6-1.1-3.3  c-0.7-0.7-1.8-1-3.2-1h-12.2v18.5h-3.9V19.4h16.1c1.3,0,2.4,0.2,3.4,0.6c1,0.4,1.9,0.9,2.6,1.6c0.7,0.7,1.2,1.6,1.6,2.6  c0.4,1,0.5,2.1,0.5,3.4c0,1.9-0.4,3.4-1.2,4.7c-0.8,1.3-2,2.2-3.4,2.7l6.8,6.8H339.4z" />
                    </svg>
                </div>
                <div class="work-logos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139 31" data-id="common"
                        class="top-area-app-emotion-cache-key-bfihcq">
                        <path
                            d="M57.98 28.94l-1.595-4.904h-.98L53.81 28.94l-1.593-4.91h-1.23l2.206 6.62h.98l1.716-4.66 1.59 4.66h.98l2.2-6.62h-1.22zM1.334 26.857h33.35v.98H1.334v-.98zm41.318-24.89h2.207v14.59h-2.21V1.967zm10.544 14.59h2.207v-6.13h7.602V8.343h-7.61V3.93h8.46V1.966h-10.66zM8.324 16.8c4.66 0 8.46-3.8 8.46-8.46 0-4.534-3.8-6.62-6.62-6.62-5.518 0-5.886 5.396-5.886 5.396h.13s.98-3.923 4.78-3.923c3.07 0 5.4 2.084 5.4 5.027 0 3.43-2.82 6.25-6.25 6.25-3.31 0-6.372-2.45-6.372-6.87 0-3.44 1.84-6.26 5.027-7.48V0C2.947.61.003 4.17.003 8.33c-.122 4.66 3.68 8.46 8.338 8.46zm36.78 10.056c-1.225-.245-1.593-.49-1.593-.98s.37-.737 1.11-.737c.62 0 1.23.24 1.72.61l.617-.85c-.613-.49-1.47-.86-2.33-.86-1.35 0-2.207.74-2.207 1.96s.73 1.6 2.2 1.96c1.22.25 1.47.49 1.47.98s-.49.86-1.1.86c-.86 0-1.47-.37-2.09-.86l-.74.86c.735.74 1.716 1.11 2.696 1.11 1.35 0 2.33-.73 2.33-1.96 0-1.35-.738-1.84-2.086-2.08zm-9.317-10.3l-4.414-5.884c2.207-.61 3.678-2.2 3.678-4.29 0-2.69-2.2-4.53-5.39-4.53h-6.38v14.59h2.2v-5.4h3.55l4.05 5.4 2.7.126zm-10.3-7.48V3.93h4.047c2.084 0 3.31.86 3.31 2.453s-1.35 2.575-3.31 2.575h-4.047zm40.706 18.76h3.31v-1.102h-3.31V25.14h3.678v-1.103h-4.78v6.498h4.78v-.98H66.2zM91.817 1.844l-6.62 14.713h2.33l1.715-3.8h7.11l1.595 3.8h2.452L93.78 1.844h-1.964zm-1.838 8.95l2.69-6.252 2.69 6.26h-5.4zm18.14-5.026l4.66 6.866.24.368.24-.36 4.536-6.86v10.79h2.207v-14.6h-2.084l-4.904 7.356-4.906-7.356h-2.08v14.59h2.085zm0 21.088h30.89v.98h-30.89v-.98zm22.19-12.383v-4.29h7.6V8.098h-7.6v-4.17h8.58v-1.96h-10.78v14.59h10.79V14.47zM98.93 28.57l-3.557-4.534H94.27v6.498h1.226v-4.536l3.55 4.536h.98v-6.498h-1.1zM72.936 1.968h-2.084v14.59h10.054v-2.084h-7.97zm13.12 25.87h3.31v-1.103h-3.31V25.14h3.677v-1.103H84.95v6.498h4.905v-.98h-3.81zm-9.197-3.8H74.4v6.497h2.453c2.083 0 3.432-1.47 3.432-3.31.122-1.717-1.35-3.188-3.434-3.188zm0 5.516h-1.35V25.14h1.35c1.35 0 2.2.98 2.2 2.206.12 1.226-.86 2.207-2.21 2.207z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</section>



<?php if ($homepagePortfolio->have_posts() != null) { ?>
    <section id="portfolio">
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
                            <p class="lead">Proud to unveil my latest project — <strong>Web Tech Focus</strong>.</p>

<p class="lead">At <strong>Web Tech Focus</strong>, we specialize in crafting <strong>smart, tailored digital solutions</strong> for businesses and entrepreneurs. From custom websites and web apps to full-scale digital strategies, this project reflects over a decade of experience and a deep passion for helping clients thrive online.</p>

 <div class="d-grid gap-2 d-flex justify-content-center">
                                <a href="https://www.webtechfocus.com/?utm_source=marlenematos_com&utm_medium=website&utm_campaign=wtf-site" class="btn btn-primary btn-lg me-sm-3 my-2">wtf site</a>
                                <a href="https://theme.webtechfocus.com/?utm_source=marlenematos_com&utm_medium=website&utm_campaign=wtf-theme" class="btn btn-outline-primary btn-lg my-2">wtf theme</a>
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