<?php get_header(); ?>
<!-- top header -->
<?php get_template_part('template-parts/global-header'); ?>

<body <?php body_class(); ?> id="works-archive">
<?php wp_body_open(); ?>
  <div class="works-bg">
    <section id="works" class="section">
      <h2 class="sub-title">about</h2>
      <div class="content-inner">
        <section class="article-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('works-content');?>>
                <div class="works-left">
                  <h1 class="works-article-title"><span><?php the_title(); ?></span></h1>
                  <p>Ruby on Railsのチュートリアルに沿って制作したWebアプリケーションです。Twitterのように小さなコメントを投稿したり、ユーザーをフォローして極簡単なコミュケーションが取れます。このチュートリアルを通してテスト駆動開発、CRUD、ユーザー登録などの基礎的な考え方を学ぶことができました。今後は実務レベルでこれらの技術を活用することを考えています。</p>
                  <div class="works-skills-wrap">
                    <h2 class="works-article-title works-skills-title"><span>開発技術</span></h2>
                    <p>Ruby on Rails, HTML/CSS(SASS), Bulma, jQuery, Sqlite（開発）, Postgresql（本番）, Heroku, SendGrid</p>
                  </div>
                </div>
                <div class="works-right">
                  <ul class="works-img-list">
                    <li><img src="https://placehold.jp/800x513.png" alt="<?php the_title(); ?>"></li>
                    <li><img src="https://placehold.jp/800x513.png" alt="<?php the_title(); ?>"></li>
                    <li><img src="https://placehold.jp/800x513.png" alt="<?php the_title(); ?>"></li>
                  </ul>
                  <div class="works-main-img-wrap">
                    <img class="works-main-img js-mainVisual" src="https://placehold.jp/800x513.png" alt="<?php the_title(); ?>">
                  </div>
                </div>
                <?php // the_content(); 
                ?>
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