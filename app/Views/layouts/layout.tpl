<!DOCTYPE html>
<html lang="pt">

	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

		<!--<link rel="stylesheet" href="{{ app.request.basepath }}/assets/css/main.css">-->
		<link href="{{ app.request.basepath }}/assets/css/bootstrap.min.css" rel="stylesheet">

		<link href="{{ app.request.basepath }}/assets/css/freelancer.css" rel="stylesheet">


		<link href="{{ app.request.basepath }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


		<!-- jQuery -->
		<script src="{{ app.request.basepath }}/assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{ app.request.basepath }}/assets/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="{{ app.request.basepath }}/assets/js/classie.js"></script>
		<script src="{{ app.request.basepath }}/assets/js/cbpAnimatedHeader.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="{{ app.request.basepath }}/assets/js/jqBootstrapValidation.js"></script>
		<script src="{{ app.request.basepath }}/assets/js/contact_me.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="{{ app.request.basepath }}/assets/js/freelancer.js"></script>

	</head>

	<body>

		<div id="page">
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
			    <div class="container">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header page-scroll">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			            <a class="navbar-brand" href="/">
			            	<img src="{{ app.request.basepath }}/assets/image/logo.png" width="80%" height="150%">
			            </a>
			        </div>

			        <!-- Collect the nav links, forms, and other content for toggling -->
			        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <ul class="nav navbar-nav navbar-right">
			                <li class="hidden">
			                    <a href="#page-top"></a>
			                </li>
			                {% for valores in menu %}
							<li class="page-scroll">
								<a href="{{ valores.link }}">{{ valores.titulo }}</a>
							</li>
							{% endfor %}
			            </ul>
			        </div>
			        <!-- /.navbar-collapse -->
			    </div>
			    <!-- /.container-fluid -->
			</nav>

			<!-- Header -->
			<header>
			    <div class="container">
								{% block content %}{% endblock %}
			    </div>
			</header>

		</div>

		<!-- Footer -->
		<div id="rodape">
			<footer class="text-center">
			    <div class="footer-above">
			        <div class="container">
			            <div class="row">
			                <div class="footer-col col-md-4">
			                    <h3>Localização</h3>
			                    <p>4Linux<br>São Paulo</p>
			                </div>
			                <div class="footer-col col-md-4">
			                    <h3>Nos siga na Web</h3>
			                    <ul class="list-inline">
			                        <li>
			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
			                        </li>
			                        <li>
			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
			                        </li>
			                        <li>
			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
			                        </li>
			                        <li>
			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
			                        </li>
			                        <li>
			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
			                        </li>
			                    </ul>
			                </div>

			            </div>
			        </div>
			    </div>
			    <div class="footer-below">
			        <div class="container">
			            <div class="row">
			                <div class="col-lg-12">
			                    Copyright &copy; Melhor Idade SA and Michael Douglas &reg;.
			                </div>
			            </div>
			        </div>
			    </div>
			</footer>
		</div>
	</body>

</html>
