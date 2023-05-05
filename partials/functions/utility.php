<?php

function getPassword($chars, $leng)
{
    $newPassword = '';
    $charsTypes = array_keys($chars);
    for ($i = 0; $i < $leng; $i++) {
        $rndType = $charsTypes[rand(0, (count($charsTypes) - 1))];
        $newPassword .= $chars[$rndType][rand(0, (strlen($chars[$rndType]) - 1))];
    }
    return $newPassword;
}
function getChars($chars, $lower, $upper, $numeric, $simble)
{
    $charsOption = [
        ['lower', $lower,],
        ['upper', $upper,],
        ['numeric', $numeric,],
        ['symbols', $simble]
    ];
    $newChars = [];
    foreach ($charsOption as $option) {
        if ($option[1] == true) {
            $newChars[$option[0]] = $chars[$option[0]];
        }
    }
    return $newChars;
}

