<?php
require_once 'vendor/autoload.php';
use lang\Lang;
use lang\russian\rus\Rus;
use lang\english\engl\Engl;
$obj1 = new Lang();
echo "<br/>";
$obj2 = new Rus();
echo "<br/>";
$obj3 = new Engl();
echo "<br/>";