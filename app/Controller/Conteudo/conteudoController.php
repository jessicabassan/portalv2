<?php
namespace app\Controller\Conteudo;
use app\Controller\baseController;
class conteudoController extends baseController 
{
    public function index()
    {
       return $this->render('home', ["data" => 'INICIAL1']);
    }
    
    public function quemsomos()
    {
        return $this->render('novo');
    }
}