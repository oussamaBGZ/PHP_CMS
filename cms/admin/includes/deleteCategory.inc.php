<?php
require_once '../../includes/db.inc.php';
$query="DELETE FROM categorys WHERE id=:id";
$stmt=$pdo->prepare($query);
$stmt->execute(["id"=>$_GET['id']]);

