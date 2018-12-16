<?php
include "php/db.php";

$id = $_GET['id'];

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "select * from `goods` where id=$id ";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);

$row = mysqli_fetch_assoc($res);

$img = "../images/".$row['photo'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_product.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
<header class="header">
    <div class="container header-flex">
        <div class="header-left">
            <a href="index.php" class="link-logo">
                <img src="images/logo.png" alt="logo"><h5>BRAN<span>D</span></h5>
            </a>
            <div class="browse"><a href="#" class="browse_menu">Browse <i class="fas fa-sort-down"></i></a>
                <div class="mega1">
                    <div class="triangle1"></div>
                    <div class="mega_flex1">
                        <h3>Women</h3>
                        <ul class="mega_list1">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Denim</a></li>
                            <li><a href="catalog.php">Leggings/Pants</a></li>
                            <li><a href="catalog.php">Skirts/Shorts</a></li>
                            <li><a href="catalog.php">Accessories </a></li>
                        </ul>
                        <h3>Man</h3>
                        <ul class="mega_list1">
                            <li><a href="catalog.php">Tees/Tank tops</a></li>
                            <li><a href="catalog.php">Shirts/Polos</a></li>
                            <li><a href="catalog.php">Sweaters</a></li>
                            <li><a href="catalog.php">Sweatshirts/Hoodies</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Jackets/vests</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <form action="#">
                <input type="text" placeholder="Search for Item...">
                <button type="submit"><i class="far fa-paper-plane"></i></button>
            </form>
        </div>
        <div class="header-right">
            <div class="cart-hover">
                <a href="shopping_cart.php"><img src="images/cart.svg" alt="cart"></a>

                <!--******************DROP DOWN CART START******************************-->

                <div class="cart-dropdown">
                    <div class="triangle2"></div>
                    <div class="cart-flex">
                        <div class="cart-total">
                            <h4>TOTAL</h4>
                            <h4>$0.00</h4>
                        </div>
                        <button type="submit" class="checkout">Checkout</button>
                        <button type="submit" class="to-cart">Go to cart</button>
                    </div>
                </div>
            </div>

            <!--******************DROP DOWN CART END******************************-->

            <form action="#">
                <button type="submit" class="account">My Account</button>
            </form>
        </div>
    </div>
</header>
<!--********************HEADER END*********************************-->

<!--********************NAV START*********************************-->
<nav>
    <div class="container">
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="catalog.php">Man</a>
                <div class="mega">
                    <div class="triangle3"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Denim</a></li>
                            <li><a href="catalog.php">Leggings/Pants</a></li>
                            <li><a href="catalog.php">Skirts/Shorts</a></li>
                            <li><a href="catalog.php">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="catalog.php">Women</a>
                <div class="mega">
                    <div class="triangle4"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Denim</a></li>
                            <li><a href="catalog.php">Leggings/Pants</a></li>
                            <li><a href="catalog.php">Skirts/Shorts</a></li>
                            <li><a href="catalog.php">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="catalog.php">Accoseriese</a>
                <div class="mega">
                    <div class="triangle5"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Denim</a></li>
                            <li><a href="catalog.php">Leggings/Pants</a></li>
                            <li><a href="catalog.php">Skirts/Shorts</a></li>
                            <li><a href="catalog.php">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="catalog.php">Featured</a>
                <div class="mega">
                    <div class="triangle6"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Denim</a></li>
                            <li><a href="catalog.php">Leggings/Pants</a></li>
                            <li><a href="catalog.php">Skirts/Shorts</a></li>
                            <li><a href="catalog.php">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="catalog.php">Hot Deals</a>
                <div class="mega">
                    <div class="triangle7"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                            <li><a href="catalog.php">Blazers</a></li>
                            <li><a href="catalog.php">Denim</a></li>
                            <li><a href="catalog.php">Leggings/Pants</a></li>
                            <li><a href="catalog.php">Skirts/Shorts</a></li>
                            <li><a href="catalog.php">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="catalog.php">Dresses</a></li>
                            <li><a href="catalog.php">Tops</a></li>
                            <li><a href="catalog.php">Sweaters/Knits</a></li>
                            <li><a href="catalog.php">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!--********************NAV END*********************************-->

<!--********************SECTION START*********************************-->

<nav>
    <div class="before_main">
        <div class="container before_main_content">
            <h3>product</h3>

            <ul class="breadcrumbs">
                <li><a href="index.php" class="up_page">Home</a></li>
                <li><a href="catalog.php" class="up_page">catalog</a></li>
                <li class="curr_page">product</li>
            </ul>
        </div>
    </div>
</nav>
<!--********************SECTION END*********************************-->

<!--********************SLIDER START*********************************-->
<div class="slider">
    <div class="container slider_content" style= "background: url(<?= $img;?>) top center no-repeat;
            background-size: contain ">
        <a href="#">
            <div class="arrow">&lt;</div>
        </a>
        <a href="#">
            <div class="arrow">&gt;</div>
        </a>
    </div>
</div>


<!--********************SLIDER END*********************************-->


<!--********************MAIN START*********************************-->
<div class="container">

    <div class="to_buy">
        <div class="item_descr" data-id="100" data-name="Moschino Cheap And Chic"
             data-img="images/lady.png" data-price="561">
            <h4> <?= $row['collection'];?> </h4>
            <div class="marked_line">
                <div class="marked_line_pink">
                </div>
            </div>
            <h3><?= $row['name'];?></h3>
            <p> <?= $row['description'];?> </p>
            <div class="material">
                <h5>MATERIAL: <span><?= $row['material'];?></span></h5>
                <h5>DESIGNER: <span><?= $row['designer'];?></span></h5>
            </div>
            <p class="summ">$<?= $row['price'];?></p>
        </div>
        <div class="horiz_line">

        </div>
        <div class="params_cart">
            <div class="params_flex">
                <div class="params">
                    <p class="choose_params">CHOOSE COLOR</p>

                    <select name="sps_params" class="sps_params">
                        <option>Red</option>
                        <option>Green</option>
                        <option selected>Blue</option>
                        <option>Brown</option>
                        <option>Black</option>
                        <option>Orange</option>
                    </select>

                </div>

                <div class="params">
                    <p class="choose_params">CHOOSE SIZE</p>
                    <select name="sps_params" class="sps_params">
                        <option>XXS</option>
                        <option>XS</option>
                        <option selected>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                </div>
                <div class="params">
                    <p class="choose_params">QUANTITY</p>
                    <select name="sps_params" class="sps_params">
                        <option selected>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            <div class="add_to_cart">
                <form action="#?id=<?= $id; ?>">
                    <button type="submit" data-id="100"><img src="images/red_cart.svg" alt="cart" id="frst">
                        <img src="images/white_cart.svg" alt="cart" id="scnd">Add to Cart
                    </button>
                </form>
            </div>

        </div>
    </div>

<!--******************************************    BACKUP *******************************************************-->

<!--    <div class="to_buy">
        <div class="item_descr" data-id="100" data-name="Moschino Cheap And Chic"
             data-img="images/lady.png" data-price="561">
            <h4>WOMEN COLLECTION</h4>
            <div class="marked_line">
                <div class="marked_line_pink">
                </div>
            </div>
            <h3>Moschino Cheap And Chic</h3>
            <p>
                Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate
                collaborative architectures before cutting-edge services. Completely visualize parallel core
                competencies rather than exceptional portals.</p>
            <div class="material">
                <h5>MATERIAL: <span>COTTON</span></h5>
                <h5>DESIGNER: <span>BINBURHAN</span></h5>
            </div>
            <p class="summ">$561</p>
        </div>
        <div class="horiz_line">

        </div>
        <div class="params_cart">
            <div class="params_flex">
                <div class="params">
                    <p class="choose_params">CHOOSE COLOR</p>

                    <select name="sps_params" class="sps_params">
                        <option>Red</option>
                        <option>Green</option>
                        <option selected>Blue</option>
                        <option>Brown</option>
                        <option>Black</option>
                        <option>Orange</option>
                    </select>

                </div>

                <div class="params">
                    <p class="choose_params">CHOOSE SIZE</p>
                    <select name="sps_params" class="sps_params">
                        <option>XXS</option>
                        <option>XS</option>
                        <option selected>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                </div>
                <div class="params">
                    <p class="choose_params">QUANTITY</p>
                    <select name="sps_params" class="sps_params">
                        <option selected>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            <div class="add_to_cart">
                <form action="#">
                    <button type="submit" data-id="100"><img src="images/red_cart.svg" alt="cart" id="frst">
                        <img src="images/white_cart.svg" alt="cart" id="scnd">Add to Cart
                    </button>
                </form>
            </div>

        </div>
    </div>-->

    <!--******************************************    BACKUP *******************************************************-->

    <!--*****************************MAIN BOTTOM*****************************-->
    <h3 class="like_also">you may like also</h3>
    <div class="main_bottom">
        <div class="hover">
            <a href="#">
                <div class="one ">
                    <div class="models_bg first"></div>
                    <h3>BLAZE LEGGINGS</h3>
                    <h4>$52.00</h4>
                </div>
            </a>

            <div class="add_flex">
                <a href="#" class="add">Add to Cart</a>
            </div>
        </div>
        <div class="hover">
            <a href="#">
                <div class="one ">
                    <div class="models_bg second"></div>
                    <h3>ALEXA SWEATER</h3>
                    <h4>$52.00</h4>
                </div>
            </a>

            <div class="add_flex">
                <a href="#" class="add">Add to Cart</a>
            </div>
        </div>
        <div class="hover">
            <a href="#">
                <div class="one ">
                    <div class="models_bg third"></div>
                    <h3>AGNES TOP</h3>
                    <h4>$52.00</h4>
                </div>
            </a>

            <div class="add_flex">
                <a href="#" class="add">Add to Cart</a>
            </div>
        </div>
        <div class="hover">
            <a href="#">
                <div class="one">
                    <img src="images/fourth_model.png" alt="model" class="models_bg">
                    <h3>SYLVA SWEATER</h3>
                    <h4>$52.00</h4>
                </div>
            </a>

            <div class="add_flex">
                <a href="#" class="add">Add to Cart</a>
            </div>
        </div>
        <div class="hover">
            <a href="#">
                <div class="one">
                    <img src="images/fourth_model.png" alt="model" class="models_bg">
                    <h3>SYLVA SWEATER</h3>
                    <h4>$52.00</h4>
                </div>
            </a>

            <div class="add_flex">
                <a href="#" class="add">Add to Cart</a>
            </div>
        </div>
    </div>


</div>


<!--********************MAIN END*********************************-->


<!--********************SECTION START*********************************-->


<div class="section">
    <div class="container section-flex">
        <figure class="section-left">
            <img src="images/foto.png" alt="foto">
            <div class="burhan-text">
                <figure>
                    <figcaption>
                        <h4>“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a.
                            Aliquam condimentum mattis neque sed pretium”</h4>
                        <h5>Bin Burhan</h5>
                        <h6>Dhaka, Bd</h6>
                        <a href="#"> <img src="images/unactive_link.png" alt="link"></a>
                        <a href="#"> <img src="images/active_link.png" alt="link"></a>
                        <a href="#"> <img src="images/unactive_link.png" alt="link"></a>
                    </figcaption>
                </figure>
            </div>
        </figure>
        <img src="images/vert_line.png" alt="line">
        <div class="section-right">
            <h3> Subscribe</h3>
            <h4>FOR OUR NEWLETTER AND PROMOTION</h4>
            <form action="#">
                <input type="text" placeholder="Enter Your Email">
                <button type="submit" class="subscribe">Subscribe</button>
            </form>
        </div>
    </div>


</div>


<!--********************SECTION END*********************************-->


<!--********************FOOTER START*********************************-->

<footer class="footer">
    <div class="container">
        <div class="footer-top">

            <div class="info">
                <div class="about">
                    <a href="#" class="link-logo">
                        <img src="images/logo.png" alt="logo"><h5>BRAN<span>D</span></h5>
                    </a> Objectively transition extensive data rather than cross functional solutions. Monotonectally
                    syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded
                    array of processes and cross-unit partnerships. Efficiently plagiarize 24/365 action items and
                    focused infomediaries. Distinctively seize superior initiatives for wireless technologies.
                    Dynamically optimize.
                </div>
            </div>
            <div class="info">
                <div class="company">
                    <ul>
                        <li>
                            <h6>COMPANY</h6>
                        </li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="feedback.php">About</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="info">
                <div class="information">
                    <ul>
                        <li>
                            <h6>INFORMATION</h6>
                        </li>
                        <li><a href="#">Tearms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">How to Buy</a></li>
                        <li><a href="#">How to Sell</a></li>
                        <li><a href="#">Promotion</a></li>
                    </ul>
                </div>
            </div>
            <div class="info">
                <div class="category">
                    <ul>
                        <li>
                            <h6>SHOP CATEGORY</h6>
                        </li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Child</a></li>
                        <li><a href="#">Apparel</a></li>
                        <li><a href="#">Brows All</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-flex">
            <div class="copy"></div>
            <div class="social">
                <a href="#"><i class=" fab fa-facebook-square soc_icons_style"></i></a>
                <a href="#"><i class=" fab fa-twitter-square soc_icons_style"></i></a>
                <a href="#"><i class=" fab fa-linkedin soc_icons_style_1"></i></a>
                <a href="#"><i class="fab fa-pinterest-square soc_icons_style"></i></a>
                <a href="#"><i class="fab fa-google-plus-square soc_icons_style"></i></a>
            </div>

        </div>
    </div>


</footer>
<!--********************FOOTER END*********************************-->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script src="js/copy.js"></script>
<script src="js/cart.js"></script>
<script src="js/slider.js"></script>
<script src="js/buy.js"></script>
<script src="js/feedback.js"></script>
<script src="js/main.js"></script>
<script>
  window.onload = () => {
    let init = new Init();
  }
</script>
</body>

</html>
