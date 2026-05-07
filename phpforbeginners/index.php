<?php

$heading = 'Home';

function dumpDie($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

dumpDie($_SERVER);

require "views/index.view.php";

