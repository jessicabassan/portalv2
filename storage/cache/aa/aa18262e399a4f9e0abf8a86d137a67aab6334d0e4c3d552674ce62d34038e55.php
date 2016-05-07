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

\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/main.css\">
</head>

<body>

<div id=\"page\">
\t<div id=\"cabecalho\">
\t\t<div class=\"conteudo-cabecalho\">
\t\t\t<div id=\"logo\"><a href=\"/\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/image/logo.png\" ></a></div>
\t\t</div>

\t\t<div class=\"conteudo-cabecalho\">
\t\t\t<div id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/quemsomos\">Quem somos</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"main\">
\t\t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "\t</div>
\t<div id=\"rodape\">
\t\tThis website is powered by Melhor Idade SA and Michael Douglas. © 2016
\t</div>
</div>

</body>

</html>";
    }

    // line 34
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
        return array (  75 => 34,  63 => 35,  61 => 34,  44 => 20,  33 => 12,  20 => 1,);
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
/* 	<link rel="stylesheet" href="{{ app.request.basepath }}/assets/css/main.css">*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="page">*/
/* 	<div id="cabecalho">*/
/* 		<div class="conteudo-cabecalho">*/
/* 			<div id="logo"><a href="/"><img src="{{ app.request.basepath }}/assets/image/logo.png" ></a></div>*/
/* 		</div>*/
/* */
/* 		<div class="conteudo-cabecalho">*/
/* 			<div id="menu">*/
/* 				<ul>*/
/* 					<li>*/
/* 						<a href="/quemsomos">Quem somos</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="main">*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	<div id="rodape">*/
/* 		This website is powered by Melhor Idade SA and Michael Douglas. © 2016*/
/* 	</div>*/
/* </div>*/
/* */
/* </body>*/
/* */
/* </html>*/
