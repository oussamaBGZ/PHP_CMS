<?php 
    require_once 'header.php';
    require_once  '../includes/db.inc.php';
    $query = "SELECT * FROM posts";
    $posts= $pdo->query($query)->fetchAll();
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>PostID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($posts as $post){  ?>
                                <tr>
                                    <th><?php echo $post->id; ?></th>
                                    <th><?php echo $post->auther; ?></th>
                                    <th><?php echo $post->title; ?></th>
                                    <th><?php echo $post->category; ?></th>
                                    <th><img src="../images/<?php echo $post->img; ?>" class="img-responsive" style="max-width:50px;"/></th>
                                    <th><?php echo $post->date; ?></th>
                                    <th><a href="editpost.php?id=<?php echo $post->id; ?>" class="btn btn-info">Edit</a></th>
                                    <th><button class="btn btn-danger delete" id="<?php echo $post->id; ?>">Delete</button></th>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>