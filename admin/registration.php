<?php

session_start();

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if($password != $confirm_password){
        $_SESSION['error'] = "Password va Confirm password bir xil emas"; 
    } else {
        include "../dbconnect.php";
        $state = $conn->prepare("SELECT * FROM user where username = :username");
        $state->bindValue("username", $username);
        $state->execute();
        if($state->rowCount()>0){
            $_SESSION['error'] = "Bunday emailli user mavjud";
        }
        else {
            $role = "author";
            $password = password_hash($password, PASSWORD_DEFAULT);
            $state = $conn->prepare("INSERT INTO user(username, password, firstname, lastname, role)
            values(:username, :password, :firstname, :lastname, :role)");
         
             try {
                $state->execute(["username"=>$username, "password"=>$password, "firstname"=>$firstname, "lastname"=>$lastname, "role"=>$role]);
                $_SESSION['success'] = 'ok';
             }
             catch(PDOException $e) {
                $_SESSION['error'] = $e->getMessage();
             }
          
        }
    }
}else {
    $_SESSION['error'] = "Maydonlarni to'ldiring";
}

header("Location: register.php");