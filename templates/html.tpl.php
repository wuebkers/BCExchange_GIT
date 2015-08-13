<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<? print $language->language; ?>" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<? print $language->language; ?>" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<? print $language->language; ?>" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<? print $language->language; ?>" class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<? print $language->language; ?>" class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="x-ua-compatible" content="IE=Edge"/> 
  <title><?php print $head_title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script>try{Typekit.load();}catch(e){}</script>
  <? include $directory . '/includes/apple-touch-icons.inc' ?>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
  <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="//cdn.jsdelivr.net/g/selectivizr@1.0"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-52388964-1', 'auto');
    ga('send', 'pageview');
  </script>

  <?php print $page_top; ?>
  
  <?= theme('status_messages') ?>

  <?php print $page; ?>
  
  <?php print $page_bottom; ?>

</body>
</html>
