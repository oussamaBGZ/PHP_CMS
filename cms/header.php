<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>MyCMS</title>
</head>
<body>

   <nav class="grey darken-4">
   <div class="container">
    <div class="nav-wrapper">
    <a href="/" class="brand-logo">MyCMS</a>
    <div class="right">
        <ul>
        <?php if(isset($_SESSION['uid'])): ?>
          <li><a href="/admin">Admin</a></li>
          <li><a href="includes/logout.inc.php">Logout</a></li>
        <?php else: ?>
          <li><a href="register.php">Register</a></li>
        <?php endif ?>
        </ul>
    </div>
    </div>
   </div>
  </nav>