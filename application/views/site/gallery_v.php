    <div class="container">

        <div class="row">
            <div class="box">
                
                <div class="col-lg-12">
                    <?php foreach($content as $item) { ?>
                    <?php if($item->c1_id == 15) { ?>
                    
                    <hr>
                    <h2 class="intro-text text-center"><?php print $item->c1_header; ?></h2>
                    <hr>
                    <?php } ?>
                    <?php } ?>
                    
                </div>
                <?php foreach($content as $item) { ?>
                <?php if($item->c1_id > 15) { ?>
                
                <div class="col-sm-4 text-center">
                    <a href="<?php print base_url('galeria/zdjecia/'.no_pl($item->c1_title).'/'.$item->c1_id); ?>"><img style="width: 100%;" class="img-responsive" src="<?php print base_url('uploads/'.$item->c1_pic); ?>" alt="<?php print $item->c1_title; ?>"></a>
                    <h3><?php print $item->c1_title; ?></h3>
                </div>
                <?php } ?>
                <?php } ?>
                
                <div class="clearfix"></div>
                
            </div>
        </div>

    </div>

    <!-- /.container -->