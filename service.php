<!DOCTYPE html>
<html>
<head>
    <title>PizzaYOLO</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Превью" />
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
if(!isset($_COOKIE['admin']))
{header("Location: /account.html");}
?>
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
                    <div class="clearfix"> </div>
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
                    <input type="text" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li class="active">Персональная информация</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--account-starts-->
<div class="account">
    <div class="container">
        <div class="account-top heading">
            <h2>ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ</h2>
        </div>
        <div class="account-main">
            <div class="col-md-6 account-left">
                <div class="account-bottom">
                    <form action="service.php" id="ajaxform" method="post">
                        <input placeholder="Логин" type="text" tabindex="3" required name="Login">
                        <div class="address">
                            <input type="submit" value="Вывести ФИО" id="example-1" name="fio">
                        </div>
                    </form>
                </div>
            </div>
            <script>
                $.ajax({
                    url: '/service.php',             // указываем URL и
                    data: {"example-1": example-1},/*что передаем и под каким именем*/
                    success: function () { // вешаем свой обработчик на функцию success
                        $(document).ready(function(){
                            // вешаем на клик по элементу с id = example-1
                            $('#example-1').click(function(){
                                // загрузку HTML кода из файла example.html
                                $(this).load('/service.php');
                            })
                        });
                    }
                });
            </script>
            <div class="col-md-6 account-right account-left">
                <h2>ФИО пользователя с таким логином:</h2>
                <?php
                include "php/connection.php";
                if(isset($_POST["fio"])){
                    if(!empty($_POST['Login'])) {
                        $Login=htmlspecialchars($_POST['Login']);
                        $query =mysqli_query($myConnection, "SELECT surname, name, sname FROM users WHERE login='".$Login."'");
                        $numrows=mysqli_num_rows($query);
                        if($numrows!=0)
                        {
                            while($row=mysqli_fetch_assoc($query))
                            {
                                $surname=$row['surname'];
                                $name=$row['name'];
                                $sname=$row['sname'];
                                echo "<h3>$surname $name $sname</h3>";
                            }
                        } else { exit ("Такого пользователя не существует");}
                    } else {
                        exit ("Введите логин!");
                    }
                }
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--account-end-->
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