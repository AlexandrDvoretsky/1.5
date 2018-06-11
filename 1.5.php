<?php
  //  1.5 По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.
  for($i=1000; $i<10000; $i++)
  {
    $fourth = floor(($i%100)%10);
    $third = floor(($i%100)/10);
    $second = floor(($i%1000)/100);
    $first = floor($i/1000);
    $reversNum = $fourth.$third.$second.$first;
    echo $reversNum."</br>";
  }
?>
