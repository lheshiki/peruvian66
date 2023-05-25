<?php get_header(); ?>
<body <?php body_class(); ?> id="media-archive">
<?php wp_body_open(); ?>
<!-- top header -->
<?php get_template_part('template-parts/global-header'); ?>
  <div class="media-bg">
    <div id="media" class="section">
      <div class="content-inner">
        <div class="article-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('article-content');?>>
                <h2 class="article-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </article>
            <?php
            wp_link_pages();
            endwhile;
          else :
            ?>
            <article id="" class="article-content">
                <p>表示するコンテンツがあります</p>
            </article>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>