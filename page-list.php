<?php 
/* Template Name: Profile List Template */
?>

<?php get_header(); ?>
<section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner">
					      <div class="wp6_content">
                 
                 <br>

                <h2>List of all the Submitted Profile.</h2>

                <br>
                <br>
						
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
    $args = array(
      'post_type'   => 'profile_post_type',
      'post_status' => 'publish',
    );
    
        $profile_post_type = new WP_Query( $args );
        if( $profile_post_type->have_posts() ) :
        ?>

            <?php
              while( $profile_post_type->have_posts() ) :
                $profile_post_type->the_post();
            ?>
                <tr>
                  <th><a href="<?php the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></th>
                  <th><?php echo get_post_meta( get_the_ID(), 'personal_email', true); ?></th>
                  <th><?php echo get_post_meta( get_the_ID(), 'personal_phone-number', true); ?></th>
                  <th><?php echo get_post_meta( get_the_ID(), 'personal_state', true); ?></th>
                </tr>
              <?php
              endwhile;
              wp_reset_postdata();
              ?>
          <?php
        else :
          esc_html_e( 'No Data Found', 'wp6' );
        endif;
        ?>
    </tbody>
    </table>

					      </div>
				       </div>
            </div>
        </section>
<?php get_footer(); ?>
    



    