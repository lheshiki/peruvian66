<?php get_header(); ?>
<!-- top header -->
<?php get_template_part('template-parts/global-header'); ?>
<body id="media-archive">
  <div class="media-bg">
    <section id="media" class="section">
      <div class="content-inner">
        <section class="article-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" class="article-content">
                <h1 class="article-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </article>
            <?php
            endwhile;
          else :
            ?>
            <article id="" class="article-content">
                <p>表示するコンテンツがあります</p>
            </article>
          <?php
          endif;
          ?>
        </section>
      </div>
    </section>
  </div>
</body>
<?php get_footer(); ?>