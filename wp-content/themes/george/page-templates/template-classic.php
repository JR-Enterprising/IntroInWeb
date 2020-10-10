<?php 
/**
 *  Template Name: Template Classic
 *  Template Post Type: page, post
 */
    get_header();
    $classic = get_post();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-sm">
            <h2 id="test"><?php echo $classic->post_title; ?></h2>
        </div>
    </div>
    <div class="row">
        <p><?php echo $classic->post_content; ?></p>
    </div>
</div>


<?php get_footer(); ?>