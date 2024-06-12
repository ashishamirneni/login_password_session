<?php
    session_start();
     
     if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        session_destroy();
        header('Location: index.php');
        exit();
     }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="home.php" method="post">
            <p>welcome</p><?php session_start(); echo $_SESSION['user'] ; ?><br>
            <button name="submit">Logout</button>
        </form>
        
    </div>
</body>
</html>