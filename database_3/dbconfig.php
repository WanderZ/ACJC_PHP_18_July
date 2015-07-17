<?php

    # Declaring database connection details:
    
    $db = createPDOConnection();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /********************************************************************** 
     * Creates a new PDO Connection object
     **********************************************************************/
    function createPDOConnection() {
        # The Data Source Name, or DSN, contains the information required to connect to the database.
        $dsn = "mysql:host=127.0.0.1;dbname=guestbook";
        
        # The user name for the DSN string. This parameter is optional for some PDO drivers.
        $username = "wanderz";
        
        # The password for the DSN string. This parameter is optional for some PDO drivers.
        $password = "";
        
        return new PDO($dsn, $username, $password);
        
        # Read more here: http://php.net/manual/en/pdo.construct.php
    }
?>