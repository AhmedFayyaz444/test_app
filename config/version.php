<?php

$hash = trim(exec('git log --pretty="%h" -n1 HEAD'));
$date = Carbon\Carbon::parse(trim(exec('git log -n1 --pretty=%ci HEAD')));

$tag  = exec('git describe');
$tag  = str_replace('-g' . $hash, '', $tag);

$string = $date->format('m-d-Y H:i:s') . " ($tag)";

return [
    'tag'    => $tag,
    'date'   => $date,
    'hash'   => $hash,
    'string' => $string,
    'check' => 'ahmed 5',
];

