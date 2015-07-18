<?php
    session_start();
    
    # Tasks
    # =====
    
    if(!isset($_SESSION['name'])) {
        # Redirect to login because user has not logged in.
        header('Location: login.php');
    }
    # Q1: Check if user is logged in
    # If user is logged in, 
    # 1) Show the form to post a message
    # 2) Display a welcome message above the text box with the user's name
    
    # Q2: If user is not logged in, either
    # Redirect the user to login.php using the location header
    # Hint: http://sg.php.net/manual/en/function.header.php
    
    # OR 
    
    # Display a link for the user to click to log in
    # Hint: "anchor tag" or "<a href=''></a>"
    
    # Extra Practice Questions
    # ========================
    # Q3: Can you create a navigation bar that will toggle between 
    #     "login" when user is logged out and "logout" when the user is logged in"
    # Hint: You can check if your user is logged in via "isset($_SESSION['name'])"
    
    # Q4: Create a function that will check if the user is logged in
    # Hint: "function isLoggedIn() {return false;}"
    
    # Q5: Can you disable the submit button when the user is not logged in,
    #     so as to prevent your web application to not work without important user data?
    # Hint: you can use if(isLoggedIn()){ ... }
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
                <form method="post" action="result.php">
                    <div style="display: block; padding-top: 5%;">
                        <div class="form-group">
                            <p>Welcome <?php echo $_SESSION['name']; ?>!</p>
                            <label for="msg">Enter your Message</label>
                            <input class="form-control" type="text" id="msg" name="msg" />
                        </div>
                        <input class="btn btn-primary btn-block" type="submit" value="Submit">
                        <input class="btn btn-default btn-block" type="reset" value="Reset">
                        <a class="btn btn-danger btn-block" href="logout.php" style="display: block;">Log me out</a>
                    </div>
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