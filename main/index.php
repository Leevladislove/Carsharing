<?php

include(__DIR__ . '/../src/TariffInterface.php');
include(__DIR__ . '/../src/ServiceInterface.php');
include(__DIR__ . '/../src/TariffAbstract.php');
include(__DIR__ . '/../src/TariffBasic.php');
include(__DIR__ . '/../src/ServiceGPS.php');
include(__DIR__ . '/../src/ServiceDrive.php');
include(__DIR__ . '/../src/TariffHour.php');


$tariff = new TariffBasic(5, 60);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDrive(100));
echo $tariff->countPrice();
