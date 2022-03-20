<?php 
require_once('php/db-config.php');
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "reyrosedb";
    $con = mysqli_connect($hostname, $username, $password, $databaseName);

    if(isset($_POST['but_submit'])){
    echo "button pressed";
    
    $uname = ($_POST['txt_uname']);
    $password = ($_POST['txt_pwd']);;


    if ($uname != "" && $password != ""){

        $sql_query = "select * from tblusers where UserName ='" .$uname."' and Password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);


       if($row > 0){
           header("Location: index.php");
        }else{
            echo "Invalid username and password";
        }

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K3L POS</title>
     <!-- --------------- Main CSS --------------------->
     <!-- <link href="css/main.css" rel="stylesheet"> -->
     <link href="css/login.css" rel="stylesheet" type="text/css">
     <!-- -------------- Bootstrap ----------------------->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    
        <form action="login.php" method="post">
            
            <h2>LOGIN</h2>

            
            <label>User Name</label>
            <input type="text" name="txt_uname" placeholder="User Name"><br>

            <label>Password</label>
            <input type="password" name="txt_pwd" placeholder="Password"><br> 

            <button type="submit" name="but_submit" id="but_submit">Login</button>

        </form>
</body>