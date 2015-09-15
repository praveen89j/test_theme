
 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
 <script>
$(document).ready(function(){
	$("#edit-search-block-form--2").keyup(function(){
	//alert($(this).val());
	//alert('hi');
		$.ajax({
		type: "POST",
		url: "http://localhost/projects/jquery-ajax/readCountry.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#edit-search-block-form--2").css("background","#FFF url(http://localhost/projects/site/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#edit-search-block-form--2").val(val);
$("#suggesstion-box").hide();
}
</script>
<style>
#country-list{clear:both;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#edit-search-block-form--2{padding: 10px;border: #F0F0F0 1px solid;}
</style>
<div id="wrap">

  <header id="header" class="clearfix" role="banner">
    <div>
      <?php if ($logo): ?>
       <div id="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        </div>
      <?php endif; ?>
      <hgroup id="sitename">
        <h2><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h2>
        <p><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></p><!--site slogan-->
      </hgroup>
    </div>
	
    <nav id="navigation" class="clearfix" role="navigation">
      <div id="main-menu">
        <?php 
          if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
      </div>
    </nav><!-- end main-menu -->
  </header>
  
  <?php print render($page['header']); /* ?>

    <?php if (theme_get_setting('slideshow_display','business')): ?>
    <?php 
    $url1 = check_plain(theme_get_setting('slide1_url','business'));
    $url2 = check_plain(theme_get_setting('slide2_url','business'));
    $url3 = check_plain(theme_get_setting('slide3_url','business'));
    ?>
	 
      <div id="slider">
        <div class="main_view">
            <div class="window">
                <div class="image_reel">
                    <a href="<?php print url($url1); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-3'; ?>"></a>
                    <a href="<?php print url($url2); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-2.jpg'; ?>"></a>
                    <a href="<?php print url($url3); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-3.jpg'; ?>"></a>
                </div>
                <div class="descriptions">
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide1_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide2_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide3_desc','business')); ?></div>
                </div>
            </div>
        
            <div class="paging">
                <a rel="1" href="#">1</a>
                <a rel="2" href="#">2</a>
                <a rel="3" href="#">3</a>
            </div>
        </div>
      </div> 
	<?php endif; */?>   
  <?php print $messages; ?>
<?php print render($page['content']) ?>  

<?php print render($page['sidebar_first']) ?>  
  <!--END footer -->
  <?php print render($page['footer']) ?>
  
  <?php if (theme_get_setting('footer_copyright') || theme_get_setting('footer_credits')): ?>
  <div class="clear"></div>
  <div id="copyright">
    <?php if ($footer_copyright): ?>
      <?php print $footer_copyright; ?>
    <?php endif; ?>
    <?php if (theme_get_setting('footer_credits')): ?>
     
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
