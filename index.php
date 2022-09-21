
<?php
    get_header();
?>

    <!-- Nav Start -->
        <?php
            get_template_part('template-part/content', 'nav');
        ?>
    <!-- Nav End -->

    <!-- Hero Start -->
        <?php
            get_template_part('template-part/content', 'hero');
        ?>
    <!-- Hero End -->

    <!-- Services Start -->
    <?php
            get_template_part('template-part/content', 'services');
        ?>
    <!-- Services End -->

    <!-- Details Start -->
        <?php
            get_template_part('template-part/content', 'details');
        ?>
    <!-- Details End -->

    <!-- Testimonial Start -->
    <?php
            get_template_part('template-part/content', 'testimonial');
        ?>
    <!-- Testimonial End -->

    <!-- News Letter Start -->
    <?php
            get_template_part('template-part/content', 'newsletter');
        ?>
    <!-- News Letter End -->


    <!--Footer Code -->
<?php
    get_footer();
?>
