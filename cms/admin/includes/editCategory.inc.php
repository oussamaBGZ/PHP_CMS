<?php
if(isset($_POST['submit'])){
    require_once  '../../includes/db.inc.php';
    $title=$_POST['newCategory'];
    $query="UPDATE categorys SET title=:title WHERE id=:id";
    $stmt=$pdo->prepare($query);
    $stmt->execute(['title'=>$title,"id"=>$_GET['edit']]);
    header('Location: ../category.php');
} else {
    echo 'not working';
}
