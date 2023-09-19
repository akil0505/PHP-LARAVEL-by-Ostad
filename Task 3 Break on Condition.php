<?php

$first = 0;
$second = 1;
for ($i = 1; $i <= 10; $i++) {
    if($first > 100) {
        break;
    }

    echo $first . " ";

    $next = $first + $second;
    $first = $second;
    $second = $next;
}