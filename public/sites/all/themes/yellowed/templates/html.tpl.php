<?php
/**
 * @file
 * Yellowed theme's implementation to display the basic html
 * structure of a single Drupal page.
 */
?>

<!DOCTYPE html>
<head>
<script src="//assets.adobedtm.com/f65064a28f9fb640d4c6ce70f65c1160240a8224/satelliteLib-2c54d3dd45f6282a6e17973ff5b258ff33342fe7.js"></script>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<script type="text/javascript">_satellite.pageBottom();</script>
</body>
</html>
