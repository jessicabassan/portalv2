<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', 'conteudo:index');
$app->get('/quemsomos', 'conteudo:quemsomos');
$app->get('/contato', 'conteudo:contato');
$app->get('/login', 'conteudo:login');
$app->get('/loginAdmin', 'conteudo:loginAdmin');
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
    $query = $autenticacao->fetchAll(PDO::FETCH_ASSOC);

    if(empty($query)) {
        return $app->redirect('/login?usuarionaoencontrado');
    }

    return ("Bem vindo sr. " . $query[0]['nome']);
});

$app->post('/loginAdmin', function (Request $lrequest) use ($app){
  $login =array(
    'email' => $lrequest->request->get('email'),
    'senha' => $lrequest->request->get('senha'),
  );

    $autenticacao = $app['db']->prepare('SELECT nome FROM usuario WHERE email=? AND senha=? AND tipo_acesso="a"');
    $autenticacao->execute([ $login['email'], $login['senha'] ]);
    $query = $autenticacao->fetchAll(PDO::FETCH_ASSOC);

    if(empty($query)) {
        return $app->redirect("/loginAdmin?usuarionaoencontrado");
    }

    return $app->redirect('/admin/dashboard');
});
