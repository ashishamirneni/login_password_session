<?php

session_start();
    if(! empty($_SESSION['user'])){
        header("Location: home.php");
        exit();
    }

include('database.php');
$user=$_POST['user'];
$pass=$_POST['pass'];
if(! empty($_POST['user']) && ! empty($_POST['pass']))
{
    try{
        $sql="SELECT * FROM user_password WHERE user='".$_POST['user']."';";
        if($conn){
            $result=mysqli_query($conn, $sql);
            $row=mysqli_fetch_assoc($result);
            if($row['pass']==$_POST['pass']){
                $_SESSION['user']=$_POST['user'];
                header("Location:home.php");
            }
        }
    }
    catch(Exception $e){

    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>
    <div class="back">
        <div class="around">
            <form action="login.php" method="post">
                <p class="text">User Id:</p><input type="text" name="user" class="len">
                <p class="text">Password : </p><input type="text" name="pass" class="len">
                <p><button>Submit</button></p>
            </form>
        </div>
    </div>
</body>
</html>