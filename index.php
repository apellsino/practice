<!DOCTYPE html>
<html>
<head>
    <title>PizzaYOLO</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--бутстрєп-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Самый быстрый сервис по доставке пиццы в Харькове." />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="js/simpleCart.min.js"> </script>
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="js/jquery.easydropdown.js"></script>

</head>
<body>
<?php
if(!isset($_COOKIE['password']))
{header("Location: /account.html");}
?>

<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <a href="php/checkout.php">
                        <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="images/cart-1.png" alt="" />
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Корзина</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="index.php"><h1>PizzaYOLO</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="index.php">Главная</a></li>
                        <li class="grid"><a href="typo.html">О нас</a>
                        </li>
                        <li class="grid"><a href="contact.html">Контакты</a>
                        </li>
                        <li class="grid"><a href="account.html">Вход/Регистрация</a>
                        </li>
                        <li class="grid"><a href="service.php">Персональная информация</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <form action="search.php" method="post">
                        <input type="text" value="Поиск пиццы" name='pizza_name' autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="" name="submit">
                    </form>
                    <div id="search_advice_wrapper"></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
<div id="updown"></div>
<script>
    var updownElem = document.getElementById('updown');

    var pageYLabel = 0;

    updownElem.onclick = function() {
        var pageY = window.pageYOffset || document.documentElement.scrollTop;

        switch (this.className) {
            case 'up':
                pageYLabel = pageY;
                window.scrollTo(0, 0);
                this.className = 'down';
                break;

            case 'down':
                window.scrollTo(0, pageYLabel);
                this.className = 'up';
        }

    };

    window.onscroll = function() {
        var pageY = window.pageYOffset || document.documentElement.scrollTop;
        var innerHeight = document.documentElement.clientHeight;

        switch (updownElem.className) {
            case '':
                if (pageY > innerHeight) {
                    updownElem.className = 'up';
                }
                break;

            case 'up':
                if (pageY < innerHeight) {
                    updownElem.className = '';
                }
                break;

            case 'down':
                if (pageY > innerHeight) {
                    updownElem.className = 'up';
                }
                break;

        }
    }
</script>
<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="images/bnr-1.jpg" alt=""/>
            </li>
            <li>
                <img src="images/bnr-2.jpg" alt=""/>
            </li>
            <li>
                <img src="images/bnr-3.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/abt-1.jpg" alt=""/>
                    <figcaption>
                        <h4></h4>
                        <p>Пицца - это итальянское национальное блюдо в виде круглой открытой лепешки, покрытой в классическом варианте томатами и расплавленным сыром.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/abt-2.jpg" alt=""/>
                    <figcaption>
                        <h4></h4>
                        <p>Классическое тесто для пиццы делается из специальной муки (смесь муки durum), натуральных дрожжей (закваски), оливкового масла, соли и воды. </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/abt-3.jpg" alt=""/>
                    <figcaption>
                        <h4></h4>
                        <p>Пицца — любимая еда Черепашек-ниндзя, персонажей аниме Code Geass, Блум из Винкс и др.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--about-end-->
<!--product-starts-->
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single1.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-1.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>маринара</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">109</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single2.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-2.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>квинта филона</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">99</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single3.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-3.jpg"  alt="" /></a>
                        <div class="product-bottom">
                            <h3>грибная</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">119</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single4.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-4.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>итальяни</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">140</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="product-one">
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single5.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-5.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>монако</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">169</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single6.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-6.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>вегетарианская</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">109</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single7.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-7.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>маргарита</h3>
                            <p>Подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">69</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single8.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-8.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>капричоза</h3>
                            <p>подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">105</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-one">
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single9.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-9.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>реджина</h3>
                            <p>подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">99</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single10.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-10.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>неаполитана</h3>
                            <p>подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">99</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single11.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-11.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>пепперони</h3>
                            <p>подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">99</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="single12.html" class="mask"><img class="img-responsive zoom-img" src="images/pr-12.jpg" alt="" /></a>
                        <div class="product-bottom">
                            <h3>сырная</h3>
                            <p>подробнее</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">109</span></h4>
                        </div>
                        <div class="srch">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>
<!--product-end-->
<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Мы в соцсетях</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Instagram</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>О ресторане</h3>
                <h4>PizzaYOLO
                    <span>Самый заботливый сервис доставки пиццы в Харькове</span>
                    Харьков, ул. Сумская, 24</h4>
                <h5>+38 096 996 33 90</h5>
                <p><a href="mailto:pizzaYOLO@gmail.com">pizzaYOLO@gmail.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Введите Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Подписаться">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p><a href="http://w3layouts.com/" target="_blank">W</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
</html>