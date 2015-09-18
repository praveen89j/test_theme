<script>
jQuery(document).ready(function(){
	 jQuery(".expand_menu").hide();
    jQuery(".mobile_menu").click(function(){
        jQuery(".expand_menu").toggle();
    });
});
</script>
<div class="wrapper">
 
  <header class="l-header" role="banner">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo">
		<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>
    <div class="login_status">
      <span><?php global $user,$base_url; if(isset($user->name) && !empty($user->name)) { echo 'welcome : '.$user->name; } else { echo "<a href='$base_url/user'>Login</a>"; }?></span>
    </div>
      <?php print render($page['branding']); ?>
    <!--</div>-->

  </header>
 <div class="mobile_menu">Expand Menu</div>
    <div class="expand_menu"><?php print render($page['header']); ?></div>
    <?php print render($page['navigation']); ?>
 
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
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
      <?php //print $feed_icons; ?>
    </div>

    <?php //print render($page['sidebar_first']); ?>
    <?php //print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>

