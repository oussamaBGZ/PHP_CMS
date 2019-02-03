<?php 
    require_once 'header.php';
    require_once  '../includes/db.inc.php';
    $queryUsers = "SELECT * FROM users";
    $queryPosts = "SELECT * FROM posts";
    $queryCategory = "SELECT * FROM categorys";
    $posts= $pdo->query($queryPosts)->rowCount();
    $users= $pdo->query($queryUsers)->rowCount();
    $categorys= $pdo->query($queryCategory)->rowCount();
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hello <?php echo $_SESSION['username']; ?>
                        </h1>
                        <h4>number of posts: <?php echo $posts; ?></h4>
                        <h4>number of users: <?php echo $users; ?></h4>
                        <h4>number of categorys: <?php echo $categorys; ?></h4>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>