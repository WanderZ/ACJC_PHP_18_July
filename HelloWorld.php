<?php
    // Hi, welcome to helloworld.php. 
    // You should notice that the below does still look like a html file.
    // for php codes, they are contained within the <?php and ? > tags
    
?><!DOCTYPE html>
<html>
    <head>
        <title>Here's the heading</title>
        <!-- Link to external css here -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Random icon on the tab next to the title -->
        <link rel="icon" type="image/png" href="images/favicon.ico">
    </head>
    <body>
        <?php
            $variable = 'World';
            echo "Hello".$variable.(1+1);
            
            # Welcome to PHP! This is a warm-up for the morning
            # Here we learn about variables and the echo command
            
            # Q1: There is no space between HelloWorld2. 
            #       Add the space between them until it is "Hello World 2"
            
            # Q2: Change the "World" to your own name.    
            # Hint: Change $variable such that the script says 'Hello <your name> 2'
            
            # Q3: Change 1+1 such that the script calculates the multiplication of two numbers from two variables
            # Hint: To multiply two numbers, use a multiply symbol '*'.
            # Hint: variables are defined like $variable, a '$' and a string to identify this variable
            # Note: variables cannot start with a number (i.e. 0-9) nor an underscore '_'
            # Note: variables cannot contain certain special characters.
            
            # Note: 
            # $str1 = "this is a way to define a string";
            # #str2 = 'this is also a way to define a string';
            # besides using echo, print is also a php command to print out strings, and other variables.
            
            # php cheat sheet
            # Check out http://overapi.com/php/ for much much more api and functions 
        ?>
    </body>
</html>
<?php 
    # This is available on https://github.com/WanderZ/ACJC_PHP_18_July.git
?>