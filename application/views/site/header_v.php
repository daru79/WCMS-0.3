<!DOCTYPE html>
<html lang="pl">

<head>
<?php foreach($meta_tags as $item) { ?>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php print $item->c2_meta_description; ?>">
    <meta name="author" content="<?php print $item->c2_meta_copyright; ?>">
    <meta name="keywords" content="<?php print $item->c2_meta_keywords; ?>">
    <meta name="robots" content="<?php print $item->c2_meta_robots; ?>">

    <title><?php print $item->c2_meta_title; ?></title>
<?php } ?>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php print base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php print base_url('assets/site/css/custom.css'); ?>" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <!-- jQuery -->
    <script src="<?php print base_url('assets/site/js/jquery.js'); ?>"></script>
    
    <!-- Fancybox Gallery -->
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php print base_url('assets/site/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js'); ?>"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php print base_url('assets/site/plugins/fancybox/source/jquery.fancybox.js?v=2.1.5'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php print base_url('assets/site/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5'); ?>" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?php print base_url('assets/site/plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>" />
    <script type="text/javascript" src="<?php print base_url('assets/site/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?php print base_url('assets/site/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>" />
    <script type="text/javascript" src="<?php print base_url('assets/site/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="<?php print base_url('assets/site/plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>"></script>
    
    <!-- Add fancyBox settings -->
    <script type="text/javascript" src="<?php print base_url('assets/site/plugins/fancybox/settings.js'); ?>"></script>
    <!-- /. Fancybox Gallery -->
    
    <style>
        <?php foreach($bg as $item) { ?>
        
        body {
            font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
            background: url('<?php print base_url('uploads/'.$item->c11_pic); ?>') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        <?php } ?>
        
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>