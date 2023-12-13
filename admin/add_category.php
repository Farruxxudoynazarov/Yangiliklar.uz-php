<?php
include "./header.php";
include "../db_helper.php";

if(isset($_POST['cat_add'])){
    $title = $_POST['title'];
    addCategory($title);
    header("Location: /admin/category.php"); exit;
}



?>


<div class="container width-2">

<br> 
<br>
<form method="post">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kategoriya nomi</label>
    <input type="text" name="title" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="cat_add" class="btn btn-primary">Submit</button>
</form>

</div>

