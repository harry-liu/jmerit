<?php 

get_header();

if(have_posts()){
	while (have_posts()):the_post();

?>


  <div class="wrapper">
    <div class="inner light">
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
    </div>
  </div>



<?php endwhile;
}

else{
	echo '<p>No content found</p>';
}
?>

<?php
get_footer();

?>