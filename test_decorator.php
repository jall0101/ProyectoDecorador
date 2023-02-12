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



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patron de Decoradores</title>
</head>
<body>
    <h1>Factura</h1>
    <div>
        <?php echo ($newExtraWhooper->getConcepto()); ?>
    </div>
    <div>
    <br>-------------------------------------------------------<br>
    </div>
    <div>
        TOTAL --------------------<?php echo ($newExtraWhooper->getPrecio());?>
    </div>
    

    
</body>
</html>