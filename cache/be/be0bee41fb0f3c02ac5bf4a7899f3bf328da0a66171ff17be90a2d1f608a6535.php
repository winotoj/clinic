<?php

/* index.html.twig */
class __TwigTemplate_f35d03f948a1adc15b20fd4d71e9ecbf9ccb9d811692dd751f6caf185ced0c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Clinic Medical";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <div style=\"text-align: center\">
    <label class=\"btn-default\"><a class=\"navbar-brand navbar-link\" href=\"/bookappointment\">Book Appointment</a></label>
    </div>
  
</div>
        
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
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
{% block title %}Clinic Medical{% endblock %}


{% block content %}
<div class=\"container\">
    <div style=\"text-align: center\">
    <label class=\"btn-default\"><a class=\"navbar-brand navbar-link\" href=\"/bookappointment\">Book Appointment</a></label>
    </div>
  
</div>
        
{% endblock %}", "index.html.twig", "/home/cp4809/clinic.ipd10.com/templates/index.html.twig");
    }
}
