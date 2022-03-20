<?php 
require_once('php/db-config.php');
session_start();
if(isset($_SESSION["username"])){
    header("Location: index.php");
}
else {

}
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ojtdb";
    $con = mysqli_connect($hostname, $username, $password, $databaseName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K3L POS</title>
     <!-- --------------- Main CSS --------------------->
     <link href="css/login.css" rel="stylesheet" type="text/css">
     <!-- -------------- Bootstrap ----------------------->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="login-panel col-md-12">
   
    <div class="col-md-12 row d-flex justify-content-center">  
        <div class="col-md-6">

              <form action="login.php" method="post" name="login" class="login-panel-center">
                <div class="row col-md-12 ">
                    <h3 class="logo-header-text">K3L</h3><h3 class="logo-header-text-two"><a id="header-link" href="main.php">POS</a></h3><p class="logo-header-text-two">&reg;</p>                
                </div>
                <hr class="mt-3">
                  <label for="username" class="label-style ml-2">USERNAME</label>
                  <input class="form-control" type="text" name="txt_uname" placeholder=" " required />
                  <label for="password" class="label-style ml-2">PASSWORD</label>
                  <input class="form-control" type="password" name="txt_pwd" placeholder="**********" required />
                  <hr class="my-2">
                  <?php 
                  if(isset($_POST['but_submit'])){                    
                    $uname = ($_POST['txt_uname']);
                    $password = ($_POST['txt_pwd']);                                
                    if ($uname != "" && $password != ""){                
                        $sql_query = "select * from tblusers where UserName ='" .$uname."' and Password='".$password."'";
                        $result = mysqli_query($con,$sql_query);
                        $row = mysqli_fetch_array($result); 
                        $security_lvl = $row['SecurityLevel'];               
                        if($row > 0){
                            $_SESSION['username'] = $uname;
                            $_SESSION['security_lvl'] = $security_lvl;
                            header("Location: index.php");
                        }
                        else{
                            echo "Invalid username or password";
                        }                
                    }                
                  }
                  ?>
                  <input class="btn btn-danger btn-lg btn-block mb-3" name="but_submit" type="submit" value="LOGIN" />
              </form>
        </div>              
    </div>   
</div>      
</body>