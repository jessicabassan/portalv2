<?php
namespace app\Controller\Conteudo;
use app\Controller\baseController;
class conteudoController extends baseController
{
    //Portal
    public function index()
    {
       return $this->render('home', ["data" => 'Portal Idoso']);
    }

    public function quemsomos()
    {
    	$sql = 'SELECT * FROM conteudo WHERE titulo = "quemsomos"';
    	$dados = $this->app['db']->fetchAssoc($sql);

        return $this->render('quemsomos', $dados);
    }

    public function contato()
    {
        return $this->render('contato');
    }

    public function login()
    {
        return $this->render('login');
    }

    public function projeto()
    {
      return $this->render('projeto');
    }

    public function cadastro()
    {
      return $this->render('cadastro');
    }

    //Admin
    public function indexAdmin()
    {
        return $this->render('loginAdmin');
    }

    public function dashboard()
    {
        return $this->render('dashboard');
    }
}
