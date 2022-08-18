<?php

require __DIR__.'/vendor/autoload.php';

//Máxima atenção quanto ao detalhe de usar o app começando com maiúscula, só desse jeito funcionou!
use \App\Controller\Pages\Home;

echo Home::getHome();