<?php

/**
 * Основные функции
 */

/**
 * Формирование запращиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 *
 */

function loadPage($smarty, string $controllerName, string $actionName = 'index')
{
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы выводя значение переменной $value
 *
 * @param  $value --переменная для вывода ее на страницу
 * @param int $die
 *
 */
function d($value = null, int $die = 1)
{
    echo 'Debug: <br/><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) die;
}
