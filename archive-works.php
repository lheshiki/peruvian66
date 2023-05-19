<?php get_header(); ?>
<!-- top header -->
<?php get_template_part('template-parts/global-header'); ?>
<body id="works-archive">
  <div class="works-bg">
    <section id="works" class="section">
      <h2 class="sub-title">Works</h2>
      <div class="content-inner">
        <section class="card-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" class="card">
                <a href="<?php the_permalink(); ?>" class="card-link">
                  <span class="card-category">
                    <?php 
                      $terms = get_the_terms(get_the_ID(),'category');
                      echo $terms[0]->name; ?>
                  </span>
                  <div class="img-wrapper">
                    <?php if(has_post_thumbnail()):?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="<?php echo get_the_title(); ?>" />
                    <?php else: ?>
                      <img src="https://placehold.jp/800x513.png" alt="placehold" />
                    <?php endif ?>
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
          <!-- <nav class="navigation pagination" aria-label=" ">
            <h2 class="screen-reader-text"> </h2>
            <div class="nav-links">
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="http://localhost:8023/works/page/2/">2</a>
              <a class="next page-numbers" href="http://localhost:8023/works/page/2/"><span class="arrow">→</span></a>
            </div>
          </nav> -->
        </section>
        <?php
          $args = array(
              'mid_size' => 1,
              'prev_text' => '<span class="arrow">←</span>',
              'next_text' => '<span class="arrow">→</span>',
          );
          the_posts_pagination($args);
          ?>
      </div>
    </section>
  </div>
<?php get_footer(); ?>