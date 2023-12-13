<?php
// include "header.ph
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <div class="container">

<div class="row justify-content-start">

<div class="col-md-5">

<form method="post" action="registration.php">
    <br>
    <br>
  <div class="mb-3">
    <h2>Ro'yxatdan o'tish</h2>
    <br>
    <?php
     if(isset($_SESSION['error'])){
        echo "<div class='alert alert-danger' role='alert'>
        ".$_SESSION['error']."
        </div>";
        unset($_SESSION['error']);
     }


     if(isset($_SESSION['success'])){
        echo "<div class='alert alert-success' role='alert'>
      Ro'yxatdan o'tdingiz endi login qilishingiz mumkin.!
        </div>";
        unset($_SESSION['success']);
     }
    ?>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="confirm-password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Firstname</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lastname</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lastname">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="lastname">
  </div>
  <button type="submit" class="btn btn-primary" name="register"></button>
</form>

</div>



</div>

 
  </div>

