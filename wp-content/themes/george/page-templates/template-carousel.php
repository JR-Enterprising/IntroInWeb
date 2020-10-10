<?php 
/**
 *  Template Name: Template Carousel
 *  Template Post Type: page, post
 */
    get_header();
?>
<?php 
    $img1 = get_field('img1');  
    $img2 = get_field('img2');
    $img3 = get_field('img3');
    $img4 = get_field('img4');
    $img5 = get_field('img5');
    $head1 = get_field('header1');
    $head2 = get_field('header2');
    $head3 = get_field('header3');
    $head4 = get_field('header4');
    $head5 = get_field('header5');
    $par1 = get_field('paragraph1');
    $par2 = get_field('paragraph2');
    $par3 = get_field('paragraph3');
    $par4 = get_field('paragraph4');
    $par5 = get_field('paragraph5');
?>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide carusel" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                    <img class="carousel-image" class="d-block w-100" src="<?php echo $img1['url']; ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $head1; ?></h5>
                    <!-- <p><?php echo $par1; ?></p> -->
                    <?php echo $par1; ?>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" class="d-block w-100" src="<?php echo $img2['url']; ?>" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $head2; ?></h5>
                    <!-- <p><?php echo $par2; ?></p> -->
                    <?php echo $par2; ?>
                </div>
            </div>
            <div class="carousel-item"> 
                <img class="carousel-image" class="d-block w-100" src="<?php echo $img3['url']; ?>" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $head3; ?></h5>
                    <!-- <p><?php echo $par3; ?></p> -->
                    <?php echo $par3; ?>
                </div>
            </div>
            <div class="carousel-item"> 
                <img class="carousel-image" class="d-block w-100" src="<?php echo $img4['url']; ?>" alt="Fourth slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $head4; ?></h5>
                    <!-- <p><?php echo $par4; ?></p> -->
                    <?php echo $par4; ?>
                </div>
            </div>
            <div class="carousel-item"> 
                <img class="carousel-image" class="d-block w-100" src="<?php echo $img5['url']; ?>" alt="Fifth slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $head5; ?></h5>
                    <!-- <p><?php echo $par5; ?></p> -->
                    
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php get_footer(); ?>