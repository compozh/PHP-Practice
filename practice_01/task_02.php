<?php

    $file = fopen("input.txt", "r");

    $text = fgets($file);

    $numbers = (int)$text;

    $num1 = (int)($numbers / 100);

    $num2 = (int)($numbers / 10) % 10;

    $num3 = $numbers % 10;

    $outf = fopen("output.txt", "w");

    fwrite($outf, $num1. "\n");
    fwrite($outf, $num2. "\n");
    fwrite($outf, $num3. "\n");

    fclose($file);
    fclose($outf);

    echo $num1."</br>".$num2."</br>".$num3."</br>";