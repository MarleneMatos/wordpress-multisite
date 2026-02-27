 
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

                <?php
        }

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



<section id="<?php get_the_ID();?>" class="section">
                <?php the_content( );?>
</section>
    <?php
}
?>




 
 

 <?php
get_footer( );
?>