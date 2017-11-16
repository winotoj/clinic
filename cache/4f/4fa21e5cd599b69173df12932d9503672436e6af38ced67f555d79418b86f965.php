<?php

/* login_success.html.twig */
class __TwigTemplate_3ce9508162727df4f7fea7334dc5859aa8051c75b0703f8668ff18e3d548fc5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login_success.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'login' => array($this, 'block_login'),
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
        echo "Login Successful";
    }

    // line 5
    public function block_login($context, array $blocks = array())
    {
        // line 6
        echo "    <p>Login successful, <a href=\"/\">click to continue</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
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

{% block title %}Login Successful{% endblock %}

{% block login %}
    <p>Login successful, <a href=\"/\">click to continue</a>.</p>
{% endblock %}
    

", "login_success.html.twig", "/home/cp4809/clinic.ipd10.com/templates/login_success.html.twig");
    }
}
