<?php 
    require_once 'header.php';
    require_once  '../includes/db.inc.php';
    $query = "SELECT * FROM categorys";
    $categorys = $pdo->query($query)->fetchAll();
    if(isset($_GET['edit'])) {
        $query2 = "SELECT * FROM categorys WHERE id=$_GET[edit]";
        $editcategory = $pdo->query($query2)->fetch();
    }
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categorys
                        </h1>
                        <div class="col-lg-6" style="padding-bottom:30px;">
                            <form action="includes/addcategory.inc.php" method="post" class="col-lg-8">
                                <div class="form-group">
                                <label>Category Title</label>
                                    <input type="text" name="category" class="form-control" required>
                                </div>
                                <button class="btn btn-info" type="submit" name="submit">submit</button>
                            </form>
                            <br>
                            <?php if(isset($_GET['edit'])) {?>
                                <form action="includes/editcategory.inc.php?edit=<?php echo $editcategory->id; ?>" method="post" class="col-lg-8" style="margin-top: 30px;">
                                    <div class="form-group">
                                    <label>Edit Category Title</label>
                                        <input type="text" name="newCategory" class="form-control" value="<?php echo $editcategory->title; ?>" required>
                                    </div>
                                    <button class="btn btn-info" type="submit" name="submit">submit</button>
                                </form>
                            <?php } ?>
                        </div>
                    
                        <div class="col-lg-6">
                            <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($categorys as $category){  ?>
                                <tr>
                                    <th><?php echo $category->id; ?></th>
                                    <th><?php echo $category->title; ?></th>
                                    <th><a href="category.php?edit=<?php echo $category->id; ?>" class="btn btn-success editCat">Edit</a></th>
                                    <th><button class="btn btn-danger removeCat" id="<?php echo $category->id; ?>">Delete</button></th>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>