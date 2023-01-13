<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/common.css">
  <style>

    .container-fluid {
      padding: 0;
      background-color: #e3f2fd;
    }

    nav {
      background-color: #e3f2fd;
    }

    .main-txt {
      text-align: center;
      margin: 150px 0;
    }
  </style>
</head>

<body>

  <?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
  }
  ?>
  <div class="wrapper w-100">
    <div class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-light justify-content-between">
          <h5>Registration</h5>
          <a class="btn btn-outline-danger " href="logout.php">Logout</a>
        </nav>
      </div>

    </div>
    <p class="main-txt align-bottom display-4 text-secondary">Welcome To Home Page</p>

  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>