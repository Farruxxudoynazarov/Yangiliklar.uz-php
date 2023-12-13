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
    <a href="/admin/add_post.php" class="btn btn-success">Qo'shish</a>
<table class="table table-striped">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">category</th>
      <th scope="col">author</th>
      <th scope="col">visited_count</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach (getPostList($page) as $item){
      $category = getCategoryById($item['category_id']);
      echo "<tr>";
      echo "<td>" . $item['id'] . "</td>";
      echo "<td>" . $item['title'] . "</td>";
      echo "<td>" . $item['content'] . "</td>";
      echo "<td>" . $category['title'] . "</td>";
      echo "<td>" . $item['author_id'] . "</td>";
      echo "<td>" . $item['visited_count'] . "</td>";
      echo "<td>" . $item['created_at'] . "</td>";
      echo "<td>
        
      <a href='/admin/update_post.php?id=".$item['id']."' class='btn btn-primary'> Update </a>
      <a href='/admin/delete_post.php?id=".$item['id']."' class='btn btn-danger'> Update </a>
     </td>";
     echo "</tr>";

    }
    ?>
  </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <?php
 for($i = 1; $i<=pageCount('post'); $i++)  { ?>
  <li class="page-item"><a class="page-link" href="/admin/news.php?page=<?=$i?>"><?=$i?></a></li>
  <?php } ?>
 

    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>


</div>