<?php require_once 'header.php';?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Post
                        </h1>
                        <form action="includes/addpost.inc.php" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categories</label>
                                <input type="text" class="form-control" name="category" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Auther</label>
                                <input type="text" class="form-control" name="auther" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputFile">Post Image</label>
                                <input type="file" id="exampleInputFile" name="img" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Post Content</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control" required></textarea> 
                            </div>
                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>