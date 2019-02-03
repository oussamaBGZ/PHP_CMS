<?php require_once 'header.php'; 
    if(isset($_GET['category'])){
        require_once 'includes/db.inc.php';
        $query = "SELECT * FROM posts WHERE category=:category";
        $stmt=$pdo->prepare($query);
        $stmt->execute(["category"=>$_GET['category']]);
        $posts=$stmt->fetchAll();
    }
?>
<div class="container">
<br>
    <a href="/" class="btn-floating pulse"><i class="material-icons">arrow_back</i></a>
    <?php foreach($posts as $post) {?>
    <div>
        <h3><?php echo $post->title; ?></h3>
        <p><?php echo $post->date; ?> by <?php echo $post->auther; ?></p>
        <img src="images/<?php echo $post->img; ?>" style="max-width: 100%;" alt="">
        <p class="flow-text"><?php echo $post->content; ?></p>
    </div>
    <br>
    <?php } ?>
</div>

<?php require_once 'footer.php'; ?>
