<?php 
    session_start();
   $usr_email = "kmk@gmail.com";
   $usr_password  = "111"; 
//    $hash_usr = password_hash($usr_password, PASSWORD_BCRYPT);
   
   if(isset($_POST['login'])){
       $usr_login_email = $_POST['email'];
       $usr_login_pwd = $_POST['password'];
        
        if($usr_login_email == $usr_email && $usr_password == $usr_login_pwd){
            $_SESSION['email'] = $usr_login_email;
            $_SESSION['password'] = $usr_login_pwd;
            
            // echo $_SESSION['email'];
            // echo $_SESSION['password']; 
            echo "Welcome , Your email is ". $_SESSION["email"]."." . "Your Password is ".$_SESSION['password'];   
        }else{
            echo "try again";
        }
   }

?>

<form action="" method="POST">

    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" name="login" value="click">

</form>