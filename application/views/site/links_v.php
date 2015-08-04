<div class="container">
        
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php foreach($content as $item) { ?>
                <?php if($item->c1_id == 9) { ?>
                
                <hr>
                <h2 class="intro-text text-center"><?php print $item->c1_header; ?></h2>
                <hr>
                <?php } ?>
                <?php } ?>
                
            </div>

            <?php foreach($content as $item) { ?>
            <?php if($item->c1_id > 9) { ?>
            
            <div class="col-sm-12 text-center">
                <h3><a href="http://<?php print $item->c1_title; ?>" target="_blank"><?php print $item->c1_title; ?></a></h3>
                <small><?php print $item->c1_text; ?></small>
            </div>
            <?php } ?>
            <?php } ?>
            
            <hr>
            
            <div class="clearfix"></div>
            <hr>

        </div>
    </div>
        
        

    </div>
    <!-- /.container -->