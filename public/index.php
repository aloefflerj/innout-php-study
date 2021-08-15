<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(["name" => "Anderson", "email" => "aloeffler@gmail.com"]);
print_r($user);
echo '<br>';
$user->email = 'matcha@email.com';
print_r($user->email);