<?php

session_start();

if(isset($_SESSION['email'])){
  header("location: home.php");
}

require_once "config.php";

$email = $password ="";
$err = "";

if($_SERVER['REQUEST_METHOD'] =='POST'){

  if(empty(trim($_POST['email'])) || empty(trim($_POST['password']))){
    $err = "Enter the value";
  }
  else{
    $email =    trim($_POST['email']);
    $password = trim($_POST['password']);
   
  }

  if(empty($err)){
    $sql ="SELECT id , email,username, password FROM users WHERE email = ? ";

    $stmt = mysqli_prepare($conn,$sql);

    mysqli_stmt_bind_param($stmt,"s",$param_mail);

    $param_mail =$email;

    if(mysqli_stmt_execute($stmt)){

      mysqli_stmt_store_result($stmt);

      if(mysqli_stmt_num_rows($stmt) == 1)
      {
        mysqli_stmt_bind_result($stmt,$id,$email,$username,$hashed_password);

        if(mysqli_stmt_fetch($stmt))

        {
          if(password_verify($password, $hashed_password)){
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $id;
            $_SESSION["loggedin"] = true;


            header("location: home.php");

          }
        }

      }
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
    <title>Sign in</title>
    <link rel="stylesheet" href="CSS/sign-in.css">
</head>
<body>
    <div class="container">

          <div class="wrapper">

              
              <div class="comp-logo">
               <img src="./khana-khazana-logo.png" alt="logo">
              </div>


              <form action="" method="post" class="sign-up-form" >

             
              
              <div class="list-1">
                <label for="">Email</label>
                <br>
                <input type="email" placeholder="Email" class="input"   name="email" id="">
              </div>
              
              
              <div class="list-1">
                <label for="">Password</label>
                <br>
                <input type="password" placeholder="Password" class="input"   name="password" id="">
              </div>
              
              
             
              
             

              <div class="create-accoutn-btn">
                <button type="post">Sign in</button>
              </div>

              <a href="/food-ordering-website/sign-up.php">If not have an account create one</a>

             
           </form>




          </div>
    </div>
</body>
</html>