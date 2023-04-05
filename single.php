<?php  get_header(); ?>

    <div class="thecontent">
        <div class="title">
        <h1>Daemon Wife's</h1>
        </div>
        
        <div class="container">
      
            <div class="main">
                    <?php echo get_the_post_thumbnail(); ?>
                    <h2><?php  the_title(); ?></h2>
                    <span><?php echo get_the_time('M-d-Y'); ?></span>
                    <?php  the_content(); ?>
            </div>
            <div class="wifes">
                <?php 
                    $args = array(
                      'post_type' => 'daemonPost',
                      'posts_per_page' => 3,
                
                    );
                      $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                   
                    <div class="content">
                        <?php echo get_the_post_thumbnail(); ?>
                        <div class="text">
                        <h2><?php  the_title();  ?></h2>
                        <span><?php echo get_the_time('M-d-Y');  ?></span>
                        <?php  the_content(); ?>
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



<?php get_footer(); ?>