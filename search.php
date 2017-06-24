<?php
include '../php/connection.php';

if(isset($_POST["submit"])){
    if(!empty($_POST['pizza_name'])) {
        $pizza_name=htmlspecialchars($_POST['pizza_name']);
        $query=mysqli_query($myConnection, "SELECT pizza_id FROM pizza WHERE pizza_name='".$pizza_name."'");
        while($row = $query->fetch_assoc())
        {
            if($a=$row['pizza_id'])
            {
                header("Location: single$a.html");
            }
        }
    } else {
        header("Location: index.html");
    }
}
?>
