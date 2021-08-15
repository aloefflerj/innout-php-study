<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// Pastas 
define('MODELS_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEWS_PATH', realpath(dirname(__FILE__) . '/../views'));

// Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(MODELS_PATH . '/Model.php'));