<?php 
    session_start();
    
    if(isset($_SESSION['name'])) {
        # Redirect to index because user has already logged in.
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

    <title>Create user</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      
      <?php
      
        if(isset($_POST['username'])) {
          
          # User wants to create an account. 
          require_once('dbconfig.php');
          
          $username = $_POST['username'];
          $password = $_POST['password'];
          $password2 = $_POST['password2'];
          
          if ($password == $password2) {
              $stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
              $stmt->bindParam(':username', $username);
              $stmt->bindParam(':password', $password);
              
              if ($stmt->execute()) {
                echo 'User created successfully!';
              }else{
                echo 'Error occured!';
              }
              
          }else{
            echo 'Error! Passwords do not match';
          }
              
        }
      ?>
      <form class="form-signin" method="post" action="createuser.php">
        <h2 class="form-signin-heading">Create user</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control form-top" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control form-middle" placeholder="Password" required>
        <label for="inputPassword2" class="sr-only">Repeat Password</label>
        <input type="password" id="inputPassword2" name="password2" class="form-control form-bottom" placeholder="Repeat Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create user</button>
      </form>

    </div> <!-- /container -->
</html>
