<?php

if (PHP_SAPI === 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

$id = $_GET['id'] ?? 1;

$file_db = new PDO('sqlite:../database/database.sqlite');

$stmt = $file_db->prepare('SELECT * FROM customers WHERE customerId = :id');
$stmt->execute([':id' => $id]);
foreach ($stmt as $row) {
    $customer = $row['LastName'] . " - " . $row['Email'] . "\n";
    echo $customer;
}
    $customer = $row['LastName'] . " - " . $row['Email'] . "\n";

    echo $customer;
}

