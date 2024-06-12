<?php
    session_start();
    if(! empty($_SESSION['user'])){
        header("Location: home.php");
        exit();
    }

include('database.php');
$dis=(! empty($_POST['user']) &&  ! empty($_POST['pass']) && ! empty($_POST['repass']));
if($dis){
    if($_POST['pass']==$_POST['repass']){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="INSERT INTO user_password (user,pass) VALUES  ('".$user."','".$pass."')";
    try{
        $done=mysqli_query($conn,$sql);
        if($done)
        {
            echo"<script>alert('New record created successfully');</script>";
            header('Location: login.php');
        }
        else{
            echo'<script>alert("Get a unique user id ")</script>';
        }
        
        echo $done;
        mysqli_close($conn);
    }
    catch(mysqli_sql_exception){
        echo'<script>alert("Get a unique user id ")</script>';
    }
    }
    else{
        echo'<script>alert("Re type the password");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign_style.css"/>
</head>
<body>
    <div class="mainbox">
        <div class="rad">
            <form action="sign.php" method="post">
                <div class="user">
                <p id="iduser">Create User Id : </p>
                <input type="text" name="user" class="text_in"/>
                </div>
                <div class="pass">
                    <p id="idpass"> Password : </p>
                    <input type="text" name="pass" class="text_in"/>
                </div>
                <div class="repass">
                    <p id="idrepass">Retype password : </p>
                    <input type="text" name="repass" class="text_in"/>
                </div>
                <div class="butt">
                    <button id="creat">Create</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
