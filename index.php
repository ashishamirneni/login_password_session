<?php
   session_start();
    if(! empty($_SESSION['user'])){
        header("Location: home.php");
        exit();
    }


   echo $_SESSION['user'];
   if(! empty($_SESSION['user'])) {
        echo $_SESSION['user'];
    //    header('Location: home.php');
    //    exit(); // Make sure to exit after redirecting
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in and Out</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="top">
    <i class="fa-solid fa-signal fa-5x"></i>
        <div class="another">
            <b><p id="siz">Just a login and sign in and logout</p></b>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="login_sign">
                <form action="login.php" method="post">
                    <button type="submit" id="login">Login</button>
                </form>
            </div>
            <div class="sign_in">
                <form action="sign.php" method="post">
                    <button type="submit" id="sign">Sign In</button>
                </form>
            </div>
        </div>
    </header>
</body>
</html>
