<?php
get_header();
?>

<section id="banner">
    <div class="row">
        <div class="header text-center col-md-24">
            <img src="<?php echo get_theme_file_uri('/assets/logos/mm-logo.svg') ?>" alt="Marlene Matos logo"
                class="header__logo d-flex justify-content-center align-items-center">

            <h1 class="text-primary"><?php if (is_category()){ echo "Category name will go here";} if(is_author()){echo "Me";}?></h1>
        </div>
    </div>
</section>

<section id="work" class="section">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-24 col-lg-12 col-md-12">
            <h3 class="section__title">All Events</h3>
            <h4 class="section__subtitle">Check Out My Work</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <?php
        while (have_posts()) {
            the_post(); ?>
            <?php $eventDate = new DateTime(wp_kses_post( get_field('event_date')));
            echo $eventDate->format('M')
            ?>
            
        <?php
        }
        ?>
        <div class="row d-flex justify-content-center">
            <?php echo paginate_links(); ?>
        </div>
</section>

<?php
get_footer();
?>