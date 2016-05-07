<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="{{ app.request.basepath }}/assets/css/main.css">
</head>

<body>

<div id="page">
	<div id="cabecalho">
		<div id="conteudo-cabecalho">
			<div id="logo"><a href="/">LOGO VAI AQUI</a></div>
		</div>

		<div id="conteudo-cabecalho">
			<div id="menu">
				<ul>
					<li>
						<a href="/quemsomos">Quem somos</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="main">
		CONTEUDO VAI AQUI
		{% block content %}{% endblock %}
	</div>
	<div id="rodape">
		RODAPE VAI AQUI
	</div>
</div>

</body>

</html>