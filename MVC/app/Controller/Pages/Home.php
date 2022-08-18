<?php

/*Home.php é o primeiro controlador do site.*/

/*Essa classe "Home" é para gerenciar todas as requisições que chegarem na home do site.*/

/*Um detalhe importante é sobre o uso de maiúsculas no nome deste controlador. Acredito que foi usado para diferenciar de palavra reservada.*/

namespace app\Controller\Pages;

class Home{

    /*Método para retornar o conteúdo (view) da classe Home. Retorna uma string.*/

    public static function getHome(){
        return 'Olá mundo!';
    }
}