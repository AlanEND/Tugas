<?php
//MSultanMaulanana 160403010041
class bilangan{
public function Ganjil(){
  echo "Bilangan 1-10 Ganjil <br>";
   for ($x=1; $x<=10; $x+=2)
     echo "Nomor: $x <br>";
}

public function Genap(){
  echo "Bilangan 1-10 Genap <br>";
   for ($i=1; $i<=10; $i++){
    if($i%2==0){
      echo "Nomor: $i <br>";
    }
  }
}

public function lompat3(){
  echo "Bilangan 1-100 Lompat 3 angka <br>";
   for ($a=1; $a<=100; $a+=3)
     echo "Nomor: $a <br>";
}
}
?>
