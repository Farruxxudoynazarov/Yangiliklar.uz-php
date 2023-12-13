<?php
include "header.php";
include "../db_helper.php";


if(isset($_GET['page'])){
  $page = $_GET['page'];
}
else {
  $page = 1;
}


?>


<div class="container">
    <a href="/admin/add_tag.php" class="btn btn-success">Qo'shish</a>
<table class="table table-striped">
  <thead>
  <tr>
      <th scope="row">#</th>
      <th>Tag nomi</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach(getTagList($page) as $item){ 
  
    echo "<tr>";
    echo "<td>" . $item['id'] . "</td>";
    echo "<td> " . $item['name'] . "</td>"; 
    echo "<td> <a href='/admin/update_tag.php?id=".$item['id']. "' class='btn btn-primary'> update Tag</a> 
               <a href='/admin/delete_tag.php?id=".$item['id']."' class='btn btn-danger'>Delete tag</a> </td>
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
  for($i = 1; $i<=pageCount('tag'); $i++)  { ?>
  <li class="page-item"><a class="page-link" href="/admin/tag.php?page=<?=$i?>"><?=$i?></a></li>
  <?php } ?>
 

    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>