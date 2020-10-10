<?php
/**
 * Template Name: Template Supercar
 * Template Post Type: page
 *
 */
get_header();
$supercar = get_post();

?>
<div class="container-fluid">
    <div class="row">
        <div class="col col-sm">
            <h2 id="test"><?php echo $supercar->post_title; ?></h2>
        </div>
    </div>
    <div class="row">
        <p><?php echo $supercar->post_content; ?></p>
    </div>
</div>

<?php get_footer(); ?>
