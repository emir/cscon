<?php

require "vendor/autoload.php";

$hesap = new \Emir\Hesap(
    new \Emir\Topla()
);

//Dummy
echo $hesap->yap();
