<?php

    $file = fopen("input.txt", "r");

    $text = fgets($file);

    $numbers = (int)$text;

    $num1 = (int)$numbers / 100;

    $num2 = (int)($numbers / 10) % 10;

    $num3 = $numbers % 10;

    $outf = fopen("output.txt", "w");
