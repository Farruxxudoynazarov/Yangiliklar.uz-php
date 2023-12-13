<?php
include "../db_helper.php";

include "../dbconnect.php";

include "header.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $cat = getCategoryById($id);

    if(isset($_GET['confirm']) && $_GET['confirm'] === 'yes'){
        deletePost($id);
        header("Location: /admin/category.php");
    }
    else if(isset($_GET['confirm']) && $_GET['confirm'] === 'no') {
        header("Location: /admin/category.php");
    }

    if(isset($_GET['cat_delete'])){
        echo  "ochir";
    }
}
echo "Rostdan ham o'chirmoqchimisan?";

?>

<a href="/admin/delete_post.php?id=<?=$id?>&confirm='yes'" class="btn btn-danger">Ha</a>
<a href="/admin/delete_post.php?id=<?=$id?>&confirm='no'" class="btn btn-success">Yoq</a>