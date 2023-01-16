<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/common.css">
  <style>
    .container {
      width: 35%;
    }

    a {
      display: block;
    }
  </style>
</head>

<body>

  <div class="container card mt-5 py-3 shadow-sm">
    <?php
    session_start();

    if (isset($_SESSION['nameErr'])) {
      unset($_SESSION['nameErr']);
    }
    if (isset($_SESSION['emailRegErr'])) {
      unset($_SESSION['emailRegErr']);
    }
    if (isset($_SESSION['pwdErr'])) {
      unset($_SESSION['pwdErr']);
    }
    if (isset($_SESSION['confirmPwdErr'])) {
      unset($_SESSION['confirmPwdErr']);
    }
    if (isset($_SESSION['registerErr'])) {
      unset($_SESSION['registerErr']);
    }

    if (isset($_SESSION['loginErr'])) :
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['loginErr'];
        ?>
      </div>
    <?php endif ?>
    <?php
    if (isset($_SESSION['registerSucc'])) :
    ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['registerSucc']; ?>
      </div>
    <?php endif ?>
    <h3>Login</h3>
    <form action="login.php" method="post" class="form">

      <div class="form-group">
        <label for="Email" class="mt-3">Email:</label>
        <input class="form-control" type="text" name="email" placeholder="Enter Email" >
        <span class="text-danger"><?php if (isset($_SESSION['emailErr'])) echo $_SESSION['emailErr']; ?></span>
      </div>

      <div class="form-group">
        <label for="password" class="mt-3">Password:</label>
        <input class="form-control" type="password" name="password" placeholder=" Enter Password" >
        <span class="text-danger"><?php if (isset($_SESSION['passwordErr'])) echo $_SESSION['passwordErr']; ?></span>
      </div>

      <div class="text-center">
        <button class="btn btn-success mt-3 mb-2" type="submit" name="login">Login</button>
        <a href="register_form.php">Register</a>
      </div>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>