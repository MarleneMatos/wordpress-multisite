<?php
get_header();
?>

<section id="archive" class="hero-polygon"  style="--wtf-bg-image: url('<?php echo get_theme_file_uri('assets/media/james-harrison-vpOeXr5wmR4-unsplash.jpg') ?>');">


    <div class="container hero-polygon--content">
            <div class="row d-flex justify-content-center align-items-center text-center">
                
                    <h2 class="h1">Portfolio</h2>
                    <nav aria-label="breadcrumb">

                    <?php

//if there are any child pages

    //echo get_the_ID();
    //echo wp_get_post_parent_id(get_the_ID());
    $theParent = wp_get_post_parent_id(get_the_ID());
    if($theParent){ ?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php the_permalink($theParent); ?>"><?php the_title($theParent);?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title( );?></li>
  </ol>
</nav>
<?php
        }
        ?>
       


        <h1 class="text-primary"><?php if (is_category()){ echo "Category name will go here";} if(is_author()){echo "Me";}?></h1>
    </div>
</section>


<section id="work" class="section">
<div class="container-fluid">
    <div class="d-flex justify-content-center">
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-0">

        <?php
       while (have_posts()) {
        the_post(); 
        $image = get_field('thumbnail_image');
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
        ?>
         <div class="row d-inline-block text-center justify-content-center py-5">
                <?php echo paginate_links(); ?>
            </div>

        </div>
</section>

<?php
get_footer();
?>