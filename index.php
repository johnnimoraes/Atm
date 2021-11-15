<?php

require_once 'vendor/autoload.php';


$atm = new \Atm\Atm();
$atm->bill()->addBill(100)->addBill(50)->addBill(5)->addBill(2);

$result = null;
try {
  $result = $atm->withdraw()->ammount(1069);
} catch (\Throwable $exception) {
  exit($exception);
}

foreach ($result as $bill => $quantity) {
  echo $quantity . ' notas de ' . $bill . '<br/>';
}
