<?php require_once 'header.php' ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Register a user Account
                        </h1>
                         <div class="row">
                    <div class="container">
                    <div class="card-panel">
                        
                        <form action="includes/adduser.inc.php" method="post">
                            <div class="row">
                                <div class="form-group">
                                <label for="first_name">UserName</label>
                                <input id="first_name" type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input  type="password"  name="password" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                <label for="password">Password Confirmation</label>
                                <input  type="password"  name="password2" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-info" type="submit" name="submit">Submit
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>

 

<?php require_once 'footer.php' ?>
