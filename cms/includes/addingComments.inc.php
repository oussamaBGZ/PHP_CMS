<?php 
session_start();

if(isset($_POST['submit'])) {
    require_once 'db.inc.php';
        $user=$_SESSION['username'];
        $comment = $_POST['comment'];
        $query = "INSERT INTO comments(postID, value, user) VALUES(:postID, :value, :user)";
        $stmt=$pdo->prepare($query);
        $stmt->execute(["postID"=>$_GET['id'],"value"=>$comment,"user"=>$user]);
        header("Location: ../post.php?id=$_GET[id]");
        exit();
    }