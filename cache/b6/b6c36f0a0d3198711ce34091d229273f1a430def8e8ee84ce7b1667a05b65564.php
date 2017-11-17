<?php

/* passreset_form_success.html.twig */
class __TwigTemplate_5de7d76e2e34ba9a00fcb7f33e1a7d4487fa7111f6e34d0e817a775d471f96db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "passreset_form_success.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Password reset successful";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
    <p>Your password has been reset <a href=\"/login\">Click to login</a>.</p>
    
";
    }

    public function getTemplateName()
    {
        return "passreset_form_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}Password reset successful{% endblock %}

{% block content %}
    
    <p>Your password has been reset <a href=\"/login\">Click to login</a>.</p>
    
{% endblock %}", "passreset_form_success.html.twig", "/home/cp4809/clinic.ipd10.com/templates/passreset_form_success.html.twig");
    }
}
