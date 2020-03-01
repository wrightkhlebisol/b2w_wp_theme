<?php
// ADVANCED CUSTOM FIELDS
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_one_title = get_field('reason_one_title');
$reason_one_description = get_field('reason_one_description');
$reason_two_title = get_field('reason_two_title');
$reason_two_description = get_field('reason_two_description');
?>


<!-- BOOST YOUR INCOME
	================================================== -->
<section id="boost-income">
    <div class="container">

        <div class="section-header">
            <!-- Did user upload image? -->
            <?php if (!empty($income_feature_image)) : ?>
                <img src="<?php echo $income_feature_image['url'] ?>" alt="<?php echo $income_feature_image['alt'] ?>">
            <?php endif; ?>
            <h2><?php echo $income_section_title ?></h2>
        </div><!-- section-header -->

        <p class="lead"><?php echo $income_section_description ?></p>
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $reason_one_title ?></h3>
                <p><?php echo $reason_one_description ?></p>
            </div><!-- end col -->

            <div class="col-sm-6">
                <h3><?php echo $reason_two_title ?></h3>
                <p><?php echo $reason_two_description ?></p>
            </div><!-- end col -->
        </div><!-- row -->

    </div><!-- container -->
</section><!-- boost-income -->