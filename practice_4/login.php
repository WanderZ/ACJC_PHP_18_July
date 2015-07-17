<?php 
    session_start();
    
    if(isset($_SESSION['name'])) {
        # Redirect to index because user has already logged in.
        header('Location: index.php');
    }
    if(isset($_POST['username'])) {
        # User attempted to login. 
        # Authenticate, but for this example we will be leaving the authentication out.
        
        # Assume authenticated - save user name for guestbook
        $_SESSION['name'] = $_POST['username'];
        
        # Redirect on success
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/png" href="../images/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../ext-lib/login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <form class="form-login" action="login.php" method="post">
        <h2 class="form-login-heading">Welcome. What is your name?</h2>
        <label for="username" class="sr-only">Name</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Your name here" required autofocus>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->
</html>
