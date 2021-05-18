<?php

  $num1 = $argv[1];
  $num2 = $argv[2];

  $faq1 = gmp_fact($num1);
  $faq2 = gmp_fact($num2);

  $faq = $faq1 / $faq2;

  echo "result = " . $faq . "\n";

 ?>
