<?php

    session_start();
    
    # We put this check here to not continue if the user is not logged in
    if (!isset($_SESSION['name'])) {
        die('This page can only be viewed by logged in users!');
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
            <?php
                require_once('dbconfig.php');
            
                $sql = 'SELECT * FROM messages ORDER BY timestamp DESC';
                foreach ($db->query($sql) as $row) {
                    echo '<p>';
                    echo htmlentities($row['username']) . '<br>';
                    echo htmlentities($row['message']) . '<br>';
                    echo 'Posted: '.$row['timestamp'] . '<br>';
                    echo '</p>';
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