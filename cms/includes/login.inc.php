<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'db.inc.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username) || empty($password)) {
   
        header('Location: ../index.php?msg=fill in the form');
        exit();
    } else {
         $query= "SELECT * FROM users WHERE username= :username";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['username'=>$username]);
    $user= $stmt->fetch();
    if($user){
        if(password_verify($password, $user->password)) {
            session_start();
            $_SESSION['uid']=$user->id;
            $_SESSION['email']=$user->email;
            $_SESSION['username']=$user->username;
            header('Location: ../index.php');
        } else {
            header('Location: ../index.php?msg=password wrong');
            exit();
        }
    } else {
        header('Location: ../index.php?msg=user not found');
        exit();
    }
    }
} else {
    header('Location: ../index.php?ok=oh kkkkkkkk');
    exit();
}