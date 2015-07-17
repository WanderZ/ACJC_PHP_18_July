<?php

    # D
    $db = new PDO('mysql:host=127.0.0.1;dbname=guestbook', 'wanderz', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>