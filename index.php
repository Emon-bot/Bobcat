
<?php get_header(); ?>


  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <?php 
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>

          <div class="blog_area">
            <div class="post_thumb">
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
              
            </div>
            <div class="post_details">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
          <?php the_excerpt(); ?>
          </div>

            <?php 
             endwhile;
            else:
              _e('No post found');
            endif;
            ?>

            <div id="pagination">
              <?php if('bobcat_pagination') {bobcat_pagination(); } else{ ?>
              <?php next_post_link(); ?>
              <?php previous_post_link(); ?>
            <?php } ?> 
            </div>
            

        </div>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>


