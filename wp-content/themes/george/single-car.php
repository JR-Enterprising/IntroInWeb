<?php
get_header();
// $content = get_post();
// echo $content->post_content();
// // get_footer();
// if(have_posts()){
//     while(have_posts()){
//         the_post();
//     }
// }
/*
while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; 
*/
?>
<div class="container-fluid"></div>
    <div id="classic-row-header" class="row">   
        <h1 id="classic-header"><?php the_title(); ?></h1>
    </div>
<?php
$counter = 0;
$repeater = get_field('rep1');
foreach($repeater as $row){ 
    $counter++;
    if($counter % 2 == 0){
        ?>
        <div class="row">
        <div id="col-p" class="col-6">
            <p id="classic-p"><?php echo $row['txt']; ?></p>
        </div>
        <div id="col-img" class="col-6">
            <img id="classic-img" src="<?php echo $row['img']['url']; ?>" alt="img">
        </div>
    </div>
    <?php
    }
    else{
    ?>
        <div class="row">
            <div id="col-img" class="col-6">
                <img id="classic-img" src="<?php echo $row['img']['url']; ?>" alt="img">
            </div>
            <div id="col-p" class="col-6">
                <p id="classic-p"><?php echo $row['txt']; ?></p>
            </div>
        </div>
        <?php
    }
}
?>
<?php
$counter = 0;
$video = get_field('file');
$atr = array('mp4'=>$video);
?>
    <div id="classic-row-video" class="row">
        <video id="classic-video" width="800px" height="340px" controls>
            <source src="<?php echo $video;?>" type="video/mp4";>
        </video>
    </div>
</div>
<?php
get_footer();
?>

