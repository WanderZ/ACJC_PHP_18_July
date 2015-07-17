<?php

/*

So far, all the data that you have typed into the forms is only shown once and not stored anywhere.
One way of persisting data (storing for a long time) in to write data to text files.
Another way is to store in a database (to be covered later).

*/

# Writing to a text file

// Write the contents of variable $msg into 'messages.txt'. If the file already exists, override the file
file_put_contents('messages.txt', $msg);

// Add the contents of variable $msg to the end of 'messages.txt'.
file_put_contents('messages.txt', $msg, FILE_APPEND);
// If you want each message on its own line, then you need to add your own newline character
file_put_contents('messages.txt', $msg."\n", FILE_APPEND);

// Read from 'messages.txt' to variable $contents
$contents = file_get_contents('messages.txt');

// Read from 'messages.txt' to variable $messages, with each line as an array
$messages = file('messages.txt');

// Here are two ways to loop through the array
// You can use the foreach loop
foreach ($messages as $message) {
    echo "<p>$message</p>";
}
// Or you can use a for loop to choose the index of the array
for ($i = 0; $i < count($messages); $i++) {
    echo "<p>{$messages[$i]}</p>";
}

// Use htmlentities to "escape" the user input when printing it, so that users cannot do funny stuff
foreach ($messages as $message) {
    echo '<p>'.htmlentities($message).'</p>';
}


?>