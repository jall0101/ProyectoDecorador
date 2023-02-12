<?php

require_once 'IDecorator.php';
require_once 'Decorator.php';


$whooper = new Decorator("whooper",150);//150
//echo $whooper->getConcepto()

$newWhooper = $whooper->setDecorator(new Decorator("Menos lechuga",0));//150
echo '<br>';
//echo $newWhooper->getConcepto().' ----------------- -';

$newExtraWhooper = $newWhooper->setDecorator(new Decorator("Extra queso",30));

//echo $newExtraWhooper->getConcepto().' ----------------- +';

echo ($newExtraWhooper->getConcepto());
//echo ($newExtraWhooper->getPrecio());

