<?php

/* internal_error.html.twig */
class __TwigTemplate_caf40df14809fe2adf9a3beec96156ed51020de8ee6138a681bbead23a825128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "internal_error.html.twig", 1);
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
        echo "Internal error";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
<p>Internal error occurred, we're very sorry.
    Our team of coding ninjas has been notified
    and is already working on the problem.</p>
<p><a href=\"/\">Click to continue</a></p>
<img src=\"/images/ninja.png\">

";
    }

    public function getTemplateName()
    {
        return "internal_error.html.twig";
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

{% block title %}Internal error{% endblock %}

{% block content %}
    
<p>Internal error occurred, we're very sorry.
    Our team of coding ninjas has been notified
    and is already working on the problem.</p>
<p><a href=\"/\">Click to continue</a></p>
<img src=\"/images/ninja.png\">

{% endblock %}", "internal_error.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\internal_error.html.twig");
    }
}
