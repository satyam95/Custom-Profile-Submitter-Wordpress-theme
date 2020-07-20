<?php get_header(); ?>
<section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
                    <div class="wp6_content">
                    <?php 
                        if( have_posts() ):
                            while( have_posts() ): the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="pro_img">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
							        </div>
                                    <div class="pro_summary">
                                        <?php the_title('<h1 class="entry-title">','</h1>' ); ?>
                                        <p>
                                            <?php $gender = get_post_meta( get_the_ID(), 'personal_gender', true); ?>
                                            <?php if($gender == "Male"): ?>
                                                Mr
                                            <?php elseif($gender == "Female"): ?>
                                                Mrs
                                            <?php endif; ?>
                                            <?php the_title(); ?> did
                                            <?php if($gender == "Male"): ?>
                                                his
                                            <?php elseif($gender == "Female"): ?>
                                                her
                                            <?php endif; ?> 
                                            <?php echo get_post_meta( get_the_ID(), 'education_graduation', true); ?> in <?php echo get_post_meta( get_the_ID(), 'education_specialisation', true); ?> from <?php echo get_post_meta( get_the_ID(), 'education_college-university', true); ?> in the year <?php echo get_post_meta( get_the_ID(), 'education_graduation-year', true); ?> . 
                                            <?php if($gender == "Male"): ?>
                                                He
                                            <?php elseif($gender == "Female"): ?>
                                                She
                                            <?php endif; ?> is highly skilled in <?php echo get_post_meta( get_the_ID(), 'skills_primary', true); ?>. 
                                            <?php if($gender == "Male"): ?>
                                                He
                                            <?php elseif($gender == "Female"): ?>
                                                She
                                            <?php endif; ?>lives in <?php echo get_post_meta( get_the_ID(), 'personal_city', true); ?>, <?php echo get_post_meta( get_the_ID(), 'personal_state', true); ?> and can be contacted via <?php echo get_post_meta( get_the_ID(), 'personal_email', true); ?> and <?php echo get_post_meta( get_the_ID(), 'personal_phone-number', true); ?>.
                                        </p>
                                    </div>    
                                </article>
                                <div class="col-lg-12 info_block">
                                    <h3>Personal Information </h3>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 block_info">
                                            <P><span class="dark_head">Name : </span><?php echo the_title(); ?></P>
                                            <P><span class="dark_head">Gender : </span><?php echo get_post_meta( get_the_ID(), 'personal_gender', true); ?></P>
                                            <P><span class="dark_head">Email : </span><?php echo get_post_meta( get_the_ID(), 'personal_email', true); ?></P>
                                        </div>
                                        <div class="col-lg-6 block_info">
                                            <P><span class="dark_head">Phone : </span><?php echo get_post_meta( get_the_ID(), 'personal_phone-number', true); ?></P>
                                            <P><span class="dark_head">Location : </span><?php echo get_post_meta( get_the_ID(), 'personal_state', true); ?></P>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 info_block">
                                    <h3>Education </h3>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 block_info">
                                            <P><span class="dark_head">Graduation : </span><?php echo get_post_meta( get_the_ID(), 'education_graduation', true); ?></P>
                                            <P><span class="dark_head">Graduation Grade/Percentage : </span><?php echo get_post_meta( get_the_ID(), 'education_graduation-grade-percentage', true); ?></P>
                                            <P><span class="dark_head">Graduation Year : </span><?php echo get_post_meta( get_the_ID(), 'education_graduation-year', true); ?></P>
                                            <P><span class="dark_head">Specialisation : </span><?php echo get_post_meta( get_the_ID(), 'education_specialisation', true); ?></P>
                                            <P><span class="dark_head">College/University : </span><?php echo get_post_meta( get_the_ID(), 'education_college-university', true); ?></P>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 info_block">
                                    <h3>Skills </h3>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 block_info">
                                            <P><span class="dark_head">Primary : </span><?php echo get_post_meta( get_the_ID(), 'skills_primary', true); ?></P>
                                            <P><span class="dark_head">Secondary : </span><?php echo get_post_meta( get_the_ID(), 'skills_secondary', true); ?></P>
                                            <P><span class="dark_head">Certifications : </span><?php echo get_post_meta( get_the_ID(), 'skills_certifications', true); ?></P>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 info_block">
                                    <h3>Pitch </h3>
                                    <div class="col-lg-12">
                                        <P><?php the_content(); ?></P>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;       
                        ?>
                    </div>
				</div>
            </div>
        </section>

<?php get_footer(); ?>