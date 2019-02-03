<?php
if(isset($_POST['submit'])){
    require_once '../../includes/db.inc.php';
    $title=$_POST['title'];
    $category=$_POST['category'];
    $auther=$_POST['auther'];
    $img=$_FILES['img']['name'];
    $img_temp=$_FILES['img']['tmp_name'];
    $content=$_POST['content'];
    move_uploaded_file($img_temp, "../../images/$img");
    $query = "INSERT INTO posts(title, category, auther, img, content, date) VALUES(:title, :category, :auther, :img, :content, :date)";
    $stmt=$pdo->prepare($query);
    $stmt->execute(["title"=>$title, "category"=>$category, "auther"=>$auther,"img"=>$img,"content"=>$content,"date"=>date('y-m-d')]);
    header('Location: ../posts.php');
} 
else {
    header('Location: ../addpost.php');
}