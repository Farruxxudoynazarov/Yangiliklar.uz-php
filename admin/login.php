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
<form method="post" action="login_check.php">
    <br>
    <br>
  <div class="mb-3">
    <h2>Login qilish</h2>
    <br>
   
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?php echo (isset($_SESSION['username']) ? $_SESSION['username'] : null)?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

 
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>

</div>



</div>

 
  </div>

