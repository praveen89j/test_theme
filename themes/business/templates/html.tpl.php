<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<link href="<?php print base_path() . drupal_get_path('theme', 'business') . '/styles/ticker-style.css'; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script> 
<script src="<?php print base_path() . drupal_get_path('theme', 'business') . '/includes/jquery.ticker.js'; ?>" type="text/javascript"></script>
<script src="<?php print base_path() . drupal_get_path('theme', 'business') . '/includes/site.js'; ?>" type="text/javascript"></script>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'business') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>