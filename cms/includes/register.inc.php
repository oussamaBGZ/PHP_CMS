<?php

if(isset($_POST['submit'])){
    require_once 'db.inc.php';
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $password2= $_POST['password2'];
    if(empty($username) || empty($email) || empty($password) || empty($password2)) {
        header('Location: ../register.php?msg=fill in the form');
        exit();
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../register.php?username=$username&msg=please insert a valid email");
            exit();
        } elseif($password !== $password2) {
            header("Location: ../register.php?username=$username&email=$email&msg=password not matching");
            exit();
        } else {
            $query = "SELECT * FROM users WHERE username= :username OR email= :email";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['username'=>$username,'email'=>$email]);
            $user= $stmt->fetch();
            if($user->username ==$username) {
                header('Location: ../register.php?msg=username already used');
                exit();
            } elseif($user->email ==$email) {
                header('Location: ../register.php?msg=email already used');
                exit();
            } else {
                $query = "INSERT INTO users(username, email, password) VALUES(:username, :email, :password)";
                $stmt = $pdo->prepare($query);
                $password= password_hash($password, PASSWORD_DEFAULT);
                $stmt->execute(['username'=>$username,'email'=>$email, 'password' => $password]);
                header('Location: ../index.php?msg=You Can logIn Know');
                exit();
            }
        }
    }
} else {
    header('Location: ../register.php');
}