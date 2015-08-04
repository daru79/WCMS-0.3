<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php foreach($meta_tags as $item) { ?>
                    
                    <p>Copyright &copy; <strong><?php print $item->c2_meta_copyright; ?> 2015</strong></p>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php print base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    </script>

</body>

</html>