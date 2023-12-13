<?php

function getCategoryList($page, $withoutLimit = false){
    $limit = 7;
    $offset = ($page-1) * $limit;
    include "dbconnect.php";
 
        if($withoutLimit){
            $sql = "SELECT * FROM category";
            $state = $conn->prepare($sql);

        }
        else {
            $sql = "SELECT * FROM category limit :offset, :limit";
            $state = $conn->prepare($sql);
            $state->bindValue(":limit", $limit, PDO::PARAM_INT);
            $state->bindValue(":offset", $offset, PDO::PARAM_INT);
        }
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addCategory($title){
    include "../dbconnect.php";
    $sql_insert = "INSERT INTO category(title) values(:title)";
    $state = $conn->prepare($sql_insert);
    $state->bindValue(":title", $title);
    $state->execute();
}


function pageCount($tableName){
    $limit = 5; 
    include "dbconnect.php";
    $sql = "SELECT * FROM $tableName";
    $state = $conn->prepare($sql);
    $state->execute();
    $total_rows = $state->rowCount();
    return ceil($total_rows/$limit);

}


function getCategoryById($id){
    include "dbconnect.php";
    $sql = "SELECT * FROM category where id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue("id", $id);
    $state->execute();
    return $state->fetch(PDO::FETCH_ASSOC);
}

// print_r(pageCount());



function updateCategory ($id, $title){
    include "dbconnect.php";
    $sql = "UPDATE category SET title=:title where id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->bindValue(":title", $title);
    $state->execute();
}


function deleteCategory($id){
    include "dbconnect.php";
    $sql = "DELETE FROM category where id = :id";
    $prepare = $conn->prepare($sql);
    $prepare->bindValue("id", $id);
    $prepare->execute();

}





///postga tegishli funksiyalar



// function getPostList($page){
//     include "dbconnect.php";
//     $offset = ($page-1) * $limit;
//     $sql = "SELECT * FROM post limit :offset, :limit";
//     $state = $conn->prepare($sql);
//     $state->bindValue(":limit", $limit, PDO::PARAM_INT);
//     $state->bindValue(":offset", $offset, PDO::PARAM_INT);
//     $state->execute();
//     $result = $state->fetchAll(PDO::FETCH_ASSOC);
//     return $result;

// }

print_r($result);


function getPostList($page, $withoutLimit = false){
    $limit = 5;
    $offset = ($page-1) * $limit;
    include "dbconnect.php";
 
        if($withoutLimit){
            $sql = "SELECT * FROM category";
            $state = $conn->prepare($sql);

        }
        else {
            $sql = "SELECT * FROM post limit :offset, :limit";
            $state = $conn->prepare($sql);
            $state->bindValue(":limit", $limit, PDO::PARAM_INT);
            $state->bindValue(":offset", $offset, PDO::PARAM_INT);
        }
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



function addPost($title, $content, $author_id, $category_id){   
    include "../dbconnect.php";
    $sql_insert = "INSERT INTO post (title, content, category_id, author_id, visited_count, created_at) 
    values(:title, :content, :category_id, :author_id, :visited_count, :created_at)";
    $state = $conn->prepare($sql_insert);
    $state->bindValue(":title", $title);
    $state->bindValue(":content", $content);
    $state->bindValue(":category_id", intval($category_id));
    $state->bindValue(":author_id", intval($author_id));
    $state->bindValue(":visited_count", 0);
    $state->bindValue(":created_at", date("Y-m-d H:i:s"));
    $state->execute(); 

}



function deletePost($id){
    include "dbconnect.php";
    $sql = "DELETE FROM post where id = :id";
    $prepare = $conn->prepare($sql);
    $prepare->bindValue("id", $id);
    $prepare->execute();

}




// user lar jadvali



function getUserList($page, $withoutLimit = false){
    $limit = 7;
    $offset = ($page-1) * $limit;
    include "dbconnect.php";
 
        if($withoutLimit){
            $sql = "SELECT * FROM user";
            $state = $conn->prepare($sql);

        }
        else {
            $sql = "SELECT * FROM user limit :offset, :limit";
            $state = $conn->prepare($sql);
            $state->bindValue(":limit", $limit, PDO::PARAM_INT);
            $state->bindValue(":offset", $offset, PDO::PARAM_INT);
        }
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}





// tag---------



function getTagList($page){

    include  "dbconnect.php";
   $limit =5;
    $offset = ($page-1) * $limit;
    $sql = "SELECT * FROM tag limit :offset, :limit";
    $state = $conn->prepare($sql);
    $state->bindValue(":limit", $limit, PDO::PARAM_INT);
    $state->bindValue(":offset", $offset, PDO::PARAM_INT);
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;


}

print_r($result);






function addTag($name){
    include "../dbconnect.php";
    $sql_insert = "INSERT INTO tag(name) values(:name)";
    $state = $conn->prepare($sql_insert);
    $state->bindValue(":name", $name);
    $state->execute();
}
