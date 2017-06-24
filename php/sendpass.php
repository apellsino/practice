<?php
include '../php/connection.php';

if    (isset($_POST['Login'])) { $Login = $_POST['Login']; if ($Login == '') { unset($Login);}    } //заносим введенный пользователем логин в переменную $login, если он пустой,    то уничтожаем переменную
if    (isset($Login)) {//если существуют необходимые переменные


    $result = mysqli_query($myConnection, "SELECT id FROM users WHERE login='$Login'");//такой ли у пользователя е-мейл
    $myrow = mysqli_fetch_array($result);
    if    ($myrow['id']=0||$myrow['id']='') {
        //если активированного пользователя с таким логином и е-mail    адресом нет
        exit ("Пользователя с    таким e-mail адресом не обнаружено ни в одной базе ЦРУ :) <a    href='../index.php'>Главная страница</a>");
    }
    //если пользователь с таким логином и е-мейлом найден,    то необходимо сгенерировать для него случайный пароль, обновить его в базе и    отправить на е-мейл
    $Email = mysqli_query($myConnection, "SELECT email FROM users WHERE login='$Login'");
    $new_password = mysqli_query($myConnection, "SELECT password FROM users WHERE Name='$Login'");
    $new_password_sh = mysqli_fetch_array($new_password);

    $to  = $Email ;
    $subject = "Восстановление пароля PizzaYOLO";
    $message = ' <p>Ваш пароль от аккаунта:</p> </br>';
    $message1= $new_password_sh;
    $message .=$message1;

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: pizzaYOLO@gmail.com\r\n";
    $headers .= "Reply-To: pizzaYOLO@gmail.com\r\n";

    mail($to, $subject, $message, $headers);
    //формируем сообщение
    echo    "<html><head><meta http-equiv='Refresh' content='3;    URL=https://apellsino.000webhostapp.com/index.php'></head><body>На Ваш e-mail отправлено письмо с паролем. Вы будете перемещены через 3 сек. Если не хотите ждать, то <a    href='../index.php'>нажмите сюда.</a></body></html>";//перенаправляем    пользователя
}
else    {//если    данные еще не введены
    header("Location: /account.html");}

?>
