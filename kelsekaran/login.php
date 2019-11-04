<?php

    require 'config/db_connect.php';
    include('section/header.php');
    include('section/navbar.php');
    session_start();

    if(isset($_SESSION["login"])){
        header('location:admin.php');
    }
?>
<br><br><br><br><br><br>


<?php
    $error=0;
    if(isset($_POST["kirim"]) && $_POST["kirim"]=="LOGIN"){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $get_user = "SELECT * FROM loginadmin WHERE user = '$user'";
        $result = mysqli_query($conn,$get_user);
        $data = mysqli_fetch_array($result);

        if($data){
            if($password == $data['pass']){
                    Header("Location:admin.php");
                    $_SESSION["login"] = true;
                    exit;
                }else{
                    Header("Location:login.php");
                    exit;
                }
        }else{
            Header("Location:login.php");
            exit;
        }
    }


?>
<div class="separator"></div>
<div class="container">
    
       
  
        <h2 class="text-center">Form Login</h2>
        <br>
        <form method="post" class="hpform">
            
            <input type="text" name = "user" placeholder="E-mail/Username" />
            <input type="password" name = "password" placeholder="Password" />
            <input type="submit" name = "kirim" value="LOGIN" />
          </form>

  </div>
  <br><br><br>
<?php 
 	include('section/footer.php');
?>