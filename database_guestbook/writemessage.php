<?php
    session_start();
    
    if (!isset($_SESSION['name'])) {
        die('This page can only be viewed by logged in users!');
    }
    
    if(isset($_POST['message'])) {
        # User attempted to post message. 
        
        require_once('dbconfig.php');
        
        $username = $_SESSION['name'];
        $message = $_POST['message'];
        
        $stmt = $db->prepare('INSERT INTO messages (username, message, timestamp) VALUES (:username, :message, NOW())');
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':message', $message);
        
        if ($stmt->execute()){
            # insert successful
            header('Location: viewmessages.php');
        }
    }
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
                <form method="post" action="writemessage.php">
                    <div class="form-group">
                        <p>Welcome <?php echo htmlentities($_SESSION['name']); ?>!</p>
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