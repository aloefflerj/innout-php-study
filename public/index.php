<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(VIEWS_PATH . '/login.php');

require_once(MODELS_PATH . '/Login.php');

$login = new Login([
    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try {
    $login->checkLogin();
    echo 'deu certo';
} catch (Exception $e) {
    echo 'problema no login';
}
