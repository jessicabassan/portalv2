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

    $message = \Swift_Message::newInstance()
        ->setSubject('teste')
        ->setFrom(array('melhoridade@gmail.com'))
        ->setTo(array('melhoridade@gmail.com'))
        ->setBody($request->get('TeTa'));

    $app['mailer']->send($message);

    return $app->redirect('/contato?sucesso');
});