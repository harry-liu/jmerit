<?php 

//nav
register_nav_menus(array(
	'language' => __('Language Menu'),
	'en' => __('EN Menu'),
	'cn' => __('CN Menu')
));

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}

// function myStartSession() {
//     if(!session_id()) {
//         session_start();
//     }
// }

// function myEndSession() {
//     session_destroy ();
// }

// add_action('init', 'myStartSession', 1);
// add_action('wp_logout', 'myEndSession');
// add_action('wp_login', 'myEndSession');