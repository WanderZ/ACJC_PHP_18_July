<?php
    # Practice 1
    
    # Structure of a typical php file
    # Php setup
    # HTML doctype
    # Linking to external library
    # Content
    # Footer + linking to external Js 
    # Internal Js
    # End
    
    # Random note: PHP comments (and PHP code in general) cannot be seen when you view-source on the browser
    
    // You can also comment using two slashes
    /* Or you can create multi-line comments
    like this! */
    
    # Tasks and Questions
    # ===================
    # Q1: Add a "name" field to the form below for the user to type in their name along with the message
    
    # Q2: Change the "Click Here" to "Submit". 
    
    # Q3: Add a reset button to reset your whole form to its original state.
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
        <pre><?php
            # var_dump is the command to "vomit" out all the contents of a php variable. Useful for debugging!
            var_dump($_GET);
            
            # Random note: $_GET is an array.
        ?></pre>
        <div class="container">
            <div class="row">
                <form method="get" action="">
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <input class="form-control" type="text" id="msg" name="message">
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Click here">
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