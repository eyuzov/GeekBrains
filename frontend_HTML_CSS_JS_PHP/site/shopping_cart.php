<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_cart.css">
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
            <h3>shopping cart</h3>

            <ul class="breadcrumbs">
                <li><a href="index.php" class="up_page">Home</a></li>
                <li class="curr_page">shopping cart</li>
            </ul>
        </div>
    </div>
</nav>
<!--********************SECTION END*********************************-->


<div class="container">

    <!--********************TABLE SECTION START*********************************-->
    <table class="table">
        <thead>
        <tr class="head">
            <td class="product">Product Details</td>
            <td class="other">unite Price</td>
            <td class="other">Quantity</td>
            <td class="other">shipping</td>
            <td class="other">subtotal</td>
            <td class="other">action</td>
        </tr>
        </thead>
        <tbody>
        <tr class="head">
            <td class="product">
                <div class="product-view">
                    <a href="product.php"><img src="images/9.png" alt="preview" class="preview">
                        <div class="prod-desc">
                            <h3>Mango People T-shirt</h3>
                            <p>Color: <span>Red</span><br>
                                Size: <span>XXl</span></p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="other other-details">$150</td>
            <td class="other other-details"><input type="text" class="quant"></td>
            <td class="other other-details">free</td>
            <td class="other other-details">$150</td>
            <td class="other other-details"><i class="fas fa-times-circle"></i></td>
        </tr>
        <tr class="head">
            <td class="product">
                <div class="product-view">
                    <a href="product.php"><img src="images/10.png" alt="preview" class="preview">
                        <div class="prod-desc">
                            <h3>Mango People T-shirt</h3>
                            <p>Color: <span>Red</span><br>
                                Size: <span>Xll</span></p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="other other-details">$150</td>
            <td class="other other-details"><input type="text" class="quant"></td>
            <td class="other other-details">free</td>
            <td class="other other-details">$150</td>
            <td class="other other-details"><i class="fas fa-times-circle"></i></td>
        </tr>
        <tr class="head">
            <td class="product">
                <div class="product-view">
                    <a href="product.php"><img src="images/13.png" alt="preview" class="preview">
                        <div class="prod-desc">
                            <h3>Mango People T-shirt</h3>
                            <p>Color: <span>Red</span><br>
                                Size: <span>Xll</span></p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="other other-details">$150</td>
            <td class="other other-details"><input type="text" class="quant"></td>
            <td class="other other-details">free</td>
            <td class="other other-details">$150</td>
            <td class="other other-details"><i class="fas fa-times-circle"></i></td>
        </tr>
        </tbody>
    </table>
    <!--*********************TABLE SECTION END*********************************-->

    <!--*********************MAIN SECTION AFTER TABLE START*********************************-->

    <div class="buttons">
        <button class="btn" id="clear">cLEAR SHOPPING CART</button>
        <button class="btn" id="continue">cONTINUE sHOPPING</button>
    </div>


    <div class="total">
        <div class="order">
            <h1>Shipping Adress</h1>
            <form action="#">
                <select name="country" id="country" class="input">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
                <input type="text" placeholder="State" class="input">
                <input type="text" placeholder="Postcode / Zip" class="input">
                <button>get a quote</button>
            </form>
        </div>
        <div class="order">
            <h1>coupon discount</h1>
            <p>Enter your coupon code if you have one</p>
            <form action="#">
                <input type="text" placeholder="coupon" class="input">
                <button class="coupon">Apply coupon</button>
            </form>
        </div>
        <div class="order gray">
            <h6>Sub total <span class="all-total">$ 0</span></h6>
            <h2>GRAND TOTAL <span class="all-total"> $ 0</span></h2>
            <div class="center">
                <hr class="line">
                <button class="proceed">proceed to checkout</button>
            </div>

        </div>
    </div>

    <!--*********************MAIN SECTION AFTER TABLE END*********************************-->

</div>


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
