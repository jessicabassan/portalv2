<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', 'conteudo:index');
$app->get('/quemsomos', 'conteudo:quemsomos');
$app->get('/contato', 'conteudo:contato');

$app->post('/contato', function (Request $request) use ($app) {
    $sql = "INSERT INTO contato (nome, email, assunto, mensagem) VALUES (?,?,?,?)";
    $post = array(
    	'nome' => $request->request->get('nome'),
    	'email' => $request->request->get('email'),
    	'assunto' => $request->request->get('assunto'),
    	'mensagem' => $request->request->get('mensagem'),
    	);

    $post = $app['db']->insert('contato', $post);


    return $app->redirect('/contato?sucesso');
});