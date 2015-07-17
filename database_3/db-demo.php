<?php

    require_once('dbconfig.php');

    // Query
    $sql = 'SELECT username, password FROM users';
    foreach ($db->query($sql) as $row) {
        echo '<p>';
        echo $row['username'] . '<br>';
        echo $row['password'] . '<br>';
        echo '</p>';
    }
    
    // Exec
    $sql = 'INSERT INTO users (username, password) VALUES ("amy", "p@ssw0rd")';
    //echo $db->exec($sql);
    
    // Prepared statements
    $stmt = $db->prepare('SELECT * FROM users WHERE username = :name');
    $stmt->bindParam(':name', $name);
    # Note: "->" is the syntax to use an object stored in a variable. 
    #       'prepare is a function that is contained in the variable $db'
    
    $name = 'john';
    $stmt->execute(); 
    // Note the fact that you set the variable AFTER the statement is prepared
    // This means you can reuse the same statement many times with different parameters!
    
    while ($row = $stmt->fetch()) {
        echo '<p>';
        echo $row['username'] . '<br>';
        echo $row['password'] . '<br>';
        echo '</p>';
    }
    
?>