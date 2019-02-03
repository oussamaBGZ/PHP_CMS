<?php require_once 'header.php' ;
    require_once  '../includes/db.inc.php';
    $query="SELECT * FROM users";
    $users = $pdo->query($query)->fetchAll();
    
?>
    
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                        </h1>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($users as $user){  ?>
                                <tr>
                                    <th><?php echo $user->id; ?></th>
                                    <th><?php echo $user->username; ?></th>
                                    <th><?php echo $user->email; ?></th>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php require_once 'footer.php' ?>
