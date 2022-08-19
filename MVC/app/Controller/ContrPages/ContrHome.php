<?php

//Home.php é o primeiro controlador do site.

/*Essa classe "Home" é para gerenciar todas as requisições que chegarem na home do site.*/

//Um detalhe importante é sobre o uso de maiúsculas no nome deste controlador. Acredito que foi usado para diferenciar de palavra reservada.

namespace app\Controller\ContrPages;

use \App\Utils\View;
/*Recebendo conteúdos das views.*/

class Home extends ContrPage{    //Foi inserida a 'extends Page' para que a página home carregue todo o formato utilizado em page, ou seja, carrega toda a estrutura html. IMPORTANTE: home passa a ser realmente uma página html, pois foi inserida em page.

    //Método para retornar o conteúdo (view) da classe Home. Retorna uma string.

    public static function getHome(){
        $content = View::render('Pages/Home',[  //Agora content recebe o conteúdo anterior de home, ou seja, a estrutura anterior era "return View...", agora é "$content = View...". Esse conteúdo passa a ser a view de home
            'name' => 'Canal do Aprendiz',
            'description' => 'canal: nelsonmgj.com.br'
        ]);

        //Como é uma extensão de page, irá retornar como parent ou self - ESTUDAR

        return parent::getPage('<Canal do Aprendiz>', $content);    //Retornando a view da página.
    }
}