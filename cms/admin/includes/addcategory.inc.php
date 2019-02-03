<?php
if(isset($_POST['submit'])){
    require_once  '../../includes/db.inc.php';
    $category = $_POST['category'];
    $query= "INSERT INTO categorys(title) VALUES(:title)";
    $stmt=$pdo->prepare($query);
    $stmt->execute(["title"=>$category]);
    var_dump($category);
    header('Location: ../category.php');
    
}else {
    header('Location: ../category.php');
}