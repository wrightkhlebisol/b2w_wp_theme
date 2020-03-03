<?php
$instructor_section_title = get_field('instructor_section_title');
$instructor_section_author_name = get_field('instructor_section_author_name');
$instructor_section_twitter = get_field('instructor_section_twitter');
$instructor_section_facebook = get_field('instructor_section_facebook');
$instructor_section_google = get_field('instructor_section_google');
$instructor_section_body = get_field('instructor_section_body');
$instructor_section_numbers_title = get_field('instructor_section_numbers_title');
$instructor_section_numbers_students = get_field('instructor_section_numbers_students');
$instructor_section_numbers_reviews = get_field('instructor_section_numbers_reviews');
$instructor_section_numbers_courses = get_field('instructor_section_numbers_courses');
?>

<!--============== INSTRUCTOR ================== -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?php echo $instructor_section_title ?> <small><?php echo $instructor_section_author_name ?></small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4">
                        <a href="https://twitter.com/<?php echo $instructor_section_twitter ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://facebook.com/<?php echo $instructor_section_facebook ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $instructor_section_google ?>https://plus.google.com/+BradHussey" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div><!-- end col -->

                </div><!-- row -->

                <?php echo $instructor_section_body ?>

                <h3><?php echo $instructor_section_numbers_title ?> <small>They Don't Lie</small></h3>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $instructor_section_numbers_students ?> <span>students</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $instructor_section_numbers_reviews ?> <span>reviews</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $instructor_section_numbers_courses ?> <span>courses</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->
                </div><!-- row -->

            </div><!-- end col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- instructor -->