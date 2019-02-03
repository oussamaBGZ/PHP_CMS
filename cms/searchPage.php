<?php require_once 'header.php'; 
    if(isset($_POST['submit'])){
        require_once 'includes/db.inc.php';
        $field="%".$_POST['search']."%";
        $query = "SELECT * FROM posts WHERE title LIKE :field";
        $stmt=$pdo->prepare($query);
        $stmt->execute(["field"=>$field]);
        $posts=$stmt->fetchAll();
        
    }
?>
<div class="container">
<br>
    <a href="/" class="btn-floating pulse"><i class="material-icons">arrow_back</i></a>
    <?php if(!$posts) { ?>
        <h3>nothing her</h3>
    <?php } else { ?>
    <?php foreach($posts as $post) {?>
        <div>
            <h3><a href="post.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h3>
            <p><?php echo $post->date; ?> by <?php echo $post->auther; ?></p>
            <img src="images/<?php echo $post->img; ?>" style="max-width: 100%;" alt="">
            <p class="flow-text"><?php echo $post->content; ?></p>
        </div>
    <?php } ?>
     <?php } ?>
</div>

<?php require_once 'footer.php'; ?>
