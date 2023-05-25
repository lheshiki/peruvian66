<?php get_header(); ?>
<body <?php body_class(); ?> id="media-archive">
<?php wp_body_open(); ?>
<!-- top header -->
<?php get_template_part('template-parts/global-header'); ?>
  <div class="media-bg">
    <section id="media" class="section js-changeColor">
      <h2 class="sub-title">Media</h2>
      <div class="content-inner">
        <div class="card-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('card');?>>
                <a href="<?php the_permalink(); ?>" class="card-link">
                  <div class="img-wrapper">
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="<?php echo get_the_title(); ?>" />
                  </div>
                  <h3 class="card-title"><?php echo get_the_title(); ?></h3>
                </a>
              </article>
            <?php
            endwhile;
          else :
            ?>
            <article class="card">
              <a href="#" class="card-link">
                <div class="img-wrapper">
                  <img src="https://placehold.jp/300x225.png" alt="card" />
                </div>
                <h3 class="card-title">Comming soon</h3>
              </a>
            </article>
          <?php
          endif;
          ?>
        </div>
      </div>
    </section>
  </div>
<?php get_footer(); ?>