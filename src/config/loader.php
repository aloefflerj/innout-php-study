<?php

function loadModel($modelName)
{
    require_once(MODELS_PATH . "/{$modelName}.php");
}

function loadView($viewName, $params = [])
{
    if (count($params) > 0) {
        foreach ($params as $key => $value) {
            if (strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEWS_PATH . "/{$viewName}.php");
}

function loadTemplateView($viewName, $params = [])
{
    if (count($params) > 0) {
        foreach ($params as $key => $value) {
            if (strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/left.php");
    require_once(VIEWS_PATH . "/{$viewName}.php");
    require_once(TEMPLATES_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null)
{
    require_once(TEMPLATES_PATH . "/title.php");
}
