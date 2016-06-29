<?php 
get_header();
?>
  <!-- Begin Wrapper -->
  <div class="wrapper">
    <div class="inner light no-margin">
      <div class="bannercontainer">
        <div class="banner">
          <ul>
            <li data-transition="random"> <img src="<?php bloginfo('template_url'); ?>/images/1.png" alt="" />
              <div class="caption sft red-bg" data-x="70" data-y="70" data-speed="300" data-start="1500" data-easing="easeOutExpo">从交易中感受外汇市场的魅力</div>
              <div class="caption sfl white-bg" data-x="70" data-y="151" data-speed="300" data-start="2100" data-easing="easeOutExpo"><i class="icon-check"></i> 周一到周五全天候交易，选择属于你的交易时间</div>
              <div class="caption sfl white-bg" data-x="70" data-y="198" data-speed="300" data-start="2700" data-easing="easeOutExpo"><i class="icon-check"></i> 优质强大的服务器带你进入高速电子交易时代</div>
              <div class="caption sfl white-bg" data-x="70" data-y="245" data-speed="300" data-start="3300" data-easing="easeOutExpo"><i class="icon-check"></i> MT4交易平台的多样化，激发你的交易潜能</div>
              <!-- <div class="caption sfb" data-x="70" data-y="319" data-speed="300" data-start="3900" data-easing="easeOutExpo"><a href="project.html" class="button big navy">View Projects</a></div> -->
            </li>
            <li data-transition="random"> <img src="<?php bloginfo('template_url'); ?>/images/2.jpg" alt="" />
              <div class="caption navy-bg sft" data-x="80" data-y="80" data-speed="300" data-start="800" data-easing="easeOutExpo">最专业的团队 ，最优质的服务，带给你最佳交易体验</div>
            </li>
            <li data-transition="random"> <img src="<?php bloginfo('template_url'); ?>/images/3.jpg" alt="" />
              <div class="caption navy-bg sft" data-x="80" data-y="80" data-speed="300" data-start="800" data-easing="easeOutExpo">实现人生目标，实现财富自由</div>
              <div class="caption sfb" data-autoplay="false" data-x="80" data-y="161" data-speed="700" data-start="1600" data-easing="easeOutExpo">
              </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
    </div>
    <div class="inner dark">
      <div class="aligncenter">
        <h1 class="lined">我们将在您的外汇交易中为您提供最优质的服务</h1>
        <p class="description">想要在变化多端的外汇市场中占得先机，需要对外汇市场的全面理解，以及正确的交易心态，基本面技术面的熟练把控，完整的交易策略等一系列交易技巧。J MERIT 希望能帮助每一位交易者在外汇市场中实现目标。</p>
        <!-- <a href="pricing-table.html" class="button big">See All Prices</a>  -->
        </div>
    </div>
    <div class="inner light">
      <h2>为什么选择我们？</h2>
      <!-- <p><?php echo $lang['INDEX_WHY_CHOOSE_US_TITLE']?></p> -->
      <br />
      <div class="services">
        <div class="one-half"> <i class="icon-paper-plane special"></i>
          <div class="info">
            <h3 class="lined">优质的服务</h3>
            <p>提供全程中文授课，一对一讲解技术指标等内容，以及定期线上讲座交流让你足不出户全面了解外汇市场动态。课程内容针对客户全部免费，客人也可以随时与我们专业的分析师交流沟通来进一步提升交易水平。</p>
          </div>
        </div>
        <div class="one-half last"> <i class="icon-briefcase-1 special"></i>
          <div class="info">
            <h3 class="lined">稳定的报价</h3>
            <p>J MERIT 的合作方VANTAGE FX所提供报价为21家海内外知名投行银行报价，包括JP摩根银行，瑞银集团，美国银行，高盛集团等。高流动性为投资者获得及时稳定的报价提供保障。</p>
          </div>
        </div>
        <div class="clear"></div>
        <br />
        <div class="one-half"> <i class="icon-lamp special"></i>
          <div class="info">
            <h3 class="lined">产品种类优势</h3>
            <p>通过我们投资者可以在VANTAGE FX MT4平台上交易40余种货币对，以及白银，原油，黄金，中国股指等商品股指期货。</p>
          </div>
        </div>
        <div class="one-half last"> <i class="icon-basket-1 special"></i>
          <div class="info">
            <h3 class="lined">资金保证</h3>
            <p>所有客户入金全部受NAB澳洲国立银行第三方监管账号管理，资金安全保证。出金和入金全部可以由客人在网上自行操作，方便快捷</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="inner dark">
      <div class="one">
        <h3 class="lined">每日行情</h3>
        <ul class="latest">
          <?php
          //   $args = array( 'numberposts' => '6' );
          //   $recent_posts = wp_get_recent_posts( $args );
          //   foreach( $recent_posts as $recent ){
          //     echo '<li>
          //   <div class="info">
          //     <div class="overlay"><a href="' . get_permalink($recent["ID"]) . '"><img src="/images/post/1.jpg" alt="" /></a></div>
          //     <div class="date">'.$recent["post_date"]().'</div>
          //   </div>
          //   <div class="text">
          //     <h4><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h4>
          //     <p>由于美国上周五糟糕的非农数据使得美元大幅承压</p>
          //   </div>
          // </li> ';
          //   }
          $recent_args = array(
              'numberposts' => '6' 
          );

          $recent_posts = new WP_Query( $recent_args );
          if ( $recent_posts -> have_posts() ) :
              while ( $recent_posts -> have_posts() ) : $recent_posts -> the_post();

              ?>
              <li>
                <div class="info">
                  <div class="overlay"><a href="<?php the_permalink(); ?>">
                    <img src="<?php echo catch_that_image(); ?> " alt="" style = "width:70px;height:70px;"/></a></div>
                  <div class="date"><?php the_time('d,m'); ?></div>
                </div>
                <div class="text">
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                  <p><?php the_content( '', TRUE ); ?> </p>
                </div>
              </li>
              <?php

              endwhile;
          endif;
          ?>
        </ul>
      </div>
      <div class="one-third">
      </div>
      <div class="one-third last">
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-- End Wrapper --> 

<?php
get_footer();
?>