<?php get_header(); ?>

<section>
    <div>
        <h1><?php echo single_cat_title(); ?></h1>

        <?php get_template_part('includes/section','archive'); ?>

        <?php previous_post_link(); ?>
        <?php the_post(); ?>
        <?php next_post_link(); ?>
    </div>
</section>

<?php get_footer(); ?>