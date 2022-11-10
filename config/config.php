<?php

/**
 * Файл настроек
 */

//Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

// Используемый шаблон
$template = 'default';

// Пути файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

// Пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");

// Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require '../library/Smarty-3.1.38/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');
