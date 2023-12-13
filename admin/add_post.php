<?php
include "./header.php";
include "../db_helper.php";
if(isset($_POST['post_add'])){
    // die(var_dump($_POST));
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author_id = $_POST['author_id'];
    $category_id = $_POST['category_id'];

    addPost($title, $content, $author_id, $category_id);
    header("Location: /admin/news.php");
    exit;

}

$categoryList = getCategoryList(1, true);
$taglist = getTagList(true);
$authorList = getUserList(1, true);
?>


<div class="container width-2">

<br> 
<br>
<form method="post">
<br>
<h1>Yangi post qoshish</h1>
<div class="mb-3">
<br>
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
<br>
    <label for="exampleInputPassword2" class="form-label">Content</label>
    <textarea name="content" id="" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <div class="mb-3">
<br>
    <label for="exampleInputPassword3" class="form-label">Categoriya</label>
    <select name="category_id" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
 <?php
foreach($categoryList as $item) { 
 echo "<option value='". $item['id'] ."'> ". $item['title'] ." </option>";
} ?>
 
 
 
</select>
  </div>
  <div class="mb-3">
<br>
    <label for="exampleInputPassword4" class="form-label">Muallif</label>
    <select name="" id="" class="form-select" aria-label="Default select example">
      <?php foreach($authorList as $item) {

        echo "<option value='".$item['id']."'> ".$item['firstname']." ".$item['lastname']."</option>";

      }
?>
    </select>
    <input type="number" name="author_id" class="form-control" id="exampleInputPassword4">
  
    
  </div>

  <div class="mb-3">

     <select name="posts_tag" id="" class="form-select" multiple aria-label = "multiple select example">
<?php
foreach($taglist as $item) {
  echo "<option value='".$item['id']."'>".$item['name']."</option>";
}
?>
     </select>

  </div>
  <button type="submit" name="post_add" class="btn btn-primary">Submit</button>
</form>

</div>

<br><br>
<br>
<br>
