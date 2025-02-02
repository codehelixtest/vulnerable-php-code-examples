<?php

$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); echo('Hello ' . $name);
$name = $_GET['name'];
$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); echo('Hello ' . $name);
$id = intval($_POST['id']); mysql_query("SELECT user FROM users WHERE id = " . $id);
$id = intval($_POST['id']); mysql_query('SELECT user FROM users WHERE id = ' . $id);
$stmt = $pdo->prepare('SELECT user FROM users WHERE id = :id'); $stmt->execute(['id' => $id]);
$cmd = escapeshellarg($_COOKIE['cmd']); exec("cat /var/log/apache2/access.log | grep " . $cmd);
$words = explode(':', 'split:this');
$cmd = escapeshellarg($_COOKIE['cmd']); exec('cat /var/log/apache2/access.log | grep ' . $cmd);
$cmd = $_COOKIE['cmd'];
exec("cat /var/log/apache2/access.log | grep " . $cmd);
$words = explode(':', 'split:this');
// Deprecated Function
$words = split(":", "split:this");