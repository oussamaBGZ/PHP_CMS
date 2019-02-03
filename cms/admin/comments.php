<?php 
    require_once 'header.php';
    require_once  '../includes/db.inc.php';
    $query = "SELECT * FROM comments";
    $comments= $pdo->query($query)->fetchAll();
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comments
                        </h1>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Comment ID</th>
                                <th>User Commented</th>
                                <th>value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($comments as $comment){  ?>
                                <tr>
                                    <th><?php echo $comment->id; ?></th>
                                    <th><?php echo $comment->user; ?></th>
                                    <th><?php echo $comment->value; ?></th>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>