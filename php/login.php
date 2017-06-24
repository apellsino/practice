<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
?>

<?php
include "../php/connection.php";
function GenerateRandomString(){
    $a='В моём мире живут только пони… Они питаются радугой и какают бабочками';
    $b=gmdate('Y-m-d h:i:s \G\M\T');
    $a .= $b;
    return $a;
};
$options = ['salt' => GenerateRandomString()];
if(isset($_POST["login"])){
    if(!empty($_POST['Login']) && !empty($_POST['Password'])) {
        $Login=htmlspecialchars($_POST['Login']);
        $Password=htmlspecialchars($_POST['Password']);
        $hash = password_hash($Password, PASSWORD_DEFAULT, $options);
        $query =mysqli_query($myConnection, "SELECT login,password FROM users WHERE login='".$Login."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dblogin=$row['login'];
                $dbpassword=$row['password'];
                if($Login = $dblogin && password_verify($dbpassword, $hash))
                {
                    if ($Login=='admin'&& $Password=='2017practice')
                    {
                        setcookie('password', $hash, time()+3600, '/');
                        setcookie('admin', $hash, time()+3600, '/');
                        header("Location: /index.php");
                    }else {
                        setcookie('password', $hash, time() + 3600, '/');

                        header("Location: /index.php");
                    }
                }else { exit ("Неверный логин или пароль <a    href='../index.php'>Главная страница</a>");}

            }
        }else { exit ("Такого пользователя не существует <a    href='../index.php'>Главная страница</a>");}
    } else {
        exit ("Заполните все поля!<a    href='../index.php'>Главная страница</a>");
    }
}

?>

