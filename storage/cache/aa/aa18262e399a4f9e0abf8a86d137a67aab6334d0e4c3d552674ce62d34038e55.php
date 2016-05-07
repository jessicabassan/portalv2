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
\t\t<div id=\"conteudo-cabecalho\">
\t\t\t<div id=\"logo\"><a href=\"/\">LOGO VAI AQUI</a></div>
\t\t</div>

\t\t<div id=\"conteudo-cabecalho\">
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
\t\tCONTEUDO VAI AQUI
\t\t";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t</div>
\t<div id=\"rodape\">
\t\tRODAPE VAI AQUI
\t</div>
</div>

</body>

</html>";
    }

    // line 35
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
        return array (  73 => 35,  61 => 36,  59 => 35,  33 => 12,  20 => 1,);
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
/* 		<div id="conteudo-cabecalho">*/
/* 			<div id="logo"><a href="/">LOGO VAI AQUI</a></div>*/
/* 		</div>*/
/* */
/* 		<div id="conteudo-cabecalho">*/
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
/* 		CONTEUDO VAI AQUI*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	<div id="rodape">*/
/* 		RODAPE VAI AQUI*/
/* 	</div>*/
/* </div>*/
/* */
/* </body>*/
/* */
/* </html>*/
