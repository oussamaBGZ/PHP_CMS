<?php 
    require_once 'header.php';
    require_once  '../includes/db.inc.php';
    $query = "SELECT * FROM posts WHERE id=:id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(["id"=>$_GET['id']]);
    $post= $stmt->fetch();
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Post
                        </h1>
                        <form action="includes/editpost.inc.php?id=<?php echo $post->id; ?>" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $post->title; ?>" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categories</label>
                                <input type="text" class="form-control" name="category" value="<?php echo $post->category; ?>" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Auther</label>
                                <input type="text" class="form-control" name="auther" value="<?php echo $post->auther; ?>" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputFile">Post Image</label>
                                <img src="../images/<?php echo $post->img; ?>" style="max-width:100px;display:block;"><br>
                                <input type="file" id="exampleInputFile" name="img" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Post Content</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control" required><?php echo $post->content; ?></textarea> 
                            </div>
                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>