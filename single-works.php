<?php get_header(); ?>
<body <?php body_class(); ?> id="works-archive">
<?php wp_body_open(); ?>
<!-- top header -->
<?php get_template_part('template-parts/global-header'); ?>
  <div class="works-bg">
    <section id="works" class="section">
      <h2 class="sub-title">Works</h2>
      <div class="content-inner">
        <div class="works-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
              // カテゴリーのデータを取得
              $cat = get_the_category();
              $cat = $cat[0];
          ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('works-content');?>>
                <div class="works-left">
                  <div class="works-category-belt">
                    <ul class="works-category-list">
                      <li><?php echo $cat->cat_name;?></li>  <!--ここにカテゴリーを出力 -->
                    </ul>
                    <div>
                      <time datetime="<?php the_date("Y-m-d"); ?>" class="works-date">公開日:<?php echo get_the_date("Y-m-d"); ?></time>
                      <time datetime="<?php the_modified_date("Y-m-d"); ?>" class="works-date">更新日:<?php echo get_the_modified_date("Y-m-d"); ?></time>
                    </div>
                    
                  </div>
                  <h2 class="works-article-title"><span><?php the_title(); ?></span></h2>
                  <p><?php echo $cfs->get('works_description'); ?></p><!--ここにCFSでテキスト（description）取得 -->
                  <div class="works-skills-wrap">
                    <h2 class="works-article-title works-skills-title"><span>役割</span></h2>
                    <p><?php echo $cfs->get('works_position'); ?></p><!--ここにスキル(skill)を出力 -->
                  </div>
                  <div class="works-skills-wrap">
                    <h2 class="works-article-title works-skills-title"><span>スキル</span></h2>
                    <p><?php echo $cfs->get('works_skills'); ?></p><!--ここにスキル(skill)を出力 -->
                  </div>
                </div>
                <div class="works-right">
                  <ul class="works-img-list"> <!--ここに追加された画像をworks-imageを出力 -->
                    <?php 
                      $fields = $cfs->get('works_images');
                      if (!empty($fields)) :
                      foreach ($fields as $field) :
                        if ($field["works_image"] !== ""):
                    ?>
                    <li><img src="<?php echo $field["works_image"]; ?>" alt="<?php the_title(); ?>"></li>
                    <?php 
                          endif;
                        endforeach;
                    ?>
                  </ul>
                  <div class="works-main-img-wrap">
                    <?php if ($field["works_image"] !== ""):?>
                    <img class="works-main-img js-mainVisual" src="<?php echo $fields[0]["works_image"]; ?>" alt="<?php the_title(); ?>">
                    <?php 
                      endif;
                    endif;
                    ?>
                  </div>
                </div>
                <?php 
                  if ($cfs->get('works_url')):
                ?>
                <a class="aboutBtn colored-pink" target="_blank" rel="noopener noreferrer" href="<?php echo $cfs->get('works_url'); ?>">サイト閲覧はこちら</a>
                <?php 
                  endif;
                ?>
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
    </section>
  </div>
<?php get_footer(); ?>