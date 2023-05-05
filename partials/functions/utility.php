<?php

function getPassword($chars, $leng)
{
    $newPassword = '';
    $charsTypes = array_keys($chars);
    for ($i = 0; $i < $leng; $i++) {
        $rndType = $charsTypes[rand(0, (count($charsTypes) - 1))];
        $newPassword .= $chars[$rndType][rand(0, (strlen($chars['numeric']) - 1))];
    }
    echo $newPassword;
}
