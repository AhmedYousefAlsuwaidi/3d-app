<?php 

// define PDO  - tell about the database file
$pdo = new PDO("sqlite:3d_app.db");

// write SQL
$statement = $pdo->query("SELECT * FROM products");

// run the SQL
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

// show it on the screen
echo"<pre>";
//print_r($rows);
echo"</pre>";

echo json_encode($rows);