<?php


require_once 'cars.php';

$car = new Cars();
$car->setHasParkBrake(true);


try {

    $car->start();
} catch (Exception $e) {
    $car->setHasParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
