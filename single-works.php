<?php get_header(); ?>
<h3>single-works.php</h3>
    <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
    <ul>
        <li><?php the_title(); ?></li>
        <li><?php the_content(); ?></li>
    </ul>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>