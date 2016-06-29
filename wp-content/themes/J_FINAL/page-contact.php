<?php get_header(); ?>

  <div class="wrapper">
    <div class="inner light">
      <div class="page-intro clearfix">
        <h1 class="page-title">联系我们</h1>
      </div>
      <div class="map" style = "width:50%;float:left">
        <!-- <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?source=embed&amp;hl=en-US&amp;ie=UTF8&amp;ll=-33.8709255,151.2042375&amp;spn=0.099472,0.263844&amp;t=m&amp;z=13&amp;output=embed"></iframe> -->
        <div id="googleMap" style="width:100%;height:340px"></div>
      </div>
      
      <!-- Begin Sidebar -->
      <aside class="sidebar" style = "width:50%;float:left;padding-left:20px">
        <div class="sidebox">
          <h3>地址</h3>
          <!-- <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p> -->
          <i class="icon-location contact"></i> level 32,1 Market St Sydney NSW 2000 <br />
          <i class="icon-phone contact"></i> (02)92758811<br />
          <i class="icon-mail contact"></i> <a href="mailto:infor@jmerit.com.au">info@jmerit.com.au</a> 
          <img src="<?php bloginfo('template_url'); ?>/images/wechat.png" style = "width:47%">
        </div>
      </aside>
      <!-- End Sidebar -->

      <br />
      <!-- Begin Content -->
      <section class="content" style = "margin-top:20px">
        <!-- <h2>Feel Free to Drop Us a Line</h2>
        <p>Maecenas vehicula condimentum consequat. Ut suscipit ipsum eget leotero convallis feugiat upsoyut fermentum leo auctor consequat turpis aturo nisiper.</p> -->
        <!-- Begin Form -->
<div role="form" class="wpcf7" id="wpcf7-f164-p167-o1" lang="zh-CN" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/test-contact-2/#wpcf7-f164-p167-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="164" />
<input type="hidden" name="_wpcf7_version" value="4.4.2" />
<input type="hidden" name="_wpcf7_locale" value="zh_CN" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f164-p167-o1" />
<input type="hidden" name="_wpnonce" value="d21ed90a30" />
</div>
<p>你的名字 （必填）<br />
    <span class="wpcf7-form-control-wrap text-181"><input type="text" name="text-181" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-name" aria-required="true" aria-invalid="false" placeholder="name"/></span></p>
<p>你的邮箱 （必填）<br />
    <span class="wpcf7-form-control-wrap email-709"><input type="email" name="email-709" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input-email" aria-required="true" aria-invalid="false" placeholder="email" /></span></p>
<p>电话<br />
    <span class="wpcf7-form-control-wrap number-944"><input type="number" name="number-944" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number input-number" aria-invalid="false" placeholder="phone number" /></span></p>
<p>你的留言 （必填）<br />
    <span class="wpcf7-form-control-wrap textarea-994"><textarea name="textarea-994" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required input-text" aria-required="true" aria-invalid="false"></textarea></span> </p>
<p><input type="submit" value="submit" class="wpcf7-form-control wpcf7-submit input-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
        <!-- End Form --> 
        
      </section>
      <!-- End Content --> 
      
      <div class="clear"></div>
    </div>
  </div>

<?php get_footer(); ?>
