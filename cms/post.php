<?php   require_once 'header.php'; 
        require_once 'includes/db.inc.php';
        
        
        $query = "SELECT * FROM posts WHERE id=:id";
        $stmt=$pdo->prepare($query);
        $stmt->execute(["id"=>$_GET['id']]);
        $post=$stmt->fetch();
        
        $query2 = "SELECT * FROM comments WHERE postID=:id";
        $stmt2=$pdo->prepare($query2);
        $stmt2->execute(["id"=>$_GET['id']]);
        $comments=$stmt2->fetchAll();
        

?>
<div class="container">
<br>
<div>
    <a href="/" class="btn-floating pulse"><i class="material-icons">arrow_back</i></a>
    <h3><?php echo $post->title; ?></h3>
    <p><?php echo $post->date; ?> by <?php echo $post->auther; ?></p>
    <img src="images/<?php echo $post->img; ?>" style="max-width: 100%;" alt="">
    <p class="flow-text"><?php echo $post->content; ?></p>
</div>

<br>
<br>
<?php foreach($comments as $com) {?>
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <span class="card-title"><?php echo $com->user; ?></span>
          <p><?php echo $com->value; ?>.</p>
        </div>
      </div>
    </div>
  </div>
<?php }; ?>
<br>
<br>
<?php if(isset($_SESSION['uid'])): ?>
<form action="includes/addingComments.inc.php?id=<?php echo $_GET['id']; ?>" method="post">
<h5>Comments</h5>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit">submit</button>
      </div>
</form>
<?php endif; ?>
</div>

<?php require_once 'footer.php'; ?>
