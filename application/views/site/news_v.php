    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Oferta</h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <?php foreach($content as $item) { ?>
                    
                    <img class="img-responsive img-border img-thumbnail" src="<?php print base_url('uploads/'.$item->c1_pic); ?>" alt="<?php print $item->c1_title; ?>" width="450">
                    <h2><?php print $item->c1_title; ?>
                        <br>
<!--                        <small><?php print $item->c1_timestamp; ?></small>-->
                    </h2>
                    <p><?php print $item->c1_text; ?></p>
                    <hr>
                    <?php } ?>
                    
                </div>
                
            </div>
        </div>

    </div>
    <!-- /.container -->