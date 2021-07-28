<?php
/**
 * Second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 *4*3*2*1 = 120
 */
/*
 function faktorial($n){
	$angka = 1;
	$faktorial = 1;
	 while($angka <= $n){
		 $faktorial = $faktorial * $angka;
		 $angka = $angka + 1;
         
	 }
     echo "$n! = ";
	  return $faktorial;
}
echo faktorial(6);
*/
function faktorial($number)
 {
     $result = 1;
     for ($i=$number; $i >= 1 ; $i--) { 
         $result = $result * $i;
     }
    //  return $result;
    echo "Faktorial of $number is $result";
 }
  
//  echo "Faktorial of 10 is ". faktorial(10);
faktorial(6);

?>