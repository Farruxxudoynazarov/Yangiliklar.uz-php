<?php
 include "header.php";
include "../db_helper.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $cat = getCategoryById($id);
    // echo "salomalekum sohtalar"; 
    print_r($cat);
}

if (isset($_POST['cat_update'])){
    $title = $_POST['title'];  
    updateCategory($id, $title);
    header("Location: /admin/category.php");
    exit;

     
}



?>



<div class="container">

    <div class="row">
        <br>
       <form action="" method="post">
        
       <br><label for="update">Kategoriya nomi</label>
        <br>
       <br><input type="text" id="update" name="title" class="input form-control" value="<?=$cat['title']?>" >
        <br>
        <br>
        <button type="submit" name="cat_update" class="btn btn-primary">Add</button>
       </form>
    </div>

</div>