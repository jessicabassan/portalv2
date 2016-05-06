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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/layout.tpl";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }
}
/* {% block content %}{% endblock %}*/
