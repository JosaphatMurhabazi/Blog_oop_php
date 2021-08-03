<?php
define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

$app = App::getInstance();
$post = $app->getTable('Posts');
var_dump($post->all());
