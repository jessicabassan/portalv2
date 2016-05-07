<?php
namespace app\Controller\Conteudo;
use app\Controller\baseController;
class conteudoController extends baseController 
{
    public function index()
    {
       return $this->render('home', ["data" => 'Portal Idoso']);
    }
    
    public function quemsomos()
    {
        return $this->render('quemsomos');
    }
}