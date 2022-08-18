<?php

/*Home.php é o primeiro controlador do site.*/

/*Essa classe "Home" é para gerenciar todas as requisições que chegarem na home do site.*/

/*Um detalhe importante é sobre o uso de maiúsculas no nome deste controlador. Acredito que foi usado para diferenciar de palavra reservada.*/

namespace app\Controller\Pages;

use \App\Utils\View;
/*Recebendo conteúdos das views.*/

class Home{

    /*Método para retornar o conteúdo (view) da classe Home. Retorna uma string.*/

    public static function getHome(){
        return View::render('Pages/Home',[
            'name' => 'Canal do Aprendiz',
            'description' => 'canal: nelsonmgj.com.br'
        ]);
        //O array foi colocado agora para inserir o conteúdo dinâmico na página.
    }
}