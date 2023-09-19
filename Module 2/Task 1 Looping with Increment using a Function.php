<?php

function x($start, $end, $step) {
    for($start; $start <= $end; $start += $step) {
        $separator = '';
        if($start < $end) {
            $separator = ', ';

        }
        echo $start . $separator;
    }
    echo "\n";
}
x(2,20,2);

function y($start, $end, $step) {
    
    while($start <= $end) {
        $separator = '';
        if($start < $end) {
            $separator = ', ';

        }
        echo $start . $separator;
        $start += $step;
    } 
    echo "\n";
}
y(2,20,2);

function z($start, $end, $step) {
    do{
        $separator = '';
        if($start < $end) {
            $separator = ', ';

        }
        echo $start . $separator;
        $start += $step;
    }while($start <= $end);
    echo "\n";
}
y(2,20,2);