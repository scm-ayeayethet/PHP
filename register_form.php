<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/common.css">

</head>

<body>

  <?php
  session_start();
  if (isset($_SESSION['loggedin'])) {
    header('Location: home.php');
    exit;
  }
  ?>

  <div class="wrapper card mt-5 mx-auto py-3 px-3">

    <?php
    if (isset($_SESSION['registerErr'])) :
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['registerErr'];
        ?>
      </div>
    <?php endif ?>

    <h2>Register</h2>
    <form action="register.php" method="post">
      <div class="form-group">
        <label for="Name" class="mt-3">Name:</label>
        <input class="form-control" type="text" name="name" placeholder="Name">
        <span class="text-danger"><?php if (isset($_SESSION['nameErr'])) echo $_SESSION['nameErr']; ?></span>
      </div>

      <div class="form-group">
        <label for="Email" class="mt-3">Email:</label>
        <input class="form-control" type="email" name="email" placeholder="Email">
        <span class="text-danger"><?php if (isset($_SESSION['emailErr'])) echo $_SESSION['emailErr']; ?></span>
      </div>
      
      <div class="form-group">
        <label for="Password" class="mt-3">Password:</label>
        <input class="form-control" type="password" name="password" placeholder="Password">
        <span class="text-danger"><?php if (isset($_SESSION['pwdErr'])) echo $_SESSION['pwdErr']; ?></span>
      </div>

      <div class="form-group">
        <label for="Confirm Password" class="mt-3">Confirm Password:</label>
        <input class="form-control" type="password" name="confirmPwd" placeholder="Confirm Password">
        <span class="text-danger"><?php if (isset($_SESSION['confirmPwdErr'])) echo $_SESSION['confirmPwdErr']; ?></span>
      </div>
      
      <div class="text-center">
        <button class="btn btn-success mt-3 mb-2" type="submit" name="register">Register</button>
      </div>
    </form>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>