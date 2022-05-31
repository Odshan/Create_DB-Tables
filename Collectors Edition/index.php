<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Test DB</title>
</head>

<body>
    <?php
    include("php/connect.php");
    ?>
    <br><br>
    <form action="php/createdb.php" method="post">
        <label for="dbgive">Database:</label>
        <input type="text" name="dbname" placeholder="Name"><br><br>
        <input type="submit" value="Create DB"></input>
    </form>
    <br><br>
    <p>Create Tables</p>
    <button onclick="addInput()">Add Table</button>
    <br>
    <form action="php/createtable.php" method="post" id="tableForm">
        <label for="tableName">Name:</label>
        <input type="text" name="tName" placeholder="name" id="tName">
        <br><br>

    </form>
</body>

<script src="script.js"></script>

</html>