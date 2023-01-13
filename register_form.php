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
      <input class="form-control mt-3" type="text" name="name" placeholder="Name" required>
      <input class="form-control mt-3" type="email" name="email" placeholder="Email" required>
      <input class="form-control mt-3" type="password" name="password" placeholder="Password" required>
      <input class="form-control mt-3" type="password" name="confirmPwd" placeholder="Confirm Password" required>
      <div class="text-center">
        <button class="btn btn-success mt-3 mb-2" type="submit" name="register">Register</button>
      </div>
    </form>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>