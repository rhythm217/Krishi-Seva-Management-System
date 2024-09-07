
<?php
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPASS = '';
    const DBNAME = 'agri';
 
    $connection = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
 
    if ($connection->connect_error) {
      die('Could not connect to the database!' . $connection->connect_error);
    }
?>