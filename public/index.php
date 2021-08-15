<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(["name" => "Anderson", "email" => "aloeffler@gmail.com"]);
echo $user->getSelect(["name" => "Chaves", "email" => "chaves@cod3r.com.br"]);