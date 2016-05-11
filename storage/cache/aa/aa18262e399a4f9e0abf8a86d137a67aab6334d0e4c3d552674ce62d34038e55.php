<?php

/* layouts/layout.tpl */
class __TwigTemplate_ff367f0f33095de2227c1d35d3dd41df5b4773bd94a77212cba90aa574cf4bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">

\t<head>

\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"\">

\t\t<!--<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/main.css\">-->
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/freelancer.css\" rel=\"stylesheet\">


\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">


\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.js\"></script>

\t\t<!-- Bootstrap Core JavaScript -->
\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>

\t\t<!-- Plugin JavaScript -->
\t\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/classie.js\"></script>
\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/cbpAnimatedHeader.js\"></script>

\t\t<!-- Contact Form JavaScript -->
\t\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jqBootstrapValidation.js\"></script>
\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/contact_me.js\"></script>

\t\t<!-- Custom Theme JavaScript -->
\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/freelancer.js\"></script>

\t</head>

\t<body>

\t\t<div id=\"page\">
\t\t\t<!-- Navigation -->
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t    <div class=\"container\">
\t\t\t        <!-- Brand and toggle get grouped for better mobile display -->
\t\t\t        <div class=\"navbar-header page-scroll\">
\t\t\t            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t                <span class=\"sr-only\">Toggle navigation</span>
\t\t\t                <span class=\"icon-bar\"></span>
\t\t\t                <span class=\"icon-bar\"></span>
\t\t\t                <span class=\"icon-bar\"></span>
\t\t\t            </button>
\t\t\t            <a class=\"navbar-brand\" href=\"/\">
\t\t\t            \t<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/image/pericles.jpg\" >
\t\t\t            </a>
\t\t\t        </div>

\t\t\t        <!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t                <li class=\"hidden\">
\t\t\t                    <a href=\"#page-top\"></a>
\t\t\t                </li>
\t\t\t                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["valores"]) {
            // line 69
            echo "\t\t\t\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["valores"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valores"], "titulo", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valores'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t            </ul>
\t\t\t        </div>
\t\t\t        <!-- /.navbar-collapse -->
\t\t\t    </div>
\t\t\t    <!-- /.container-fluid -->
\t\t\t</nav>

\t\t\t<!-- Header -->
\t\t\t<header>
\t\t\t    <div class=\"container\">
\t\t\t        <div class=\"row\">
\t\t\t            <div class=\"col-lg-12\">
\t\t\t                <img class=\"img-responsive\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/image/profile.png\" alt=\"\">
\t\t\t                <div class=\"intro-text\">
\t\t\t                    <span class=\"name\"></span>
\t\t\t                    <hr class=\"star-light\">
\t\t\t                    <span class=\"skills\">
\t\t\t\t\t\t\t\t";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "\t\t\t\t\t\t\t\t</span>
\t\t\t                </div>
\t\t\t            </div>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</header>

\t\t</div>

\t\t<!-- Footer -->
\t\t<div id=\"rodape\">
\t\t\t<footer class=\"text-center\">
\t\t\t    <div class=\"footer-above\">
\t\t\t        <div class=\"container\">
\t\t\t            <div class=\"row\">
\t\t\t                <div class=\"footer-col col-md-4\">
\t\t\t                    <h3>Localização</h3>
\t\t\t                    <p>4Linux<br>São Paulo</p>
\t\t\t                </div>
\t\t\t                <div class=\"footer-col col-md-4\">
\t\t\t                    <h3>Nos siga na Web</h3>
\t\t\t                    <ul class=\"list-inline\">
\t\t\t                        <li>
\t\t\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
\t\t\t                        </li>
\t\t\t                        <li>
\t\t\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
\t\t\t                        </li>
\t\t\t                        <li>
\t\t\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
\t\t\t                        </li>
\t\t\t                        <li>
\t\t\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
\t\t\t                        </li>
\t\t\t                        <li>
\t\t\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
\t\t\t                        </li>
\t\t\t                    </ul>
\t\t\t                </div>

\t\t\t            </div>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"footer-below\">
\t\t\t        <div class=\"container\">
\t\t\t            <div class=\"row\">
\t\t\t                <div class=\"col-lg-12\">
\t\t\t                    Copyright &copy; Melhor Idade SA and Michael Douglas &reg;.
\t\t\t                </div>
\t\t\t            </div>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</footer>
\t\t</div>
\t</body>

</html>";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 90,  167 => 91,  165 => 90,  157 => 85,  143 => 73,  132 => 70,  129 => 69,  125 => 68,  112 => 58,  90 => 39,  84 => 36,  80 => 35,  74 => 32,  70 => 31,  63 => 27,  57 => 24,  48 => 18,  42 => 15,  37 => 13,  33 => 12,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt">*/
/* */
/* 	<head>*/
/* */
/* 	    <meta charset="utf-8">*/
/* 	    <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	    <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	    <meta name="description" content="">*/
/* 	    <meta name="author" content="">*/
/* */
/* 		<!--<link rel="stylesheet" href="{{ app.request.basepath }}/assets/css/main.css">-->*/
/* 		<link href="{{ app.request.basepath }}/assets/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/* 		<link href="{{ app.request.basepath }}/assets/css/freelancer.css" rel="stylesheet">*/
/* */
/* */
/* 		<link href="{{ app.request.basepath }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* 		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/* 		<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/* */
/* 		<!-- jQuery -->*/
/* 		<script src="{{ app.request.basepath }}/assets/js/jquery.js"></script>*/
/* */
/* 		<!-- Bootstrap Core JavaScript -->*/
/* 		<script src="{{ app.request.basepath }}/assets/js/bootstrap.min.js"></script>*/
/* */
/* 		<!-- Plugin JavaScript -->*/
/* 		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* 		<script src="{{ app.request.basepath }}/assets/js/classie.js"></script>*/
/* 		<script src="{{ app.request.basepath }}/assets/js/cbpAnimatedHeader.js"></script>*/
/* */
/* 		<!-- Contact Form JavaScript -->*/
/* 		<script src="{{ app.request.basepath }}/assets/js/jqBootstrapValidation.js"></script>*/
/* 		<script src="{{ app.request.basepath }}/assets/js/contact_me.js"></script>*/
/* */
/* 		<!-- Custom Theme JavaScript -->*/
/* 		<script src="{{ app.request.basepath }}/assets/js/freelancer.js"></script>*/
/* */
/* 	</head>*/
/* */
/* 	<body>*/
/* */
/* 		<div id="page">*/
/* 			<!-- Navigation -->*/
/* 			<nav class="navbar navbar-default navbar-fixed-top">*/
/* 			    <div class="container">*/
/* 			        <!-- Brand and toggle get grouped for better mobile display -->*/
/* 			        <div class="navbar-header page-scroll">*/
/* 			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/* 			                <span class="sr-only">Toggle navigation</span>*/
/* 			                <span class="icon-bar"></span>*/
/* 			                <span class="icon-bar"></span>*/
/* 			                <span class="icon-bar"></span>*/
/* 			            </button>*/
/* 			            <a class="navbar-brand" href="/">*/
/* 			            	<img src="{{ app.request.basepath }}/assets/image/pericles.jpg" >*/
/* 			            </a>*/
/* 			        </div>*/
/* */
/* 			        <!-- Collect the nav links, forms, and other content for toggling -->*/
/* 			        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 			            <ul class="nav navbar-nav navbar-right">*/
/* 			                <li class="hidden">*/
/* 			                    <a href="#page-top"></a>*/
/* 			                </li>*/
/* 			                {% for valores in menu %}*/
/* 							<li class="page-scroll">*/
/* 								<a href="{{ valores.link }}">{{ valores.titulo }}</a>*/
/* 							</li>*/
/* 							{% endfor %}*/
/* 			            </ul>*/
/* 			        </div>*/
/* 			        <!-- /.navbar-collapse -->*/
/* 			    </div>*/
/* 			    <!-- /.container-fluid -->*/
/* 			</nav>*/
/* */
/* 			<!-- Header -->*/
/* 			<header>*/
/* 			    <div class="container">*/
/* 			        <div class="row">*/
/* 			            <div class="col-lg-12">*/
/* 			                <img class="img-responsive" src="{{ app.request.basepath }}/assets/image/profile.png" alt="">*/
/* 			                <div class="intro-text">*/
/* 			                    <span class="name"></span>*/
/* 			                    <hr class="star-light">*/
/* 			                    <span class="skills">*/
/* 								{% block content %}{% endblock %}*/
/* 								</span>*/
/* 			                </div>*/
/* 			            </div>*/
/* 			        </div>*/
/* 			    </div>*/
/* 			</header>*/
/* */
/* 		</div>*/
/* */
/* 		<!-- Footer -->*/
/* 		<div id="rodape">*/
/* 			<footer class="text-center">*/
/* 			    <div class="footer-above">*/
/* 			        <div class="container">*/
/* 			            <div class="row">*/
/* 			                <div class="footer-col col-md-4">*/
/* 			                    <h3>Localização</h3>*/
/* 			                    <p>4Linux<br>São Paulo</p>*/
/* 			                </div>*/
/* 			                <div class="footer-col col-md-4">*/
/* 			                    <h3>Nos siga na Web</h3>*/
/* 			                    <ul class="list-inline">*/
/* 			                        <li>*/
/* 			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>*/
/* 			                        </li>*/
/* 			                        <li>*/
/* 			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>*/
/* 			                        </li>*/
/* 			                        <li>*/
/* 			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>*/
/* 			                        </li>*/
/* 			                        <li>*/
/* 			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>*/
/* 			                        </li>*/
/* 			                        <li>*/
/* 			                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>*/
/* 			                        </li>*/
/* 			                    </ul>*/
/* 			                </div>*/
/* */
/* 			            </div>*/
/* 			        </div>*/
/* 			    </div>*/
/* 			    <div class="footer-below">*/
/* 			        <div class="container">*/
/* 			            <div class="row">*/
/* 			                <div class="col-lg-12">*/
/* 			                    Copyright &copy; Melhor Idade SA and Michael Douglas &reg;.*/
/* 			                </div>*/
/* 			            </div>*/
/* 			        </div>*/
/* 			    </div>*/
/* 			</footer>*/
/* 		</div>*/
/* 	</body>*/
/* */
/* </html>*/
