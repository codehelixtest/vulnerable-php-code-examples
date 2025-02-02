<?php

if (PHP_SAPI === 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

if (NULL == $_GET['name']) $_GET['name'] = "Guest! ";

$name = htmlspecialchars($_GET['name'] ?? 'Guest! ', ENT_QUOTES, 'UTF-8');
echo 'Hello, welcome ' . $name;

