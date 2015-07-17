<?php
    session_start();
    
    # Tasks
    # =====
    
    # Check if user is logged in
    # If user is logged in, 
    # 1) Show the form to post a message
    # 2) Display a welcome message above the text box with the user's name
    
    # If user is not logged in, either
    # 1) Redirect the user to login.php using the location header
    #    See http://sg.php.net/manual/en/function.header.php
    # 2) Display a link for the user to click to log in
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Guestbook</title>
        <!-- Link to external css here -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="../images/favicon.ico">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="get" action="result.php">
                    <div class="form-group">
                        <p>Welcome <?php # Hint: Display name here ?>!</p>
                        <label for="msg">Enter your Message</label>
                        <input class="form-control" type="text" id="msg" name="message">
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Submit">
                    <input class="btn btn-default btn-block" type="reset" value="Reset">
                </form>
            </div>
        </div>
    </body>
    <!-- Link to external js here -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
<?php 
    # This is available on https://github.com/WanderZ/ACJC_PHP_18_July.git
?>