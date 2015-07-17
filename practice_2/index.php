<?php
    # Practice 2

    # Random note: php comments (and PHP code in general) cannot be seen when you view-source on the browser
    
    # Tasks and Questions
    # ===================
    # Q1: Change method from "get" to "post". 
    # Are you still able to manipulate the URL to modify the data submitted?
    
    # Q2: Lets create a menu so that you can navigate from the results back to the entering of message
    # Hint: include_once() or include() to include a whole chunk of navigation html shared for both index.php and result.php.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Here's the heading</title>
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
                        <label for="msg">Name</label>
                        <input class="form-control" type="text" id="name" name="name">
                        <label for="msg">Message</label>
                        <input class="form-control" type="text" id="msg" name="msg">
                    </div>
                    <input class="btn btn-primary btn-block hvr-shutter-in-horizontal" type="submit" value="Submit">
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