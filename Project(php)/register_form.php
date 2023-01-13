<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .wrapper {
      width: 35%;
    }

  </style>

</head>

<body>

  <div class="wrapper card mt-5 mx-auto py-3 px-3">

  <?php
    if (isset($_GET['message'])) {
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo "Please Enter Your Info correctly!!!";
        ?>
      </div>
    <?php } ?>

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

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>