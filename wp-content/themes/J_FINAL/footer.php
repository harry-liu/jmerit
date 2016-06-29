
  <!-- Begin Footer Wrapper -->
  <footer> 
    <!-- Begin Inner -->
    <div class="inner" style = "padding-top:30px;padding-bottom:30px">
        <p style = "padding:0;text-align:center;font-size:10px">
        <?php 
          $link = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          if(strpos($link,'-en') == true){
            //$_SESSION['language'] = "en";
            echo "Trading forex and derivatives carries a high level of risk to your capital and you should only trade with the money you can afford to lose. J MERIT ACN:610 506 459 act as agent of VANTAGE FX PTY.LTD ACN:140 903 886, AFSL 428901. The information in this website is of a general nature only and may contain advice that is not based on your personal objectives, financial situation or needs.";
          }
          else{
            echo "J MERIT 有限公司 （ACN: 610 506 459） 是Vantage Global Prime Pty Ltd有限公司 (ACN 157 768 566 AFSL 428901）的授权代表。网站内容不涉及个人投资建议。我们不了解您的个人资金状况以及具体投资情况, 所以我们无法给您提供具体的投资建议。任何问题可以通过电话 +61 2 9275 8811或者 Email： <a href='mailto:infor@jmerit.com.au'>info@jmerit.com.au</a>  联系我们。";
          }
        ?>
        </p>
        <!-- <div class="clear"></div> -->
      </div>
    <!-- Begin Inner --> 
  </footer>
  <!-- End Footer Wrapper --> 
  
  <!-- Begin Sub Footer Wrapper -->
  <div class="subfooter"> 
    <!-- Begin Inner -->
    <div class="inner">
      <p>© 2016 JMERIT PTY LTD. All rights reserved.</p>
      <ul class="social">
        <li><a href="http://www.facebook.com/jmeritsydney"><i class="icon-s-facebook"></i></a></li>
        <li>
          <a href="" class = "we-chat-icon">
            <div class = "we-chat-container">
              <img src="<?php bloginfo('template_url'); ?>/images/wechat.png">
              <span class = "corner"></span>
            </div>
            <i class="icon-chat-1"></i>
          </a>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
    <!-- Begin Inner --> 
  </div>
  <!-- End Sub Footer Wrapper --> 

<?php wp_footer(); ?>
</div>
<!-- End Body Wrapper --> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<script type="text/javascript">
	$(".menu-item").has('ul').hover(
		function() {
			$( this ).children('a').addClass( "selected" );
		}, function() {
			$( this ).children('a').removeClass( "selected" );
		}
	);
</script>
</body>
</html>