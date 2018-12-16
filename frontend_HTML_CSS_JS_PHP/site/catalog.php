<?php
include "php/db.php";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connect to database");
}

$sql = "select * from `goods` ";
$res = mysqli_query($conn, $sql);
mysqli_close($conn);

$mainDiv = "<div class='catalog-items'>";

while ($row = mysqli_fetch_assoc($res)) {
    $div = "";
    foreach ($row as $value) {

        $div .= "
        <div class='hover'>
            <a href='product.php?id=$row[id]'>
                <div class='catalog_item'><img src='images/$row[photo]' alt='product image'>
                    <h3>$row[name]</h3>
                    <h4>$$row[price]</h4>
                </div>
            </a>
            <div class='add_flex'>
                <a href='#' class='add' data-id=$row[id]>Add to Cart</a>
            </div>
        </div>
        ";
        break;
    }
    $mainDiv .= $div;
}

$mainDiv .= "</div>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_catalog.css">
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
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories </a></li>
                        </ul>
                        <h3>Man</h3>
                        <ul class="mega_list1">
                            <li><a href="#">Tees/Tank tops</a></li>
                            <li><a href="#">Shirts/Polos</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Sweatshirts/Hoodies</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Jackets/vests</a></li>
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
            <div class="cart-hover" id="cart-hover">
                <a href="shopping_cart.php"><img src="images/cart.svg" alt="cart"></a>

                <!--******************DROP DOWN CART START******************************-->

                <div class="cart-dropdown">
                    <div class="triangle2"></div>
                    <div class="cart-flex">
                        <div class="cart-total">
                            <h4>TOTAL</h4>
                            <h4 id="cart-sum">$0.00</h4>
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
            <li><a href="#">Man</a>
                <div class="mega">
                    <div class="triangle3"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="#">Women</a>
                <div class="mega">
                    <div class="triangle4"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="#">Accoseriese</a>
                <div class="mega">
                    <div class="triangle5"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="#">Featured</a>
                <div class="mega">
                    <div class="triangle6"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <img src="images/sale.jpg" alt="super sale">
                    </div>
                </div>
            </li>
            <li><a href="#">Hot Deals</a>
                <div class="mega">
                    <div class="triangle7"></div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories </a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega_flex">
                        <h3>Women</h3>
                        <ul class="mega_list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
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
            <h3>catalog</h3>

            <ul class="breadcrumbs">
                <li><a href="index.php" class="up_page">Home</a></li>
                <li class="curr_page">catalog</li>
            </ul>
        </div>
    </div>
</nav>
<!--********************SECTION END*********************************-->


<!--********************MAIN START*********************************-->

<!--********************MAIN START*********************************-->
<div class="container">
    <!--*******************SPISOK START*******************************-->
    <aside class="spisok">
        <details>
            <summary class="s1">Category</summary>
            <ul class="list">
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Bags</a></li>
                <li><a href="#">Denim</a></li>
                <li><a href="#">Hoodies & Sweatshirts</a></li>
                <li><a href="#">Jackets & Coats</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="#">Polos</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shoes</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Sweaters & Knits</a></li>
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Tanks</a></li>
            </ul>
        </details>
        <details>
            <summary class="s2">BRAND</summary>
            <ul class="list">
                <li><a href="#">list_1</a></li>
                <li><a href="#">list_2</a></li>
                <li><a href="#">list_3</a></li>
                <li><a href="#">list_4</a></li>
                <li><a href="#">list_5</a></li>
            </ul>
        </details>
        <details>
            <summary class="s3">dESIGNER</summary>
            <ul class="list">
                <li><a href="#">list_1</a></li>
                <li><a href="#">list_2</a></li>
                <li><a href="#">list_3</a></li>
                <li><a href="#">list_4</a></li>
                <li><a href="#">list_5</a></li>
            </ul>
        </details>
    </aside>
    <!--*******************SPISOK END*******************************-->
    <!--*******************CATALOG START*******************************-->


    <div class="catalog">
        <!--*******************SORTING START*******************************-->
        <div class="catalog-filter">
            <div class="catalog_top">
                <h4>Trending now</h4>
                <a href="#">Bohemian</a> | <a href="#">Floral</a> | <a href="#">Lace</a> <br><a href="#">Floral</a>
                | <a
                        href="#">Lace</a> | <a href="#">Bohemian</a>
            </div>
            <div class="catalog_top">
                <h4>Size</h4>

                <form action="#">
                    <label class="XXS"><input type="checkbox"> XXS</label>
                    <label class="XS"><input type="checkbox"> XS</label>
                    <label class="S"><input type="checkbox"> S</label>
                    <label class="M"><input type="checkbox"> M</label><br>
                    <label class="L"><input type="checkbox"> L</label>
                    <label class="XL"><input type="checkbox"> XL</label>
                    <label class="XXL"><input type="checkbox"> XXL</label>
                </form>
            </div>
            <div class="catalog_top">
                <h4>pRICE</h4>
                <div id="slider-range"></div>
                <div class="summ">
                    <input type="text" id="amount-start" readonly title="amount-start">
                    <input type="text" id="amount-end" readonly title="amount-end">
                </div>
            </div>


            <div class="sorting">
                <div class="sorting_text">
                    Sort By
                    <select name="sort_by" class="sort_by" title="sort_by">
                        <option>Name</option>
                        <option>Name</option>
                    </select>
                </div>
                <div class="sorting_text">
                    Show
                    <select name="sort_by" class="sort_by" title="show quantity">
                        <option>1</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                </div>
            </div>
        </div>
        <!--*******************SORTING END*******************************-->
        <!--*******************CATALOG START*******************************-->
      <!--  <div class="catalog-items">
            <div class="hover">
                <a href="product.php">
                    <div class="catalog_item"><img src="images/9.png" alt="product image">
                        <h3>Mango People T-shirt</h3>
                        <h4>$52.14</h4>
                    </div>
                </a>
                <div class="add_flex">
                    <a href="#" class="add" data-id="1">Add to Cart</a>
                </div>
            </div>
            <div class="hover">
                <a href="product.php">
                    <div class="catalog_item"><img src="images/10.png" alt="product image">
                        <h3>Mango People T-shirt</h3>
                        <h4>$52.00</h4>
                    </div>
                </a>
                <div class="add_flex">
                    <a href="#" class="add" data-id="2">Add to Cart</a>
                </div>
            </div>
            <div class="hover">
                <a href="product.php">
                    <div class="catalog_item"><img src="images/14.png" alt="product image">
                        <h3>Mango People T-shirt</h3>
                        <h4>$52.00</h4>
                    </div>
                </a>
                <div class="add_flex">
                    <a href="#" class="add">Add to Cart</a>
                </div>
            </div>
            <div class="hover">
                <a href="template_product.php?id=6">
                    <div class="catalog_item"><img src="images/14.png" alt="product image">
                        <h3>Mango People T-shirt</h3>
                        <h4>$52.00</h4>
                    </div>
                </a>
                <div class="add_flex">
                    <a href="#" class="add">Add to Cart</a>
                </div>
            </div>
            <div class="hover">
                <a href="template_product.php?id=6">
                    <div class="catalog_item"><img src="images/14.png" alt="product image">
                        <h3>Mango People T-shirt</h3>
                        <h4>$52.00</h4>
                    </div>
                </a>
                <div class="add_flex">
                    <a href="#" class="add">Add to Cart</a>
                </div>
            </div>
        </div>-->

        <?= $mainDiv; ?>

        <!--*******************CATALOG END*******************************-->
        <div class="pages-wrapper">
            <div class="pages">

                <a href="#">&lt; </a>
                <a href="#">1</a>
                <a href="#">2 </a>
                <a href="#">3 </a>
                <a href="#">4 </a>
                <a href="#">5 </a>
                <a href="#">6.....20 </a>
                <a href="#">&gt;</a>
            </div>
            <div class="all">
                <form action="#">
                    <button type="submit">View All</button>
                </form>
            </div>
        </div>
    </div>


    <!--*************************CATALOG END*******************************-->


</div>
<!--*************************MAIN BOTTOM*************************-->
<div class="main_bottom">
    <div class="container text_for_customer_flex">
        <div class="text_for_customer">
            <img src="images/car.png" alt="car">
            <h4>Free Delivery</h4>
            <h6>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</h6>
        </div>
        <div class="text_for_customer">
            <img src="images/procent.png" alt="procent">
            <h4>Sales & discounts</h4>
            <h6>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</h6>

        </div>
        <div class="text_for_customer">
            <img src="images/crown.png" alt="crown">
            <h4>Quality assurance</h4>
            <h6>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</h6>
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
                            Aliquam
                            condimentum mattis neque sed pretium”</h4>
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
