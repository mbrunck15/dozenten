<?php
spl_autoload_register(function ($className){
    include 'class/' . $className . '.php';
});

$a=new Gesamtlohn();
$a->testdaten();

echo '<pre>';
print_r($a);
echo '</pre>';



echo $a->getGesamtkosten();