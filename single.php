<?php get_header(); ?>

<section class="single-container">

<?php
if(have_posts()) :
    while(have_posts()) : the_post();
?>

    <div class="single-article">

        <!-- TITLE -->
        <h1 class="single-title"><?php the_title(); ?></h1>

        <!-- DATE -->
        <p class="single-date">
            <?php echo get_the_date(); ?>
        </p>

        

        <!-- FULL CONTENT -->
        <div class="single-content">
            <?php the_content(); ?>
        </div>

    </div>

<?php
    endwhile;
endif;
?>

</section>

<?php get_footer(); ?>