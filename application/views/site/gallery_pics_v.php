    <div class="container">

        <div class="row">
            <div class="box">
                
                <div class="col-lg-12">
                    <?php foreach($content as $item) { ?>
                                        
                    <hr>
                    <h2 class="intro-text text-center"><?php print $item->c1_title; ?></h2>
                    <hr>
                    <?php } ?>
                                        
                </div>
                <?php foreach($pics as $item) { ?>

                <div class="col-sm-2 text-center">
                    <a class="fancybox" data-fancybox-group="gallery" href="<?php print base_url('uploads/'.$item->c11_pic); ?>" title="<?php print $item->c11_title; ?>"><img class="img-responsive thumbnail text-center" src="<?php print base_url('uploads/'.$item->c11_pic); ?>" alt="<?php print $item->c11_alt; ?>"></a>
                    <h6 class="visible-xs"><?php print $item->c11_title; ?></h6>
                </div>
                <?php } ?>
                
                <div class="clearfix"></div>
                
            </div>
        </div>

    </div>

    <!-- /.container -->