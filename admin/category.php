<?php
include "header.php";
include "../dbconnect.php";
include "../db_helper.php";

// $sql = "SELECT * FROM category";
// $state = $conn->prepare($sql);
// $state->execute();
// $result = $state->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// print_r($state->errorInfo());







if(isset($_GET['page'])){
  $page = $_GET['page'];
}
else {
  $page = 1;
}


?>


<div class="container">
    <a href="/admin/add_category.php" class="btn btn-success">Qo'shish</a>
<table class="table table-striped">
  <thead>
  <tr>
      <th scope="row">#</th>
      <th>Kategoriya nomi</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach(getCategoryList($page) as $item){ ?>
  <tr>
      <td scope="row"><?=$item['id']?></td>
      <td><?=$item['title']?></td>
      <td>
      <a href="/admin/delete_category.php?id=<?=$item['id']?>" class="btn btn-danger" name="cat_delete">Delete</a>
      <a href="/admin/update_category.php?id=<?=$item['id']?>" class="btn btn-primary">Update</a>
      </td>
  </tr>

  <?php }
    


    ?>
  </tbody>
  </table>

  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <?php
  for($i = 1; $i<=pageCount('category'); $i++)  { ?>
  <li class="page-item"><a class="page-link" href="/admin/category.php?page=<?=$i?>"><?=$i?></a></li>
  <?php } ?>
 

    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>