<!-- including the site header here -->
<?php get_header(); ?>

<body>
  <div class="bg">
    <div class="top-btn-wrap"><span class="top-btn"><span class="top-btn-line"></span></span></div>
    <!-- top header -->
    <?php get_template_part('template-parts/top-header'); ?>
    <div class="main-visual">
      <div class="layer">
        <div class="loader-wrapper">
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
        </div>
      </div>
      <h1 class="main-title">Peruvian 66</h1>
    </div>
    <section id="about" class="section js-changeColor">
      <h2 class="sub-title">About me</h2>
      
      <div class="content-inner">
        <div class="biography">
          <img class="biography-photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.jpg" alt="avatar">
          <p class="biography-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iusto dolorem alias ea odit. Quisquam architecto illo sapiente cumque dolorum laudantium at nulla deserunt tenetur modi necessitatibus, harum recusandae animi!</p>
        </div>
        <section class="swiper-wrap">
        <h2 class="sub-title">Hobbies</h2>
          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ramen.png" alt="FOOD"width="298" height="298" />
                <p class="profile-topic">FOOD</p>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/balls-sports.png" alt="SPORTS" width="298" height="298" />
                <p class="profile-topic">SPORTS</p>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/languages.png" alt="profile" width="298" height="298" />
                <p class="profile-topic">LANGUAGE</p>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coding.png" alt="profile" width="298" height="298" />
                <p class="profile-topic">Programming</p>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/scuba.png" alt="profile" width="298" height="298" />
                <p class="profile-topic">SKIN DIVING</p>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/netflix.png" alt="profile" width="298" height="298" />
                <p class="profile-topic">NETFLIX</p>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>
        </section>
        
        <a href="" class="aboutBtn">Wanna know more?</a>
      </div>
    </section>
    <section id="skills" class="section js-changeColor">
      <h2 class="sub-title">My Skills</h2>
      <div class="content-inner">
        <div class="skill-container">
          <section class="skill-block js-skill-bar-Y">
            <h3 class="skill-heading">FRONTEND SKILLS</h3>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">Javascript</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="95">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">jQuery</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="95">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">TypeScript</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="70">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">HTML5/CSS3/SASS</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="95">0</span>
                </div>
              </div>
            </div>
          </section>
          <section class="skill-block">
            <h3 class="skill-heading">BACKEND SKILLS</h3>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">PHP</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="80">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">WORDPRESS</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="90">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">python</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="60">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">VBA</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="90">0</span>
                </div>
              </div>
            </div>
          </section>
          <section class="skill-block">
            <h3 class="skill-heading">LANGUAGE SKILLS</h3>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">Japanese</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="95">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">Spanish</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="95">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">English</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="90">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">Portuguese</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="70">0</span>
                </div>
              </div>
            </div>
          </section>
          <section class="skill-block">
            <h3 class="skill-heading">MARKETING SKILLS</h3>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">Google Ads</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="84">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">Facebook Ads</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="75">0</span>
                </div>
              </div>
            </div>
            <div class="skill-wrapper js-skill-bar">
              <span class="skill-title">SNS management</span>
              <div class="skill-bar">
                <div class="skill-bar-score">
                  <span class="skill-point" data-point="86">0</span>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <section id="works" class="section  js-changeColor">
      <h2 class="sub-title">Works</h2>
      <div class="content-inner">
        <section class="card-container">
          <?php
          $args = array(
            'post_type' => 'works'
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" class="card">
                <a href="<?php the_permalink(); ?>" class="card-link">
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
        </section>
        <a href="<?php echo get_post_type_archive_link( 'works' ); ?>" class="aboutBtn colored-green">Wanna see more?</a>
      </div>
    </section>
    <section id="media" class="section js-changeColor">
      <h2 class="sub-title">News</h2>
      <div class="content-inner">
        <section class="card-container">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" class="card">
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
        </section>
        <a href="/media/" class="aboutBtn colored-green">Click to see more media</a>
      </div>
    </section>
    <section id="twitter" class="section">
      <div class="content-inner">
        <h2 class="sub-title">Twitter</h2>
        <div class="twitter-wrap">
          <a class="twitter-timeline" href="https://twitter.com/peruEngineer22?ref_src=twsrc%5Etfw">Tweets by peruEngineer22</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </section>
    <section id="contact" class="section js-changeColor">
      <h2 class="sub-title">Contact me</h2>
      <div class="content-inner">
        <div class="contact-container">
          <p class="sns-wrapper">
            <a href="https://www.instagram.com/peruvian9166/" target="_blank" class="instagram"><i class="fab fa-instagram sns-icon"></i></a>
          </p>
          <p class="sns-wrapper">
            <a href="https://forms.gle/cdSjPX8LGb7D9UEZ7" target="_blank" class="google"><i class="fab fa-google sns-icon"></i></a>
          </p>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>