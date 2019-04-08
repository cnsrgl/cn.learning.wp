<?php
/* Template Name: Responsive General Page*/
 get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Page Home Section -->
<section id="page">
  <header id="page">
    <div class="container">
      <div class="bg2 d-none d-xl-block">
        <div class="intro-text">
          <div class="intro-heading">
            <div class="jumbotron">
              <div class="row">
                <div class="col-md-7">
                  <h1 class="display-4">
                    <?php the_title(); ?><br />
                    <span>we say team </span>
                  </h1>
                  <p class="lead">We believe that every great team is a sum of different individuals
                    who are not only highly-skilled professionals but also love to talk, discuss
                    and always search for better ways to create products. Our dedicated and
                    self-driven team is one of the best things we have come up with.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row rwidth">
        <div class="arrowdown col-md-12">
          <a class="scrollmouse js-scroll-trigger d-none d-xl-block" href=#down><i class="fas fa-chevron-down"></i></a>
        </div>
      </div>
  </header>
</section>
<!-- HR TAG-->
<hr>
<!-- HR TAG-->
<section id="down">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php posts_nav_link(); ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<?php echo '<style>.bg2:before { background-image: url('?>
<?php echo get_the_post_thumbnail_url( $post_id, 'full' );?>
<?php echo ');</style>'?>
<?php get_footer(); ?>