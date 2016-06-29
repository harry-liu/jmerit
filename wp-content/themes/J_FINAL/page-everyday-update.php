<?php 
get_header();
?>
  <!-- End Top Wrapper --> 
  <!-- <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> -->
  <!-- Begin Wrapper -->
    <div class="wrapper">
    <div class="inner dark">
      <div class="page-intro clearfix">
        <h1 class="page-title">每日行情</h1>
      </div>
      <div id="portfolio">
        <ul class="items col4">
<?php
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// the query
$the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged ); 
?>

<?php if ( $the_query->have_posts() ) : ?>

<?php
// the loop
while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>
              <li class="item">
                <div class="overlay">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo catch_that_image(); ?>" alt="" style = "width:238px;height:159px"/>
                    </a>
                </div>
                <div class="info">
                  <h4 class="long-lined">
                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                  </h4>
                  <p><?php the_content( '', TRUE ); ?></p>
                  <a href="<?php the_permalink(); ?>" class="more">查看详情 →</a> 
                </div>
              </li>
<?php endwhile; ?>


        </ul>
<?php

// next_posts_link() usage with max_num_pages
next_posts_link( '往后>>', $the_query->max_num_pages );

previous_posts_link( '<<往前' );
?>

<?php 
// clean up after the query and pagination
wp_reset_postdata(); 
?>

<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
      </div>
    </div>
  </div>
  <!-- End Wrapper --> 
<?php 
get_footer();
?>