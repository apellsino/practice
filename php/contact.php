<?php
include '../php/connection.php';

if(isset($_POST["contact"])){//если на кнопку нажали...
    if(!empty($_POST['login'])&&!empty($_POST['phone'])&&!empty($_POST['email'])&&!empty($_POST['message']))
    //проверяем, все ли поля заполнены. Если да...
    {   $login=htmlspecialchars($_POST['login']);//извлекаем из формы имя
        $phone=htmlspecialchars($_POST['phone']);//извлекаем из формы телефон
        $email=htmlspecialchars($_POST['email']);//извлекаем из формы почту
        $message=htmlspecialchars($_POST['message']);//извлекаем из формы сообщение
        $query=mysqli_query($myConnection, "INSERT INTO messages(login, phone, email, message) VALUES('$login', '$phone', '$email', '$message')");//обращаемся кбазе данных, чтобы записать в таблицу "сообщения" то, что было в форме
        header("Location: index.php");//производим адресацию на главную
    }else {header("Location: php/contact.php");}//если не все полязаполнены, переадресация на эту же страницу
}
?>
