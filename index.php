<?php
$base_time = 4867;
$time = $base_time % 84000;
$hours = floor($time/60/60);
$minut = floor(($time-($hours*60*60))/60);
$sec = $time % 60;
if($hours < 10)
    echo '0'.$hours;
else
    echo $hours;

echo ":";

if($minut < 10)
    echo '0'.$minut;
else
    echo $minut;

echo ":";

if($sec < 10)
    echo '0'.$sec;
else
    echo $sec;
