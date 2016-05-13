<?php 
namespace app\Controller\Error;

use app\Controller\baseController;

class errorController extends baseController
{
    public function erro404()
    {
       return $this->render('404');
    }
}
