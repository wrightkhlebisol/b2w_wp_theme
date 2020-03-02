<?php
$youtube_section_title = get_field('youtube_section_title');
$youtube_section_object = get_field('youtube_section_object');
?>
<!-- VIDEO FEATURETTE
	================================================== -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $youtube_section_title ?></h2>
                <?php echo $youtube_section_object ?>
            </div><!-- end col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- featurette -->