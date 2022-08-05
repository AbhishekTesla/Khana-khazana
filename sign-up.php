<?php

require_once "config.php";

$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";
$jst="";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

 $jst = $_POST["username"];
  //check for user name

  if(empty(trim($_POST['username']))){
    $username_err = "Please enter the name";
  }

  else if (!preg_match("/^[a-zA-Z-' ]*$/",$jst)){
    $username_err= "Name can not contain number";
  }

  else{
      $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn,$sql);

    if($stmt){
      mysqli_stmt_bind_param($stmt,"s",$param_name);
      $param_name = trim($_POST["username"]);

      if(mysqli_stmt_execute($stmt)){

          mysqli_stmt_store_result($stmt);


            $username = trim($_POST['username']);
    

      }
       else{
        echo "Not Executed";
      }
  }
   mysqli_stmt_close($stmt);
}





  if(empty(trim($_POST["email"]))){
    $email_err = "Please enter the email";
  }

  else{
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn,$sql);

    if($stmt){
      mysqli_stmt_bind_param($stmt,"s",$param_mail);
      $param_mail = trim($_POST["email"]);

      if(mysqli_stmt_execute($stmt)){

          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt)==1){
            $email_err = "Email is already exist";
          }

          else{
            $email = trim($_POST['email']);
          }

      }

      else{
        echo "Not Executed";
      }


    }

    mysqli_stmt_close($stmt);

  }


  //check for password

  if(empty(trim($_POST['password']))){
    $password_err = "Please enter the password";
  }

  else if (strlen(trim($_POST['password'])) < 7){
    $password_err = "Password should be 8 digit long";
  }

  else{
    $password = trim($_POST['password']);
  }

// check for confirmation password

if(trim($_POST['password'])!= trim($_POST['confirm_password'])){
  $password_err = "Enter the correct password";
}


//insert into database

if(empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($username_err)){


  $sql = "INSERT INTO users (email,username,password) VALUES (?,?,?)";

  $stmt = mysqli_prepare($conn,$sql);

  if($stmt){
    mysqli_stmt_bind_param($stmt,"sss",$param_mail,$param_name,$param_password);

    $param_password = password_hash($password,PASSWORD_DEFAULT);

    if(mysqli_stmt_execute($stmt)){
      header("location: sign-in.php");
    }

    else{
      echo "Wrong......";
    }


  }

  mysqli_stmt_close($stmt);

}

mysqli_close($conn);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/sign-up.css">
</head>
<body>
    <div class="container">

          <div class="wrapper">

              
              <div class="comp-logo">
               <img src="./khana-khazana-logo.png" alt="logo">
              </div>


              <form action="" method="post"  class="sign-up-form" >

              <div class="list-1">

                <label for="">
                
                 Name
                  </h3>
                  
                  
                </label>


                <br>
                <input type="text" placeholder="Name" class="input"  name="username" id="">
              </div>
              
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
              
              
              <div class="list-1">
                <label for="">Confirm Password</label>
                <br>
                <input type="password" placeholder="Confirm Password" class="input"   name="confirm_password" id="">
              </div>
              
              <div class="list-1">
               <input type="checkbox" name="" id="checkbox">
               <strong>Agree To Our</strong> <a href="#">Terms And Conditions</a>
              </div>

              <div class="create-accoutn-btn">
                <button type="submit">Create Account</button>
              </div>

              <a href="/food-ordering-website/sign-in.php">Already Have An Account ? Log in Here</a>

             
           </form>




          </div>
    </div>
</body>
</html>