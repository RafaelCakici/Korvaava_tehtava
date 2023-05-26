<?php

try {
    $dbcon->beginTransaction();

    $sql1 = "UPDATE artist SET name = ? WHERE id = ?";
    $statement1 = $dbcon->prepare($sql1);
    $statement1->execute(array($newName, $artistId));
    $sql2 = "INSERT INTO album (title, artist_id) VALUES (?, ?)";
    $statement2 = $dbcon->prepare($sql2);
    $statement2->execute(array($title, $artistId));

    $dbcon->commit();

} catch (Exception $e) {

    $dbcon->rollBack();
    echo "Error: " . $e->getMessage();
}

?>