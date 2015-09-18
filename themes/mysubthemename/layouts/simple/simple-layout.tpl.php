<div class="wrapper">
 
  <header class="l-header" role="banner">
    <!--<div class="l-branding">-->
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
<div class="main_menu">
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
</div>
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

    <?php //print render($page['sidebar_first']); ?>
    <?php //print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>

