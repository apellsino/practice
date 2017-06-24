<?php
header("Content-Type: text/html; charset=utf-8");
include '../php/connection.php';

if(isset($_POST["register"])){

    if(!empty($_POST['Surname']) &&!empty($_POST['Name']) &&!empty($_POST['Sname']) && !empty($_POST['Email'])&&!empty($_POST['Phone'])&&!empty($_POST['Login'])&&!empty($_POST['Password1'])&&!empty($_POST['Password2'])) {
        $Surname=htmlspecialchars($_POST['Surname']);
        $Name=htmlspecialchars($_POST['Name']);
        $Sname=htmlspecialchars($_POST['Sname']);
        $Email= htmlspecialchars($_POST['Email']);
        $Phone=htmlspecialchars($_POST['Phone']);
        $Login=htmlspecialchars($_POST['Login']);
        $Password1=htmlspecialchars($_POST['Password1']);
        $Password2=htmlspecialchars($_POST['Password2']);
        $query=mysqli_query($myConnection, "SELECT * FROM users WHERE surname='".$Surname."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0)
        {
            if($Password1==$Password2)
            {
                $Password=$Password1;
                $sql="INSERT INTO users (surname ,name ,sname ,phone ,email ,login ,password) VALUES('$Surname','$Name','$Sname','$Phone','$Email','$Login','$Password')";
                $result=mysqli_query($myConnection, $sql);
                if($result){
                    header("Location: /account.html");
                } else {
                    header("Location: /register.html");
                }}else {$message = "Пароли не совпадают!";}
        } else {
            $message = "Такой пользователь уже существует!";
                    }
    } else {
        $message = "Заполните все поля!";
    }
}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";}
sleep(1);
header("Location: /register.html");?>