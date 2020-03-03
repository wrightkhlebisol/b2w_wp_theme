<?php
$youtube_section_title = get_field('youtube_section_title');
$youtube_section_url = get_field('youtube_section_url');
?>
<!-- VIDEO FEATURETTE
	================================================== -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $youtube_section_title ?></h2>
                <iframe width="100%" height="415" src="<?php echo $youtube_section_url ?>" frameborder="0" allowfullscreen></iframe>
            </div><!-- end col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- featurette -->