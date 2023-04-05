<?php

  /**
   * template name: home
   */
?>


<?php get_header(); ?>


<section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('banner_title'); ?>  </h1>
          <div class="banner__grid">
            <div class="banner__main">
               <?php 
                    $args = array(
                      'post_type' => 'blogPost',
                      'posts_per_page' => 1,
                    );
                    $newQuery = new WP_Query($args)
                ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
              <article class="banner__story">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="banner__story__content">
                  <h2><?php the_title(); ?></h2>
                  <small><?php echo get_the_date('M-d-Y')  ?></small>
                  <p><?php the_content();  ?></p>
                  <a href="<?php echo the_permalink(); ?>">Read More...</a>
                </div>
              </article>
                <?php 
                  endwhile;
                  else:
                  echo "no available content";
                  endif;
                  wp_reset_postdata();
                ?>

            </div>

            <div class="banner__sidebar">
              <?php 
                $args = array(
                  'post_type' => 'blogPost',
                  'posts_per_page' => 4,
                  'offset' => 1,
                );
                $newQuery = new WP_Query($args)
              ?>
              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
              <div class="card__sm">
               <?php echo get_the_post_thumbnail();?>
                <div class="card__sm__content">
                  <?php the_title(); ?>
                  <small><?php echo get_the_date('M-d-Y') ?></small>
                  <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                  <a href="<?php echo the_permalink(); ?>">Read More...</a>
                </div>
              </div>
              <?php 

            endwhile;
                else:
                  echo "no available content";
                endif;
                wp_reset_postdata();

              ?>

             
            </div>
          </div>
        </div>
      </div>
</section>

    <section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">
          <?php 

              $args = array(
                'post_type' => 'latestPost',
                'posts_per_page' => 3,
               
              );

              $newQuery = new WP_Query($args)

            ?>
            <?php  
            
              if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
            ?>
        <div class="card__md">
        <?php
                    echo get_the_post_thumbnail();

               ?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M-d-Y') ?></small></li>
                <li>
                  

                    <?php
                    
                      $post_tags = get_the_tags();

                      if($post_tags){
                        foreach($post_tags as $tag){
                      
                    ?>
                    <small><?php echo $tag->name?></small>
                      <?php
                        }
                       }
                        
                      ?>
                      

              </li>
              </ul>
                <h3>
                  <?php the_title(); ?>
                </h3>
                  <p>
                  <?php echo get_the_excerpt();   ?>
                  </p>
              <a href="<?php echo the_permalink(); ?>">Read More...</a>
            </div>
          </div>
          <?php 

            endwhile;
                else:
                  echo "no available content";
                endif;
                wp_reset_postdata();

              ?>
          

          
        </div>
      </div>
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2>Feature New</h2>
        <h3 class="block__header">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga id
          perferendis quisquam error culpa non iure blanditiis placeat rem
          itaque autem nihil ducimus
        </p>
      </div>

      <div class="container">
        <div class="feature__img">  
        <?php
            $image = get_field('feature_image');
                if(!empty($image)):
            ?>
                <img src="<?php echo esc_url($image['url']) ?>"  alt="">
        <?php endif; ?>
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          
          <div class="feature__main">

            <?php 

              $args = array(
                'post_type' => 'featurePost',
                'posts_per_page' => 3,
               
              );

              $newQuery = new WP_Query($args)

            ?>
            <?php  
            
              if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
            ?>
                 
            <article class="card__lg">
            <?php
                    echo get_the_post_thumbnail();

               ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('M-d-Y'); ?></small>
                <h3>
                 <?php the_title();?>
                </h3>
                <p>
                 <?php echo get_the_excerpt(); ?>
                </p>
                
                <a href="<?php echo the_permalink(); ?>">Read More...</a>
              </div>
            </article>
               <?php 

            endwhile;
                else:
                  echo "no available content";
                endif;
                wp_reset_postdata();

              ?>
            
          </div>
          <div class="feature__sidebar">
              <?php 

              $args = array(
                'post_type' => 'featurePost',
                'posts_per_page' => 6,
                'offset' => 3,
               
              );

              $newQuery = new WP_Query($args)

            ?>
            <?php  
            
              if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
            ?>

            <div class="card__mini">
              <small><?php echo get_the_date('M-d-Y') ?></small>
              <h4>
                <?php  the_title(); ?>
             
              </h4>
              <p> <?php echo get_the_excerpt();   ?></p>
              <a href="<?php echo the_permalink(); ?>">Read More ...</a>
            </div>
                      <?php 

            endwhile;
                else:
                  echo "no available content";
                endif;
                wp_reset_postdata();

              ?>
         
          </div>
        </div>
      </div>
    </section>





<?php get_footer(); ?>