<?php

/* passreset_request_success.html.twig */
class __TwigTemplate_40b40a52e93abaa9ec113ee676a762c3608924e59b5d80f8f1030fb167cf7a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "passreset_request_success.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Forgotten Password";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <p> Email with password reset code was sent. Please allow a few minutes for it to arrive. If you can't find it please check your spam folder.
        the reset request will expire in 1 hour.<a href=\"/\">Click to continue</a></p>


";
    }

    public function getTemplateName()
    {
        return "passreset_request_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  36 => 5,  30 => 4,  11 => 1,);
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


{% block title %}Forgotten Password{% endblock %}
{% block css %} 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
{% endblock %}
{% block content %}

    <p> Email with password reset code was sent. Please allow a few minutes for it to arrive. If you can't find it please check your spam folder.
        the reset request will expire in 1 hour.<a href=\"/\">Click to continue</a></p>


{% endblock %}", "passreset_request_success.html.twig", "/home/cp4809/clinic.ipd10.com/templates/passreset_request_success.html.twig");
    }
}
