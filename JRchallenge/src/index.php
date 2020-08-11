<?php
        include 'php/middle.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Challenge</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="styles/nav.css">
        <link rel="stylesheet" type="text/css" href="styles/stelute.css">
        <link rel="stylesheet" type="text/css" href="styles/middle.css">
        <link rel="stylesheet" type="text/css" href="styles/quantity.css">
        <link rel="stylesheet" href="slick-master/slick/slick-theme.css">
        <link rel="stylesheet" href="slick-master/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="styles/slidershow.css">
        <link rel="stylesheet" type="text/css" href="styles/emailsubscribe.css">
        <link rel="stylesheet" type="text/css" href="styles/bottom.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="container-fluid">
            <div class="row">
                <!-- <ul class="list-group list-group-horizontal"> -->
                    <div class="col-sm-1"><li class="list-group-item pl-sm-2 pt-sm-2"><a href="#"><img src="images/hamburger.png" alt="menu"></a>
                    </li></div>
                    <div class="col-sm-2"><li class="list-group-item border-right-0 pl-sm-3"><a class="cell"
                    href="#"><img src="images/logo-stile.png" alt="Logo"></a></li></div>
                    <div class="col-sm-1"><li class="list-group-item border-left-0 border-right-0"></li></div>
                    <div class="col-sm-1"><li class="list-group-item border-left-0 border-right-0"><a class="cell" href="#">Collection</a></li></div>
                    <div class="col-sm-1"><li class="list-group-item border-left-0 border-right-0"><a class="cell" href="#">Catalog</a></li></div>
                    <div class="col-sm-1"><li class="list-group-item border-left-0 border-right-0"><a class="cell" href="#">About Us</a></li></div>
                    <div class="col-sm-1"><li class="list-group-item border-left-0 border-right-0"><a class="cell" href="#">Blog</a></li></div>
                    <div class="col-sm-1"><li class="list-group-item border-left-0"></li></div>
                    <div class="col-sm-1"><li class="list-group-item  pt-sm-3"><a class="cell" href="#"><img src="images/glass1.png" alt="chair"></a></li></div>
                    <div class="col-sm-1"><li class="list-group-item pl-sm-2"><a class="cell" href="#"><img src="images/person.png" alt="chair">My account</a></li></div>
                    <div class="col-sm-1"><li class="list-group-item pl-sm-3 pt-sm-4"><a class="cell" href="#"><img src="images/cart.png" alt="chair">Cart</a></li></div>
                    
                <!-- </ul> -->
            </div>
        </div>

        <div class="container-fluid">
            <div class = "row mt-sm-5 mb-sm-5">
                <div class="col-sm-2">
                </div>
                <div class = "col-sm-10">
                    <a class="nav_links" href="#">Home</a>
                    <p class="nav_links"> / </p>
                    <a class="nav_links" href="#">Collection</a>
                    <p class="nav_links"> / </p>
                    <a class="nav_links" href="#">New arivals</a>
                    <p class="nav_links"> / </p>
                    <a id="nume_cap" class="nav_links" href="#"><?php echo $obiect->nume ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4 pr-sm-0">
                    <div class = "bigimg">
                        <img id='bigIMG' class ="responsive" src="<?php echo $obiect->poza1 ?>" alt="chair">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class = "smallimg">
                        <img id="0" class = "img-fluid border-bottom-0" src="<?php echo $obiect->poza1 ?>" onclick="myFunction(this)" alt="img">
                        <img id="1" class = "img-fluid border-bottom-0" src="<?php echo $obiect->poza2 ?>"  onclick="myFunction(this)" alt="img">
                        <img id="2" class = "img-fluid border-bottom-0" src="<?php echo $obiect->poza3 ?>"  onclick="myFunction(this)" alt="img">
                        <img id="3" class = "img-fluid border-bottom-0" src="<?php echo $obiect->poza4 ?>"  onclick="myFunction(this)" alt="img">
                        <img id="4" class = "img-fluid border-bottom-0" src="<?php echo $obiect->poza5 ?>"  onclick="myFunction(this)" alt="img">
                        <img id="5" class = "img-fluid border-bottom-0" src="<?php echo $obiect->poza6 ?>"  onclick="myFunction(this)" alt="img">
                        <img id="6" class = "img-fluid" src="<?php echo $obiect->poza7 ?>"  onclick="myFunction(this)" alt="img">
                        <script src="js/smallimgfunc.js"></script>
                        </div>
                </div>
                <div class="col-sm-5">
                    <div class="col-sm pt-sm-5 pl-sm-5">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="refine" name="forma">
                        <div class="rating">
                            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                            <label for="star5">☆</label>
                            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                            <label for="star4">☆</label>
                            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                            <label for="star3">☆</label>
                            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                            <label for="star2">☆</label>
                            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                            <label for="star1">☆</label>
                            <input type="submit" id="submit" name="submit">
                            <script src="js/preventresubmission.js"></script>
                        <div class="clear"></div>
                    </div>
                </form>
                        <span class="number_rating">
                            <?php
                                echo $obiect->number_rating;
                                echo " reviews";
                            ?>
                        </span>
                    </div>
                    <div class="col-sm pl-sm-2">
                        <div class="name">
                            <?php
                                echo $obiect->nume;
                            ?>
                        </div>
                    </div>
                    <div class="col-sm pt-sm-5">
                        <span class="price">    
                                <?php
                                    echo $obiect->pret;
                                ?>
                                
                        </span>
                        <span class="discounted_price">    
                                <?php
                                    echo $obiect->pret_redus;
                                ?>
                        </span>
                    </div>
                    <div class="col-sm" id="quantity-col">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                                </div>
                            <div class="submit-quantity">
                                <input type="submit" id="submit-quantity" name="submit" value="ADD TO CART">
                            </div>
                            <div class="addtowish-quantity">
                                <input type="submit" id="addtowish" name="submit" value="Add to wish list">
                            </div>
                            <script src="js/quantity.js"></script>
                        </form>
                    </div> 
                    <div class="col-sm mt-sm-5">
                        <a href="#" id="share">Share</a>
                        <a href="#" id="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" id="facebook"><i class="fa fa-facebook-official"></i></a>
                        <a href="#" id="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" id="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>  
            </div>
        </div>
        <div class="container-fluid mt-sm-5 pt-sm-5">
            <div class="row mt-sm-5 pt-sm-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-9">
                    <div class="switchbtn">
                        <button class="txtbtn clickz" id="txtbtn1" type="button" onclick="showText1(this)">DESCRIPTION
                        </button>
                        <button class="txtbtn" id="txtbtn2" type="button" onclick="showText2(this)">WARRANTY</button>
                        <button class="txtbtn" id="txtbtn3" type="button" onclick="showText3(this)">REVIEWS</button>
                        <script src="js/showtext.js"></script>
                        <p id="textchange">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsum    reiciendis non perferendis assumenda magni dolore alias quod inventore facilis!</p>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br><br><br><br>
            <!-- <div class="row" id="text-slider-line">

            </div> -->
            <div class="row" id="text-slider">
                <p id="text-slider-line">RELATED PRODUCTS</p>
            </div>
            <div class="row">
                <section class="slider-area slider">
                    <!-- <div><img src="images/chicsofax2/1.jpeg" height="350px"alt="chair"></div>
                    <div><img src="images/designer/1.jpg" height="350px" alt="chair"></div>
                    <div><img src="images/designerchair/1.jpg" height="350px" alt="chair"></div>
                    <div><img src="images/industrial/1.jpg" height="350px" alt="chair"></div>
                    <div><img src="images/random/1.jpg" height="350px" alt="chair"></div> -->
                    <div><a href="#"><img src="images/cropped/1.png" height="450px" alt="chair"></a></div>
                    <div><a href="#"><img src="images/cropped/2.png" height="450px" alt="chair"></a></div>
                    <div><a href="#"><img src="images/cropped/3.png" height="450px" alt="chair"></a></div>
                    <div><a href="#"><img src="images/cropped/4.png" height="450px" alt="chair"></a></div>
                    <div><a href="#"><img src="images/cropped/2.png" height="450px" alt="chair"></a></div>
                </section>
                <script src="slick-master/slick/slick.js"></script>
                <script src="./js/sliderslick.js"></script>
            </div>
            <div class="row" id="emailrow">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4 pt-sm-5">
                    <h1 style="font-family: 'Rubik', sans-serif; opacity:0.8;">Join Our Newsletter</h1>
                    <p style="font-family: Arial, Helvetica, sans-serif; opacity:0.9;">Subscribe today for free 10%</p>
                    <p style="font-family: Arial, Helvetica, sans-serif; opacity:0.9;">on your first purchase.</p>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-2 pt-sm-5">
                    <form action="php/sendemail.php" method="POST" id="emailform">
                        <input type="text" id="txtemail" name="email" placeholder="Your email">
                    </form>
                </div>
                <div class="col-sm-2 pt-sm-5">
                    <input type="submit" name="subscribe" value="SUBSCRIBE" id="submitemail" form="emailform">
                </div>
                <div class="col-sm-1">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-1">
                    <h6>Navigate</h6>
                    <ul id="navigateul">
                        <li><a href="">About Us</a></li>
                        <br>
                        <li><a href="">Blog</a></li>
                        <br>
                        <li><a href="">Contact Us</a></li>
                        <br>
                        <li><a href="">Sitemap</a></li>
                        <br>
                    </ul>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-1">
                    <h6>Categories</h6>
                    <ul id="navigateul">
                        <li><a href="">New Arivals</a></li>
                        <br>
                        <li><a href="">Featured</a></li>
                        <br>
                        <li><a href="">Catalog</a></li>
                        <br>
                        <li><a href="">Popular Brands</a></li>
                        <br>
                    </ul>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-1">
                    <h6>Collection</h6>
                    <ul id="navigateul">
                        <li><a href="">Tables</a></li>
                        <br>
                        <li><a href="">Lamps</a></li>
                        <br>
                        <li><a href="">Chairs</a></li>
                        <br>
                        <li><a href="">Sofas</a></li>
                        <br>
                    </ul>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;  123 Widget Street</h4>
                    <h4>Acmeville, AC 12345</h4>
                    <p id="txtbottom">hello@stilecompany.co</p>
                    <p id="cellphonebottom">+1-512-758-7588</p>
                </div>
                <div class="col-sm-1">
                </div>
            </div>
            <br><br>
            <div class="row" id="copyright">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5">
                    <p id="txtcopyright">Copyright &copy; 2017 Stile. by Selectlayers Inc. All Rights Reserved.| Powered by BigCommerce</p>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2 pt-sm-3">
                        <a href="#" style="padding:0; opacity:1;"id="share"><b>Get Social</b></a>
                        <a href="#" style="padding:8px;"id="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" style="padding:8px;" id="facebook"><i class="fa fa-facebook-official"></i></a>
                        <a href="#" style="padding:8px;" id="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" style="padding:8px;" id="instagram"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-sm-1">
                </div>
            </div>
        </div>
    </body>
</html>
