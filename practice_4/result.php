<?php
    # Tasks
    # =====
    
    # Modify the code below to do the following:
    # 1) Check that the user is logged in before allowing the user to write to the text file
    # 2) Write the user's name (from the session) to the text file
    
    if (isset($_POST['message'])) {
        file_put_contents('messages.txt', $_POST['themessage']."\n", FILE_APPEND);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Guestbook</title>
        <!-- Link to external css here -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="icon" type="image/png" href="../images/favicon.ico">
    </head>
    <body>
        <div class="container">
            <div class="alert alert-success" role="alert">
                <?php
                    echo $_SESSION['name']."says :". $_GET['msg'];
                ?>
            </div>
            <?php
                $messages = file('messages.txt');
                foreach ($messages as $message) {
                    echo '<p>'.htmlentities($message).'</p>';
                }
            ?>
        </div>
    </body>
    <!-- Link to external js here -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
<?php 
    # This is available on https://github.com/WanderZ/ACJC_PHP_18_July.git
?>