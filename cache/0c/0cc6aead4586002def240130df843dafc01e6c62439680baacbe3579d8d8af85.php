<?php

/* doctors/drdescription.html.twig */
class __TwigTemplate_bba9d9f52b334d25caf35ecc786d73b06847c35b48ed7e4c152047c29e6af42d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "doctors/drdescription.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Specialit's List";
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "    <!--<script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"col-sm-6\">  

        <p><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "pathImage", array()), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "firstName", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "lastName", array()), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
        </p>
        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), (isset($context["id"]) ? $context["id"] : null), array(), "array"), "html", null, true);
        echo "</p>
        <p>NAMe ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "firstName", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "lastName", array()), "html", null, true);
        echo "</p>
        <p>Description: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "description", array()), "html", null, true);
        echo "</p>       

    </div>
    <div class=\"col-sm-6\">  
        <p>available Time</p>
        <ul class=\"ulavtime\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weekDate"]) ? $context["weekDate"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 29
            echo "
                <li class=\"avTime\">               
                        <span style=\"display: block; text-align: center;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dayOfWeek", array()), "html", null, true);
            echo "</span><span style=\"display: block; text-align: center;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "day", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "month", array()), "html", null, true);
            echo " </span></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </ul>
    </div>

";
    }

    public function getTemplateName()
    {
        return "doctors/drdescription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  98 => 31,  94 => 29,  90 => 28,  81 => 22,  76 => 21,  72 => 20,  64 => 18,  60 => 16,  57 => 15,  48 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title %}Specialit's List{% endblock %}
{% block matchpwd %}
    <!--<script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

{% endblock %}
{% block css %} 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
{% endblock %}

{% block content %}
    <div class=\"col-sm-6\">  

        <p><img src=\"{{dr.pathImage}}\" width=\"100\" height=\"100\" alt=\"{{dr.firstName }}{{dr.lastName }}\" class=\"img-circle img-responsive\">
        </p>
        <p>{{dr[id]}}</p>
        <p>NAMe {{dr.firstName}}{{dr.lastName}}</p>
        <p>Description: {{dr.description}}</p>       

    </div>
    <div class=\"col-sm-6\">  
        <p>available Time</p>
        <ul class=\"ulavtime\">
            {% for d in weekDate %}

                <li class=\"avTime\">               
                        <span style=\"display: block; text-align: center;\">{{d.dayOfWeek}}</span><span style=\"display: block; text-align: center;\"> {{d.day}}{{d.month}} </span></li>
                        {% endfor %}
        </ul>
    </div>

{% endblock %}", "doctors/drdescription.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\doctors\\drdescription.html.twig");
    }
}
