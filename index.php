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
        <div class="profile-container">
          <div class="profile-move-wrapper js-slider-target default on">
            <span class="profile-topic">FOOD</span>
            <div class="profile-pic-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img04.jpeg" alt="profile" width="393" height="393" />
            </div>
          </div>
          <div class="profile-move-wrapper js-slider-target">
            <span class="profile-topic">SPORTS</span>
            <div class="profile-pic-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img05.JPG" alt="profile" width="567" height="567" />
            </div>
          </div>
          <div class="profile-move-wrapper js-slider-target">
            <span class="profile-topic">LANGUAGE</span>
            <div class="profile-pic-wrapper">
              <i class="fas fa-globe-americas"></i>
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.jpg" alt="profile"> -->
            </div>
          </div>
          <div class="profile-move-wrapper js-slider-target">
            <span class="profile-topic">SKIN DIVING</span>
            <div class="profile-pic-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img03.JPG" alt="profile" width="298" height="298" />
            </div>
          </div>
          <div class="profile-move-wrapper js-slider-target">
            <span class="profile-topic">SIT COMS</span>
            <div class="profile-pic-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img02.jpeg" alt="profile" width="440" height="440" />
            </div>
          </div>
          <p class="profile-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia,molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborumnumquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentiumoptio, eaque rerum! Provident
            similique accusantium nemo autem.
          </p>
        </div>
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
        <a href="<?php echo get_post_type_archive_link( 'works' ); ?>" class="aboutBtn colored">Wanna see more?</a>
      </div>
    </section>
    <section id="media" class="section js-changeColor">
      <h2 class="sub-title">Media</h2>
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
        <a href="/media/" class="aboutBtn colored">Click to see more media</a>
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