<?php require_once 'header.php'; 
    require_once 'includes/db.inc.php';
    if(isset($_GET['page'])){
        $page = $_GET['page']==0 ? 0 : $_GET['page']+1;
    } else {
        $page = 0;
    }
    $query = "SELECT * FROM POSTS ORDER BY id DESC LIMIT $page,2";
    $queryPosts = "SELECT * FROM POSTS";
    $query2 = "SELECT * FROM categorys";
    $posts = $pdo->query($query)->fetchAll();
    $categorys = $pdo->query($query2)->fetchAll();
    $postsCount= round(($pdo->query($queryPosts)->rowCount())/3);
?>

    <div class="container" style="margin-top:50px;">
        <div class="row">
        <div class="col s8">
            <?php foreach($posts as $post) { ?>
                <h3><a href="post.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h3>
                <p><?php echo $post->date; ?> by <?php echo $post->auther; ?></p>
                 
                <img src="images/<?php echo $post->img; ?>" style="max-width: 100%;" alt="">
            <?php } ?>
        </div>
        <div class="col s4">
                <form class="card-panel" method="post" action="searchPage.php">
                    <div class="row">
                        <h4>Blog Search</h4>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input id="icon_search" type="text" class="validate" name="search">
                        <label for="icon_search">search</label>
                        <button class="btn waves-effect waves-light" name="submit">submit</button>
                        </div>
                    </div>
                </form>
                <?php if(!isset($_SESSION['uid'])) {?>
                <form action="includes/login.inc.php" class="card-panel" method="post">
                    <div class="row">
                    <h4>Login</h4>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="username">
                        <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">screen_lock_portrait</i>
                        <input id="screen_lock_portrait" type="password" class="validate" name="password">
                        <label for="screen_lock_portrait">Password</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
                <?php } ?>
                <div class="card-panel">
                    <h4>Categories</h4>
                    <ul>
                    <?php foreach($categorys as $category) { ?>
                        <li><a href="category.php?category=<?php echo $category->title; ?>"><?php echo $category->title; ?></a></li>
                    <?php } ?>
                    </ul>
                </div>
        </div>
        </div>
    </div>
    <br><br>
    <ul class="pagination center">
      
       <?php for($i=0;$i<=$postsCount;$i++) { ?>
        <li class="waves-effect <?php echo !isset($_GET['page']) && $i==0 ? "active" : "" ?> <?php echo isset($_GET['page']) && $_GET['page'] ==$i ? 'active' : ''; ?>"><a href="index.php?page=<?php echo $i ?>"><?php echo $i+1 ?></a></li>
       <?php } ?>
        
    </ul>

<?php require_once 'footer.php'; ?>