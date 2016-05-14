<?php
namespace app\Controller\Conteudo;
use app\Controller\baseController;
use app\Model\Conteudo\conteudoModel;

class conteudoController extends baseController
{
    public function getConteudo()
    {
        return new conteudoModel($this->app);
    }
    //Portal
    public function index()
    {
       return $this->render('home', ["data" => 'Portal Idoso']);
    }

    public function quemsomos()
    {
    	$dados = $this->getConteudo()->conteudoQuemSomos();

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

    public function loginAdmin()
    {
        return $this->render('loginAdmin');
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
