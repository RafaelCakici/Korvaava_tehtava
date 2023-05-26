<?php

$age = 60;
$country = 'Finland';

$sql = "SELECT * FROM customers WHERE age = ? AND country = ?";
$statement = $dbcon->prepare($sql);
$statement->execute(array($age, $country));

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>