<?php

//configuration settings
//require_once 'libs/Autoloader.php';
require_once 'includes/config.php';
require_once 'includes/bootstrap.php';
require_once 'includes/paths.php';

//MVC framework
require_once 'libs/Bootstrap.php';

//initialisation

$templateParser->assign('filePath', URL);

// head
$templateParser->assign('myTitle', $title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
$templateParser->display('menu.tpl');

//body
$app = new Bootstrap();

//require_once 'libs/debug.tpl';
//$templateParser->display('debug.tpl');

// footer
$templateParser->assign('myFooter', $footer);
$templateParser->display('footer.tpl');


