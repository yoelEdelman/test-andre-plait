<?php

function convertSize($bytes, $precision = 2)
{
    $measures['KB'] = $bytes / 1024;
    $measures['MB'] = $measures['KB'] / 1024;
    $measures['GB'] = $measures['MB'] / 1024;
    $measures['TB'] = $measures['GB'] / 1024;
    $measures['PB'] = $measures['TB'] / 1024;
    $measures['EB'] = $measures['PB'] / 1024;
    $measures['ZB'] = $measures['EB'] / 1024;
    $measures['YB'] = $measures['ZB'] / 1024;
    $measures['HB'] = $measures['YB'] / 1024;

    foreach ($measures as $key => $value) {
        if ($value < 1024) {
            return round($value, $precision) . ' ' . $key;
        }
    }

    return $bytes . ' B';
}