<?php

    # Tasks and Questions
    # ===================
    
    # Change the form in index.php to use the POST method. 
    # Modify the code below accordingly to display the output
    
    # Q1: If you have noticed, where you enter in "newlines" in your messages,
    #     it does not display as a new line! Let attempt to fix that.
    # Hint: nl2br()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Here's the heading</title>
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
                    echo $_GET['name']." says: ". $_GET['msg'];
                ?>
            </div>
            <a href="index.php">Post another message</a>
        </div>
    </body>
    <!-- Link to external js here -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
<?php 
    # This is available on https://github.com/WanderZ/ACJC_PHP_18_July.git
?>