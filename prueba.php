<?php
require_once('vendor/autoload.php');

$user = new \PlatziPHP\Author('foo@bar.baz','1234');
$user->setFullName("Juan", "Menendez");
// echo $user->getFirstName().PHP_EOL;
var_dump($user);