<?php 

$host="localhost";
$user="root";
$password="";
$db="testa";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con ,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($con ,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("Location: home.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="#">
            <!-- Avatar icon -->
            <img src="img/avatar-default-icon.png" alt="Avatar" class="container img">
            <!-- Username input form -->
            <div class="form_input">
                <input type="text" name="username" placeholder="Username">
            </div>
            <!-- Password input form -->
            <div class="form_input">
                <input type="password" name="password" placeholder="Password">
            </div>
            <!-- Submit button -->
            <input type="submit" value="Login" class="btn-login">
        </form>
    </div>
</body>
</html>