<?php
spl_autoload_register(function ($className) {
    include($className . ".php");
});
//class_exists('PrivateStatic');
$reflectionClass = new ReflectionClass('OtherClass');
$reflectionProperty = $reflectionClass->getProperty('prop');
$reflectionProperty->setAccessible(true);
$value = $reflectionProperty->getValue();
//$value = OtherClass::$prop;
echo "Value is $value\n";

