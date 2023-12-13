<?php
include "header.php";
include "../db_helper.php";

if(isset($_POST['tag_add'])){
    $name = $_POST['name'];
    addTag($name);
    header("Location: /admin/tag.php"); exit;
}



?>


<div class="container width-2">

<br> 
<br>
<form method="post">
    <h2>Tag qo'shish</h2>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tag nomi</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="tag_add" class="btn btn-primary">Submit</button>
</form>

</div>

