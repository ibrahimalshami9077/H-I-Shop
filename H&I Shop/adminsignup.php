<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `adminusers` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `adminusers`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  

    <!-- Title Page-->
    <title>Admin Signup</title>


    <!-- Main CSS-->
    <link href="css/signup.css" rel="stylesheet" media="all">
</head>

<body align-items-center>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">Register Admin Account</h2>
      <div class="card-body py-md-4">
       <form _lpchecked="1">
          <div class="form-group">
             <input type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
             <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            
                          
   <div class="form-group" align-items-center>
     <input type="password" class="form-control" id="password" placeholder="Password">
   </div>
   <div class="form-group">
      <input type="password" class="form-control" id="confirm-password" placeholder="confirm-password">
   </div>
   <div class="d-flex flex-row align-items-center justify-content-between">
      <a href="adminlogin.php">Login</a>
                                <button class="btn btn-primary">Create Account</button>
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>

</body>

</html>
<!-- end document-->