<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// Constantes Gerais
define('DAILY_TIME', 60 * 60 * 8);

// Pastas 
define('MODELS_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEWS_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATES_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLERS_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTIONS_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

// Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(MODELS_PATH . '/Model.php'));
require_once(realpath(MODELS_PATH . '/User.php'));
require_once(realpath(EXCEPTIONS_PATH . '/AppException.php'));
require_once(realpath(EXCEPTIONS_PATH . '/ValidationException.php'));