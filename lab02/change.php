<?php

$hour = 0;
$minute = 0;
$second = 0;

const TOTAL_SECOND = 36690;




$hour = (int)(TOTAL_SECOND / 3600);
$minute = (int)((TOTAL_SECOND % 3600)/60);
$second = (int)(TOTAL_SECOND) % 60;

echo "Total Second is : " , TOTAL_SECOND;
echo "<br>";

echo "Hours is : $hour<br>";
echo "Minute is : $minute <br>";
echo "Second is : $second<br>";
