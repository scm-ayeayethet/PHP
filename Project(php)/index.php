<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    * {
      box-sizing: border-box;
    }

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
    if (isset($_GET['message'])) {
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo "Login Failed!!!";
        ?>
      </div>
    <?php } ?>
    <?php
    if (isset($_GET['msg'])) {
    ?>
      <div class="alert alert-success" role="alert">
        <?php echo "Registration is successfully!!"; ?>
      </div>
    <?php } ?>
    <h3>Login</h3>
    <form action="login.php" method="post" class="form">

      <div class="form-group ">
        <label for="Email" class="mt-3">Email:</label>
        <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
        <span class="text-danger"><?php if (isset($emailErr)) echo $emailErr; ?></span>
      </div>

      <div class="form-group ">
        <label for="password" class="mt-3">Password:</label>
        <input class="form-control" type="password" name="password" placeholder=" Enter Password" required>
        <span class="text-danger"><?php if (isset($pwdErr)) echo $pwdErr; ?></span>
      </div>

      <div class="text-center">
        <button class="btn btn-success mt-3 mb-2" type="submit" name="login">Login</button>
        <a href="register_form.php">Register</a>
      </div>

    </form>
  </div>

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>