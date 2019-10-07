<?php
include_once "class_stopWatch.php";
$stopWatch = new StopWatch();
$stopWatch->start();
for($i=0;$i<1000000;$i++){
    echo $i;
}
echo "<br>";
$stopWatch->stop();
echo $stopWatch->getElapsedTime();
