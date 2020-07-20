<?php

require_once('wp_bootstrap_navwalker.php');

// function to Add Bootstrap to Theme. 

function script_bootstrap_cdn() {
    
    // javaScript
   wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'); 
   wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
   wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
   wp_enqueue_script( 'custom_script', get_theme_file_uri('assets/js/custom_script.js')); 
    
   // CSS
   wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
   wp_enqueue_style('font-awesome', get_theme_file_uri('assets/font-awesome.min.css'));
   wp_enqueue_style('responsive', get_theme_file_uri('assets/responsive.css'));
   wp_enqueue_style('customstyle', get_theme_file_uri('assets/customstyle.css'));
   wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'script_bootstrap_cdn' );

// Theme Support

    function wp6_theme_support(){
    // Custom Logo
    add_theme_support('custom-logo');

    // Feature Image
    add_theme_support( 'post-thumbnails' );

    // Navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    )); 
    }
    add_action('after_setup_theme', 'wp6_theme_support');

// Profile Custom Post Type 
require get_template_directory() .'/inc/profile.php';

// Metabox
require get_template_directory() .'/inc/personal_metabox.php';
require get_template_directory() .'/inc/education_metabox.php';
require get_template_directory() .'/inc/skills_metabox.php';


/**
 * Remove the slug from published post permalinks. Only affect our CPT though.
 */
function wpex_remove_cpt_slug( $post_link, $post, $leavename ) {
	if ( 'profile_post_type' != $post->post_type || 'publish' != $post->post_status ) {
		return $post_link;
	}
	$post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
	return $post_link;
}
add_filter( 'post_type_link', 'wpex_remove_cpt_slug', 10, 3 );


/**
 * Some hackery to have WordPress match postname to any of our public post types
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * Typically core only accounts for posts and pages where the slug is /post-name/
 */
function wpex_parse_request_tricksy( $query ) {
	// Only noop the main query
	if ( ! $query->is_main_query() )
		return;
	// Only noop our very specific rewrite rule match
	if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
		return;
	}
	// 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
	if ( ! empty( $query->query['name'] ) ) {
		$query->set( 'post_type', array( 'post', 'profile_post_type', 'page' ) );
	}
}
add_action( 'pre_get_posts', 'wpex_parse_request_tricksy' );

if(isset($_POST['ispost']) ){

    $gender = $_POST['gridRadios'];
    $email = $_POST['inputEmail3'];
    $phone = $_POST['inputPhone3'];
    $state = $_POST['inputState3'];
    $city = $_POST['inputCity3'];

    $graduation = $_POST['inputGraduation3'];
    $percentage = $_POST['inputPercentage3'];
    $year = $_POST['inputYear3'];
    $specialisation = $_POST['inputSpecialisation3'];
    $college = $_POST['inputCollege3'];

    $primary = $_POST['inputPrimary3'];
    $secondary = $_POST['inputSecondary3'];
    $certification = $_POST['inputCertifications3'];
    
    $my_post = array(
        'post_type' => 'profile_post_type',
        'post_title' => $_POST['inputName3'],
        'post_content' => $_POST['inputPitch3'],
        'post_status' => 'publish',
    );

    $pid = wp_insert_post($my_post);


    if(!function_exists('wp_generate_attachment_metadata')){
            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
			require_once(ABSPATH . "wp-admin" . '/includes/file.php');
			require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
    if ($_FILES) {
        foreach ($_FILES as $file => $array){
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK){
                return "upload error : " . $_FILES[$file]['error'];
            }
            $attach_id = media_handle_upload( $file, $pid );
        }
    }
    if ($attach_id > 0)
		{
			//and if you want to set that image as Post then use:
			update_post_meta($pid, '_thumbnail_id', $attach_id);
		}

    
        

    add_post_meta($pid, 'personal_gender', $gender, true);
    add_post_meta($pid, 'personal_email', $email, true);
    add_post_meta($pid, 'personal_phone-number', $phone, true);
    add_post_meta($pid, 'personal_state', $state, true);
    add_post_meta($pid, 'personal_city', $city, true);

    add_post_meta($pid, 'education_graduation', $graduation, true);
    add_post_meta($pid, 'education_graduation-grade-percentage', $percentage, true);
    add_post_meta($pid, 'education_graduation-year', $year, true);
    add_post_meta($pid, 'education_specialisation', $specialisation, true);
    add_post_meta($pid, 'education_college-university', $college, true);

    add_post_meta($pid, 'skills_primary', $primary, true);
    add_post_meta($pid, 'skills_secondary', $secondary, true);
    add_post_meta($pid, 'skills_certifications', $certification, true);

    echo 'Saved your post successfully! :)';

    die;
}
