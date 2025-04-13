<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////

include_once './config/configUrl.php';
//Definir o fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');
//----------------------------------------------------------------------------//
//O código verifica se o parâmetro 'url' foi passado na URL e não está vazio.
//Se o parâmetro existir e tiver um valor, ele será atribuído à variável $url.
//Caso contrário, $url receberá o valor padrão 'home'.
$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input
 (INPUT_GET, 'url', FILTER_DEFAULT) : 'login');
//Test
//var_dump($url);
//----------------------------------------------------------------------------//
//Converter a URL de uma string para um array.
//O array_filter remove os elementos vazios do array resultante da divisão da string.
$url = array_filter(explode('/', $url));
//-----------------------------------------------------------------------------------//
//Test
//var_dump($url);
//-----------------------------------------------------------------------------------//
// Define o caminho do arquivo com base na URL. Se $url[1] existir e não estiver vazio, 
//usa seu valor; caso contrário, usa 'home'.
$arquivo = 'structure/' . (isset($url[1]) && !empty($url[1]) ? $url[1] : 'login') . '.php';
//-----------------------------------------------------------------------------------//
//is_file($arquivo): Verifica se o arquivo especificado em $arquivo existe no sistema de arquivos.
if(is_file($arquivo)){
    //-----------------------------------------------------------------------------------//
    //Caso o arquivo exista, o sistema irá incluir o arquivo.
    //O arquivo é o que está na primeira posição do array criado acima e tem a extensão .php.
    //Isso significa que o conteúdo do arquivo será executado como parte do código atual.
    include $arquivo;
    //-----------------------------------------------------------------------------------//
//Caso o arquivo não exista, o sistema irá incluir a página 404.php.
}else{
    //--------------------------------------------------------------------------------------//
    //Essa página é uma página de erro que informa que a página não foi encontrada.
    //Essa página deve ser criada na pasta structure.
    include 'structure/404.php';
}
exit;//--------------------------------------------------------------------------------------------//
//Tes
//var_dump($url);
?>
