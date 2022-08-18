<?php

//Classe para gerenciar o acesso às views.

namespace App\Utils;

class View{
    //Métodos para renderizar as views.
    //Poderão ser usados dados dinâmicos, ou seja, dados de nomes etc que mudarão conforme a necessidade.

    private static function getContentView($view){
        //Método para retornar se o conteúdo da view existe ou não nas pastas resources. Ele pegará o conteúdo exato da view. O parâmetro é uma string ($view). Ele irá retornar uma string.
        
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        //Foi para a pasta das views e a variável será o complemento da informação, então a string sempre será pasta/nomedoarquivo e haverá a inserção do .html já concatenado previamente.

        return file_exists($file) ? file_get_contents($file) : '';
        //Retorno condicional. Caso haja o conteúdo na variável, retornará o conteúdo, caso não exista, retornará vazio.
    }

    public static function render($view){
        //Método responsável por retornar o conteúdo renderizado de uma view, ou seja com quaisquer variáveis para deixar a página dinâmica. O parâmetro é uma string ($view). Ele irá retornar uma string.
        
        $contentView = self::getContentView($view);
        //Criada variável do conteúdo da view. Recebe o conteúdo da view.

        return $contentView;
        //Retornando o conteúdo renderizado.
    }
}