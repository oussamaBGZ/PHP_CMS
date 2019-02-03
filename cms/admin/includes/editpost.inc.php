<?php
if(isset($_POST['submit'])){
    require_once '../../includes/db.inc.php';
    $title=$_POST['title'];
    $category=$_POST['category'];
    $auther=$_POST['auther'];
    $img=$_FILES['img']['name'];
    $img_temp=$_FILES['img']['tmp_name'];
    $content=$_POST['content'];
    $id=$_GET['id'];
    move_uploaded_file($img_temp, "../../images/$img");
    $query = "UPDATE posts SET title=:title, category=:category, auther=:auther, img=:img, content=:content, date=:date WHERE id=:id";
    $stmt=$pdo->prepare($query);
    $stmt->execute(["title"=>$title, "category"=>$category, "auther"=>$auther,"img"=>$img,"content"=>$content,"date"=>date('y-m-d'),"id"=>$id]);
    header('Location: ../posts.php');
} 
else {
    header('Location: ../addpost.php');
}