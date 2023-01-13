<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

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
  // We need to use sessions, so you should always start sessions using the below code.
  session_start();
  // If the user is not logged in redirect to the login page...
  if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
  }
  ?>
  <div class="wrapper">
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

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>