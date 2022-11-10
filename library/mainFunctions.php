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

function loadPage(string $controllerName, string $actionName = 'index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function();
}
