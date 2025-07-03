<?php

function get4($base, $height)
{
    return $base * $height;
}

function get3($base, $height)
{
    return $base * $height / 2;
}

function getdaikei($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo get4(5,5) . "\n";
echo get3(7, 8) . "\n";
echo getdaikei(4,5,4);