<?php

/* patient/bookappointment.html.twig */
class __TwigTemplate_25eb6fe289db761e6c7174aa98462c0ce3766c5ccd71c59dd7d0b4a758e1de0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "patient/bookappointment.html.twig", 1);
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
        echo "Register";
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "    <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    
    
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"post\"  id=\"contact_form\">
            
            
            <div>
                <span class=\"select2 select2-container select2-container--default alt select2-container--below\" dir=\"ltr\" style=\"width: 293px;\"><span class=\"selection\"><span class=\"select2-selection select2-selection--multiple\" tabindex=\"0\" role=\"combobox\" aria-autocomplete=\"list\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-owns=\"select2-dr_specialty_id-results\"><ul class=\"select2-selection__rendered\"><li class=\"select2-search select2-search--inline\"><input class=\"select2-search__field\" type=\"search\" tabindex=\"-1\" autocomplete=\"off\" autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\" role=\"textbox\" placeholder=\"Specialty\" style=\"\"></li></ul></span></span><span class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Speciallity: </label>  
                <div class=\"col-md-4 inputGroupContainer\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input  name=\"speciallity\" placeholder=\"Speciallity\" class=\"form-control\"  type=\"text\">
                        <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "fNameError", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" >Date:</label> 
                <div class=\"col-md-4 inputGroupContainer\">
                   <div class='input-group date'>
                       <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                    <input type='date' class=\"form-control\" />
                    
                </div>
                </div>
                
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "patient/bookappointment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  63 => 20,  60 => 19,  51 => 13,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title %}Register{% endblock %}
{% block matchpwd %}
    <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    
    
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

{% endblock %}
{% block css %} 
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
{% endblock %}


{% block content %}
    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"post\"  id=\"contact_form\">
            
            
            <div>
                <span class=\"select2 select2-container select2-container--default alt select2-container--below\" dir=\"ltr\" style=\"width: 293px;\"><span class=\"selection\"><span class=\"select2-selection select2-selection--multiple\" tabindex=\"0\" role=\"combobox\" aria-autocomplete=\"list\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-owns=\"select2-dr_specialty_id-results\"><ul class=\"select2-selection__rendered\"><li class=\"select2-search select2-search--inline\"><input class=\"select2-search__field\" type=\"search\" tabindex=\"-1\" autocomplete=\"off\" autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\" role=\"textbox\" placeholder=\"Specialty\" style=\"\"></li></ul></span></span><span class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Speciallity: </label>  
                <div class=\"col-md-4 inputGroupContainer\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input  name=\"speciallity\" placeholder=\"Speciallity\" class=\"form-control\"  type=\"text\">
                        <p>{{ e.fNameError }}</p>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" >Date:</label> 
                <div class=\"col-md-4 inputGroupContainer\">
                   <div class='input-group date'>
                       <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                    <input type='date' class=\"form-control\" />
                    
                </div>
                </div>
                
            </div>
        </form>
    </div>
{% endblock %}", "patient/bookappointment.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\patient\\bookappointment.html.twig");
    }
}
