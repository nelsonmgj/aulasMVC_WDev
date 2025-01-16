<?php

/*Page.php é o segundo controlador do site.*/

/*Essa classe "Page" é para gerenciar todas as requisições que chegarem na página page.html.*/

/*Um detalhe importante é sobre o uso de maiúsculas no nome deste controlador. Acredito que foi usado para diferenciar de palavra reservada.*/

namespace app\Controller\Pages;

use \App\Utils\View;
/*Recebendo conteúdos das views.*/

class Page{

    /*Método para retornar o conteúdo (view) da classe Page. Retorna uma string.*/

    /*Essa será uma página genérica, ou seja, pode mudar somente alterando as variáveis $title e $content.*/
    public static function getPage($title,$content){
        return View::render('Pages/Page',[
            'title' => $title,
            'content' => $content
        ]);
        //O array foi colocado agora para inserir o conteúdo dinâmico na página.
    }
}