<body>

    <?php foreach($meta_tags as $item) { ?>
    
    <div class="brand"><?php print $item->c2_meta_title; ?></div>
    <?php } ?>
    
    <?php foreach($contact as $item) { ?>
    
    <div class="address-bar"><?php print $item->c1_title; ?> | <a href="mailto:<?php print $item->c1_subtitle; ?>?subject=Zapytanie mailowe" target="_blank"><?php print $item->c1_subtitle; ?></a> | <?php print $item->c1_text; ?></div>
    <?php } ?>
    
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <?php foreach($meta_tags as $item) { ?>
                
                <a class="navbar-brand" href="<?php print base_url('start'); ?>"><?php print $item->c2_meta_title; ?></a>
                <?php } ?>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php print base_url('start'); ?>">start</a>
                    </li>
                    <li>
                        <a href="<?php print base_url('o_autorze'); ?>">o nas</a>
                    </li>
                    <li>
                        <a href="<?php print base_url('aktualnosci'); ?>">przyciemnianie</a>
                    </li>
                    <li>
                        <a href="<?php print base_url('galeria'); ?>">realizacje</a>
                    </li>
                    <li>
                        <a href="<?php print base_url('kontakt'); ?>">kontakt</a>
                    </li>
<!--                    <li>
                        <a href="<?php print base_url('linki'); ?>">linki</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>