<?php
/**
 * Created by JetBrains PhpStorm.
 * User: radu
 * Date: 3/31/13
 * Time: 2:52 PM
 */

require_once 'class/config.php';

$db = DataBase::getInstance();

$brands = array(
    "images/brand/acura.png",
    "images/brand/alfaRomeo.png",
    "images/brand/astonMartin.png",
    "images/brand/audi.png",
	"images/brand/bentley.png",
    "images/brand/bmw.png",
    "images/brand/bugatti.png",
    "images/brand/byd.png",
    "images/brand/cadillac.png",
    "images/brand/chevrolet.png",
    "images/brand/chrysler.png",
    "images/brand/citroen.png",
    "images/brand/dacia.png",
    "images/brand/daewoo.png",
    "images/brand/dodge.png",
    "images/brand/ferrari.png",
    "images/brand/fiat.png",
    "images/brand/ford.png",
    "images/brand/honda.png",
    "images/brand/hyundai.png",
    "images/brand/infiniti.png",
    "images/brand/jaguar.png",
    "images/brand/jeep.png",
    "images/brand/kia.png",
    "images/brand/lada.png",
    "images/brand/lamborghini.png",
    "images/brand/lancia.png",
    "images/brand/land_rover.png",
    "images/brand/lexus.png",
    "images/brand/lotus.png",
    "images/brand/maserati.png",
    "images/brand/maybach.png",
    "images/brand/mazda.png",
    "images/brand/mcLaren.png",
    "images/brand/mercedes.png",
    "images/brand/mini.png",
    "images/brand/mitsubishi.png",
    "images/brand/nissan.png",
    "images/brand/opel.png",
    "images/brand/peugeot.png",
    "images/brand/porsche.png",
    "images/brand/renault.png",
    "images/brand/rolls-royce.png",
    "images/brand/seat.png",
    "images/brand/skoda.png",
    "images/brand/smart.png",
    "images/brand/subaru.png",
    "images/brand/suzuki.png",
    "images/brand/tesla.png",
    "images/brand/toyota.png",
    "images/brand/uaz.png",
    "images/brand/volkswagen.png",
    "images/brand/volvo.png",
);

foreach ($brands as $_brand) {
    $item = explode('/', $_brand);
//    var_dump($item);
    $brand_name = explode('.', $item[2]);
//    var_dump($brand_name);
    $brand_name = ucfirst($brand_name[0]);
//    var_dump($brand_name);
    $db->insertBrand($brand_name, $_brand);
}

