<script>
jQuery(document).ready(function(){
	 /*jQuery(".expand_menu").hide();*/
    jQuery(".mobile_menu").click(function(){
        jQuery(".expand_menu").toggle();
    });
});
</script>
<div class="wrapper">
 
  <header class="l-header" role="banner">
      <?php if ($logo): ?>
    <div class="site-logo"> 
	  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
	</div>
      <?php endif; ?>
    <div class="login_status">
	
	<?php global $user,$base_url; if(isset($user->name) && !empty($user->name)) {?>
	  <?php echo 'welcome : '.$user->name. ' | ';
         echo "<a href='$base_url/user/logout'>Logout</a>";
	  } else { echo "<a href='$base_url/user'>Login</a>";?>
	  <?php } ?>
 
    </div>
	<div class="mobile_menu"><span>Hoofdrubrieken</span></div>
    <div class="expand_menu">
		<?php print render($page['header']); ?>
	</div>
    <!---->
  </header>
 
<div class="clear"></div>
  <div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php //print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php //print $feed_icons; ?>
    </div>

  </div>
<div class="content_bottom"></div>
  <footer class="l-footer" role="contentinfo">
    <div class="footer_top"><?php print render($page['footer']); ?></div>
	<div class="clear"></div>
    <div class="footer_bottom">
     <img src="sites/default/files/oranjebalk.gif">	 	<div class="clear"></div>
	 &copy; All Rights Reserved.
	</div>
  </footer>
</div>
</div>
