<?php

/* pages/conteudo/home.tpl */
class __TwigTemplate_9ce0a6a88a16a10e8ebefb3c233269330066c5594af9e9704f9571b9137868b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.tpl", "pages/conteudo/home.tpl", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
        echo "</h1>
    <p>Não importa qual seja a sua idade atual: moço, meia idade ou velho. Sua idade é um estado de sua mente e seus interesses devem sempre estar voltados para o futuro, para a frente, para o amanhã.</p>
";
    }

    public function getTemplateName()
    {
        return "pages/conteudo/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layouts/layout.tpl' %}*/
/* */
/* {% block content %}*/
/*     <h1>{{data}}</h1>*/
/*     <p>Não importa qual seja a sua idade atual: moço, meia idade ou velho. Sua idade é um estado de sua mente e seus interesses devem sempre estar voltados para o futuro, para a frente, para o amanhã.</p>*/
/* {% endblock %}*/
