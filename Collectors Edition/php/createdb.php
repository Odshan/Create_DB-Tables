<?php
// Checks if form is posted
if (isset($_POST['dbname'])) {
    // Check for acceptable name
    $name = $_POST['dbname'];
    // All lowercase
    $name = strtolower($name);
    // Deletes non letters
    $name = preg_replace("/[^a-z]/", '', $name);

    if ($name != '') {
        // Create the database
        $mysqli = new mysqli('localhost', 'root', '');

        if ($mysqli->connect_error) {
            throw new Exception("Connect Error ($mysqli->connect_errno) $mysqli->connect_error");
        }

        $query = "CREATE DATABASE `$name`";
        $mysqli->query($query);

        if ($mysqli->errno) {
            throw new Exception("Error creating database: $mysqli->error");
        }
        echo "Database $name created.";
        include("createtable.php");
    } else {
        throw new Exception("Invalid name");
    }
}
?>