<?php
//MSultanMaulanana - 160403010041
require_once 'utspraktikum.php';
$bilangan = new bilangan();
$bil=2;

switch ($bil) {
  case 1:
    $bilangan -> Ganjil();

    break;
  case 2:
    $bilangan -> Genap();

    break;
  case 3:
    $bilangan -> lompat3();

   break;

  default:
     echo "ngawor mas";

    break;

}

 ?>
