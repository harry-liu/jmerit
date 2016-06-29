<?php 

get_header();

if(have_posts()){
	while (have_posts()):the_post();

?>
<?php the_content(); ?>
<?php endwhile;
}

else{
	echo '<p>No content found</p>';
}
?>

<?php
get_footer();

?>