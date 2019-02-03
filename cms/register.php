<?php require_once 'header.php'; ?>

  <div class="row">
    <div class="container">
    <div class="card-panel">
        <h3>Register Your Account</h3><br>
        <form action="includes/register.inc.php" method="post">
            <div class="row">
                <div class="input-field">
                <input id="first_name" type="text" class="validate" name="username">
                <label for="first_name">UserName</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                <input  type="password"  name="password">
                <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                <input  type="password"  name="password2">
                <label for="password">Password Confirmation</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    </div>
  </div>

<?php require_once 'footer.php'; ?>