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

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

\t<!--<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/main.css\">-->
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/freelancer.css\" rel=\"stylesheet\">


\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">


\t<!-- jQuery -->
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.js\"></script>

\t<!-- Bootstrap Core JavaScript -->
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>

\t<!-- Plugin JavaScript -->
\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/classie.js\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/cbpAnimatedHeader.js\"></script>

\t<!-- Contact Form JavaScript -->
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jqBootstrapValidation.js\"></script>
\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/contact_me.js\"></script>

\t<!-- Custom Theme JavaScript -->
\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/freelancer.js\"></script>

</head>

<body>

\t<div id=\"page\">
\t\t<!-- Navigation -->
\t\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t    <div class=\"container\">
\t\t        <!-- Brand and toggle get grouped for better mobile display -->
\t\t        <div class=\"navbar-header page-scroll\">
\t\t            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t                <span class=\"sr-only\">Toggle navigation</span>
\t\t                <span class=\"icon-bar\"></span>
\t\t                <span class=\"icon-bar\"></span>
\t\t                <span class=\"icon-bar\"></span>
\t\t            </button>
\t\t            <a class=\"navbar-brand\" href=\"/\">
\t\t            \t<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/image/pericles.jpg\" >
\t\t            </a>
\t\t        </div>

\t\t        <!-- Collect the nav links, forms, and other content for toggling -->
\t\t        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t            <ul class=\"nav navbar-nav navbar-right\">
\t\t                <li class=\"hidden\">
\t\t                    <a href=\"#page-top\"></a>
\t\t                </li>
\t\t                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["valores"]) {
            // line 69
            echo "\t\t\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["valores"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valores"], "titulo", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valores'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t            </ul>
\t\t        </div>
\t\t        <!-- /.navbar-collapse -->
\t\t    </div>
\t\t    <!-- /.container-fluid -->
\t\t</nav>

\t\t<!-- Header -->
\t\t<header>
\t\t    <div class=\"container\">
\t\t        <div class=\"row\">
\t\t            <div class=\"col-lg-12\">
\t\t                <img class=\"img-responsive\" src=\"portal/midia/img/profile.png\" alt=\"\">
\t\t                <div class=\"intro-text\">
\t\t                    <span class=\"name\"></span>
\t\t                    <hr class=\"star-light\">
\t\t                    <span class=\"skills\">
\t\t\t\t\t\t\t";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "\t\t\t\t\t\t\t</span>
\t\t                </div>
\t\t            </div>
\t\t        </div>
\t\t    </div>
\t\t</header>

\t</div>

\t<!-- Footer -->
\t<footer class=\"text-center\">
\t    <div class=\"footer-above\">
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"footer-col col-md-4\">
\t                    <h3>Localização</h3>
\t                    <p>4Linux<br>São Paulo</p>
\t                </div>
\t                <div class=\"footer-col col-md-4\">
\t                    <h3>Nos siga na Web</h3>
\t                    <ul class=\"list-inline\">
\t                        <li>
\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
\t                        </li>
\t                        <li>
\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
\t                        </li>
\t                        <li>
\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
\t                        </li>
\t                        <li>
\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
\t                        </li>
\t                        <li>
\t                            <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
\t                        </li>
\t                    </ul>
\t                </div>

\t            </div>
\t        </div>
\t    </div>
\t    <div class=\"footer-below\">
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-12\">
\t                    Copyright &copy; Your Website 2014
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</footer>

\t<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
\t<div class=\"scroll-top page-scroll visible-xs visible-sm\">
\t    <a class=\"btn btn-primary\" href=\"#page-top\">
\t        <i class=\"fa fa-chevron-up\"></i>
\t    </a>
\t</div>

\t<!-- Portfolio Modals -->
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t    <div class=\"modal-content\">
\t        <div class=\"close-modal\" data-dismiss=\"modal\">
\t            <div class=\"lr\">
\t                <div class=\"rl\">
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-8 col-lg-offset-2\">
\t                    <div class=\"modal-body\">
\t                        <h2>Melhor idade</h2>
\t                        <hr class=\"star-primary\">
\t                        <img src=\"img/portfolio/cabin.png\" class=\"img-responsive img-centered\" alt=\"\">
\t                        <p>Criação de casas virtuais para desabrigados digitais <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. Esta ONG arrecada dinheiro para construção destas casas!</p>
\t                        <ul class=\"list-inline item-details\">
\t                            <li>Client:
\t                                <strong><a href=\"http://startbootstrap.com\">MISA</a>
\t                                </strong>
\t                            </li>
\t                            <li>Date:
\t                                <strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t                                </strong>
\t                            </li>
\t                            <li>Service:
\t                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t                                </strong>
\t                            </li>
\t                        </ul>
\t                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t    <div class=\"modal-content\">
\t        <div class=\"close-modal\" data-dismiss=\"modal\">
\t            <div class=\"lr\">
\t                <div class=\"rl\">
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-8 col-lg-offset-2\">
\t                    <div class=\"modal-body\">
\t                        <h2>Project Title</h2>
\t                        <hr class=\"star-primary\">
\t                        <img src=\"img/portfolio/cake.png\" class=\"img-responsive img-centered\" alt=\"\">
\t                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t                        <ul class=\"list-inline item-details\">
\t                            <li>Client:
\t                                <strong><a href=\"http://startbootstrap.com\">Melhor idade SA</a>
\t                                </strong>
\t                            </li>
\t                            <li>Date:
\t                                <strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t                                </strong>
\t                            </li>
\t                            <li>Service:
\t                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t                                </strong>
\t                            </li>
\t                        </ul>
\t                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t    <div class=\"modal-content\">
\t        <div class=\"close-modal\" data-dismiss=\"modal\">
\t            <div class=\"lr\">
\t                <div class=\"rl\">
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-8 col-lg-offset-2\">
\t                    <div class=\"modal-body\">
\t                        <h2>Project Title</h2>
\t                        <hr class=\"star-primary\">
\t                        <img src=\"img/portfolio/circus.png\" class=\"img-responsive img-centered\" alt=\"\">
\t                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t                        <ul class=\"list-inline item-details\">
\t                            <li>Client:
\t                                <strong><a href=\"http://startbootstrap.com\">Start Bootstrap</a>
\t                                </strong>
\t                            </li>
\t                            <li>Date:
\t                                <strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t                                </strong>
\t                            </li>
\t                            <li>Service:
\t                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t                                </strong>
\t                            </li>
\t                        </ul>
\t                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t    <div class=\"modal-content\">
\t        <div class=\"close-modal\" data-dismiss=\"modal\">
\t            <div class=\"lr\">
\t                <div class=\"rl\">
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-8 col-lg-offset-2\">
\t                    <div class=\"modal-body\">
\t                        <h2>Project Title</h2>
\t                        <hr class=\"star-primary\">
\t                        <img src=\"img/portfolio/game.png\" class=\"img-responsive img-centered\" alt=\"\">
\t                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t                        <ul class=\"list-inline item-details\">
\t                            <li>Client:
\t                                <strong><a href=\"http://startbootstrap.com\">Start Bootstrap</a>
\t                                </strong>
\t                            </li>
\t                            <li>Date:
\t                                <strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t                                </strong>
\t                            </li>
\t                            <li>Service:
\t                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t                                </strong>
\t                            </li>
\t                        </ul>
\t                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t    <div class=\"modal-content\">
\t        <div class=\"close-modal\" data-dismiss=\"modal\">
\t            <div class=\"lr\">
\t                <div class=\"rl\">
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-8 col-lg-offset-2\">
\t                    <div class=\"modal-body\">
\t                        <h2>Project Title</h2>
\t                        <hr class=\"star-primary\">
\t                        <img src=\"img/portfolio/safe.png\" class=\"img-responsive img-centered\" alt=\"\">
\t                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t                        <ul class=\"list-inline item-details\">
\t                            <li>Client:
\t                                <strong><a href=\"http://startbootstrap.com\">Start Bootstrap</a>
\t                                </strong>
\t                            </li>
\t                            <li>Date:
\t                                <strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t                                </strong>
\t                            </li>
\t                            <li>Service:
\t                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t                                </strong>
\t                            </li>
\t                        </ul>
\t                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t    <div class=\"modal-content\">
\t        <div class=\"close-modal\" data-dismiss=\"modal\">
\t            <div class=\"lr\">
\t                <div class=\"rl\">
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"container\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-8 col-lg-offset-2\">
\t                    <div class=\"modal-body\">
\t                        <h2>Project Title</h2>
\t                        <hr class=\"star-primary\">
\t                        <img src=\"img/portfolio/submarine.png\" class=\"img-responsive img-centered\" alt=\"\">
\t                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t                        <ul class=\"list-inline item-details\">
\t                            <li>Client:
\t                                <strong><a href=\"http://startbootstrap.com\">Start Bootstrap</a>
\t                                </strong>
\t                            </li>
\t                            <li>Date:
\t                                <strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t                                </strong>
\t                            </li>
\t                            <li>Service:
\t                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t                                </strong>
\t                            </li>
\t                        </ul>
\t                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>

</body>

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
        return array (  454 => 90,  164 => 91,  162 => 90,  143 => 73,  132 => 70,  129 => 69,  125 => 68,  112 => 58,  90 => 39,  84 => 36,  80 => 35,  74 => 32,  70 => 31,  63 => 27,  57 => 24,  48 => 18,  42 => 15,  37 => 13,  33 => 12,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/* 	<!--<link rel="stylesheet" href="{{ app.request.basepath }}/assets/css/main.css">-->*/
/* 	<link href="{{ app.request.basepath }}/assets/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/* 	<link href="{{ app.request.basepath }}/assets/css/freelancer.css" rel="stylesheet">*/
/* */
/* */
/* 	<link href="{{ app.request.basepath }}/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* 	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/* 	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/* */
/* 	<!-- jQuery -->*/
/* 	<script src="{{ app.request.basepath }}/assets/js/jquery.js"></script>*/
/* */
/* 	<!-- Bootstrap Core JavaScript -->*/
/* 	<script src="{{ app.request.basepath }}/assets/js/bootstrap.min.js"></script>*/
/* */
/* 	<!-- Plugin JavaScript -->*/
/* 	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* 	<script src="{{ app.request.basepath }}/assets/js/classie.js"></script>*/
/* 	<script src="{{ app.request.basepath }}/assets/js/cbpAnimatedHeader.js"></script>*/
/* */
/* 	<!-- Contact Form JavaScript -->*/
/* 	<script src="{{ app.request.basepath }}/assets/js/jqBootstrapValidation.js"></script>*/
/* 	<script src="{{ app.request.basepath }}/assets/js/contact_me.js"></script>*/
/* */
/* 	<!-- Custom Theme JavaScript -->*/
/* 	<script src="{{ app.request.basepath }}/assets/js/freelancer.js"></script>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* 	<div id="page">*/
/* 		<!-- Navigation -->*/
/* 		<nav class="navbar navbar-default navbar-fixed-top">*/
/* 		    <div class="container">*/
/* 		        <!-- Brand and toggle get grouped for better mobile display -->*/
/* 		        <div class="navbar-header page-scroll">*/
/* 		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/* 		                <span class="sr-only">Toggle navigation</span>*/
/* 		                <span class="icon-bar"></span>*/
/* 		                <span class="icon-bar"></span>*/
/* 		                <span class="icon-bar"></span>*/
/* 		            </button>*/
/* 		            <a class="navbar-brand" href="/">*/
/* 		            	<img src="{{ app.request.basepath }}/assets/image/pericles.jpg" >*/
/* 		            </a>*/
/* 		        </div>*/
/* */
/* 		        <!-- Collect the nav links, forms, and other content for toggling -->*/
/* 		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 		            <ul class="nav navbar-nav navbar-right">*/
/* 		                <li class="hidden">*/
/* 		                    <a href="#page-top"></a>*/
/* 		                </li>*/
/* 		                {% for valores in menu %}*/
/* 						<li class="page-scroll">*/
/* 							<a href="{{ valores.link }}">{{ valores.titulo }}</a>*/
/* 						</li>*/
/* 						{% endfor %}*/
/* 		            </ul>*/
/* 		        </div>*/
/* 		        <!-- /.navbar-collapse -->*/
/* 		    </div>*/
/* 		    <!-- /.container-fluid -->*/
/* 		</nav>*/
/* */
/* 		<!-- Header -->*/
/* 		<header>*/
/* 		    <div class="container">*/
/* 		        <div class="row">*/
/* 		            <div class="col-lg-12">*/
/* 		                <img class="img-responsive" src="portal/midia/img/profile.png" alt="">*/
/* 		                <div class="intro-text">*/
/* 		                    <span class="name"></span>*/
/* 		                    <hr class="star-light">*/
/* 		                    <span class="skills">*/
/* 							{% block content %}{% endblock %}*/
/* 							</span>*/
/* 		                </div>*/
/* 		            </div>*/
/* 		        </div>*/
/* 		    </div>*/
/* 		</header>*/
/* */
/* 	</div>*/
/* */
/* 	<!-- Footer -->*/
/* 	<footer class="text-center">*/
/* 	    <div class="footer-above">*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="footer-col col-md-4">*/
/* 	                    <h3>Localização</h3>*/
/* 	                    <p>4Linux<br>São Paulo</p>*/
/* 	                </div>*/
/* 	                <div class="footer-col col-md-4">*/
/* 	                    <h3>Nos siga na Web</h3>*/
/* 	                    <ul class="list-inline">*/
/* 	                        <li>*/
/* 	                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>*/
/* 	                        </li>*/
/* 	                    </ul>*/
/* 	                </div>*/
/* */
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	    <div class="footer-below">*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-12">*/
/* 	                    Copyright &copy; Your Website 2014*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</footer>*/
/* */
/* 	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->*/
/* 	<div class="scroll-top page-scroll visible-xs visible-sm">*/
/* 	    <a class="btn btn-primary" href="#page-top">*/
/* 	        <i class="fa fa-chevron-up"></i>*/
/* 	    </a>*/
/* 	</div>*/
/* */
/* 	<!-- Portfolio Modals -->*/
/* 	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	    <div class="modal-content">*/
/* 	        <div class="close-modal" data-dismiss="modal">*/
/* 	            <div class="lr">*/
/* 	                <div class="rl">*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-8 col-lg-offset-2">*/
/* 	                    <div class="modal-body">*/
/* 	                        <h2>Melhor idade</h2>*/
/* 	                        <hr class="star-primary">*/
/* 	                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">*/
/* 	                        <p>Criação de casas virtuais para desabrigados digitais <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. Esta ONG arrecada dinheiro para construção destas casas!</p>*/
/* 	                        <ul class="list-inline item-details">*/
/* 	                            <li>Client:*/
/* 	                                <strong><a href="http://startbootstrap.com">MISA</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Date:*/
/* 	                                <strong><a href="http://startbootstrap.com">April 2014</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Service:*/
/* 	                                <strong><a href="http://startbootstrap.com">Web Development</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                        </ul>*/
/* 	                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>*/
/* 	                    </div>*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	    <div class="modal-content">*/
/* 	        <div class="close-modal" data-dismiss="modal">*/
/* 	            <div class="lr">*/
/* 	                <div class="rl">*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-8 col-lg-offset-2">*/
/* 	                    <div class="modal-body">*/
/* 	                        <h2>Project Title</h2>*/
/* 	                        <hr class="star-primary">*/
/* 	                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">*/
/* 	                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>*/
/* 	                        <ul class="list-inline item-details">*/
/* 	                            <li>Client:*/
/* 	                                <strong><a href="http://startbootstrap.com">Melhor idade SA</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Date:*/
/* 	                                <strong><a href="http://startbootstrap.com">April 2014</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Service:*/
/* 	                                <strong><a href="http://startbootstrap.com">Web Development</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                        </ul>*/
/* 	                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>*/
/* 	                    </div>*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	    <div class="modal-content">*/
/* 	        <div class="close-modal" data-dismiss="modal">*/
/* 	            <div class="lr">*/
/* 	                <div class="rl">*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-8 col-lg-offset-2">*/
/* 	                    <div class="modal-body">*/
/* 	                        <h2>Project Title</h2>*/
/* 	                        <hr class="star-primary">*/
/* 	                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">*/
/* 	                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>*/
/* 	                        <ul class="list-inline item-details">*/
/* 	                            <li>Client:*/
/* 	                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Date:*/
/* 	                                <strong><a href="http://startbootstrap.com">April 2014</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Service:*/
/* 	                                <strong><a href="http://startbootstrap.com">Web Development</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                        </ul>*/
/* 	                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>*/
/* 	                    </div>*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	    <div class="modal-content">*/
/* 	        <div class="close-modal" data-dismiss="modal">*/
/* 	            <div class="lr">*/
/* 	                <div class="rl">*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-8 col-lg-offset-2">*/
/* 	                    <div class="modal-body">*/
/* 	                        <h2>Project Title</h2>*/
/* 	                        <hr class="star-primary">*/
/* 	                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">*/
/* 	                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>*/
/* 	                        <ul class="list-inline item-details">*/
/* 	                            <li>Client:*/
/* 	                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Date:*/
/* 	                                <strong><a href="http://startbootstrap.com">April 2014</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Service:*/
/* 	                                <strong><a href="http://startbootstrap.com">Web Development</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                        </ul>*/
/* 	                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>*/
/* 	                    </div>*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	    <div class="modal-content">*/
/* 	        <div class="close-modal" data-dismiss="modal">*/
/* 	            <div class="lr">*/
/* 	                <div class="rl">*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-8 col-lg-offset-2">*/
/* 	                    <div class="modal-body">*/
/* 	                        <h2>Project Title</h2>*/
/* 	                        <hr class="star-primary">*/
/* 	                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">*/
/* 	                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>*/
/* 	                        <ul class="list-inline item-details">*/
/* 	                            <li>Client:*/
/* 	                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Date:*/
/* 	                                <strong><a href="http://startbootstrap.com">April 2014</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Service:*/
/* 	                                <strong><a href="http://startbootstrap.com">Web Development</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                        </ul>*/
/* 	                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>*/
/* 	                    </div>*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</div>*/
/* 	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	    <div class="modal-content">*/
/* 	        <div class="close-modal" data-dismiss="modal">*/
/* 	            <div class="lr">*/
/* 	                <div class="rl">*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	        <div class="container">*/
/* 	            <div class="row">*/
/* 	                <div class="col-lg-8 col-lg-offset-2">*/
/* 	                    <div class="modal-body">*/
/* 	                        <h2>Project Title</h2>*/
/* 	                        <hr class="star-primary">*/
/* 	                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">*/
/* 	                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>*/
/* 	                        <ul class="list-inline item-details">*/
/* 	                            <li>Client:*/
/* 	                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Date:*/
/* 	                                <strong><a href="http://startbootstrap.com">April 2014</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                            <li>Service:*/
/* 	                                <strong><a href="http://startbootstrap.com">Web Development</a>*/
/* 	                                </strong>*/
/* 	                            </li>*/
/* 	                        </ul>*/
/* 	                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>*/
/* 	                    </div>*/
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	</div>*/
/* */
/* </body>*/
/* */
/* </html>*/
