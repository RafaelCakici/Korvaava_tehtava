<?php

$name = $_POST['name'];
$title = $_POST['title'];

$sql1 = "INSERT INTO artists (Name) VALUES (?)";
$sql2 = "INSERT INTO albums (Title, ArtistId) VALUES (?, ?)";

$statement1 = $dbcon->prepare($sql1);
$statement1->execute(array($name));

$artistId = $dbcon->lastInsertId();

$statement2 = $dbcon->prepare($sql2);
$statement2->execute(array($title, $artistId));

?>