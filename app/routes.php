<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', 'conteudo:index');
$app->get('/quemsomos', 'conteudo:quemsomos');
$app->get('/contato', 'conteudo:contato');
$app->get('/login', 'conteudo:login');
$app->get('/admin/', 'conteudo:indexAdmin');
$app->get('/admin/dashboard', 'conteudo:dashboard');
$app->get('/cadastro', 'conteudo:cadastro');
$app->get('/projeto', 'conteudo:projeto');

$app->post('/contato', function (Request $request) use ($app) {
    $post = array(
    	'nome' => $request->request->get('nome'),
    	'email' => $request->request->get('email'),
    	'assunto' => $request->request->get('assunto'),
    	'mensagem' => $request->request->get('mensagem'),
    	);

    $post = $app['db']->insert('contato', $post);

    $message = \Swift_Message::newInstance()
        ->setSubject($request->request->get('assunto'))
        ->setFrom(array('melhoridadesa@gmail.com'))
        ->setTo(array($request->request->get('email')))
        ->setBody($request->get($request->request->get('mensagem')));

    $enviado = $app['mailer']->send($message);

    return $app->redirect('/contato?sucesso');
});

$app->post('/login', function (Request $lrequest) use ($app){
  $login =array(
    'email' => $lrequest->request->get('email'),
    'senha' => $lrequest->request->get('senha'),
  );

    $autenticacao = $app['db']->prepare('SELECT nome FROM usuario WHERE email=? AND senha=?');
    $autenticacao->execute([ $login['email'], $login['senha'] ]);
    $nome = $autenticacao->fetchAll(PDO::FETCH_ASSOC);

    if(empty($nome)) {

        return ("Usuário e senha não encontrados");
    }
    
    return ("Bem vindo sr. " . $nome[0]['nome']);
});
