<?php
$uang = 100000;
 echo "Uang Ucup = $uang <br><br>";
 $jajan = 15000;
 echo "Jajan minuman = $jajan <br>";
 $hasil = $uang - $jajan;
 echo "Sisa uang Ucup jajan minuman  = $hasil <br><br>";
 $jajan2 = 25000;
 echo "Jajan sosis bakar = $jajan2 <br>";
 $hasil2 = $hasil - $jajan2;
 echo "sisa uang Ucup jajan Sosis bakar + minuman = $hasil2<br><br> ";
 $sedekah = 60000;
 $bagi = 60000 / 10;
 echo "Sedekah ke musafir 10% dari $sedekah yaitu sebesar $bagi <br>";
 $sisa = $sedekah - $bagi;
 echo "Sisa uang Ucup = $sisa <br><br>";
 $nemu_uang = 27000;
 echo "nemu uang dijalan sebesar 50% dari sisa uang  ucup $sisa yaitu sebesar $nemu_uang <br>";
 echo "sisa uang Ucup Sekarang = $sisa + $nemu_uang<br><br>";
 $total = $nemu_uang + $sisa;
 echo "Total Uang ucup adalah = $total";

  

?> 
