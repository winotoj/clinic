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
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js\"></script>
 ";
        // line 10
        echo "
";
        // line 15
        echo "  ";
        // line 17
        echo "    <script type=\"text/javascript\">
             
        \$(document).ready(function () {
            \$('.itemName').select2({
                placeholder: 'Select an item',
                ajax: {
                    url: '../ajaxpro.php',
                    dataType: 'json',
                    delay: 250,
                    data: function (term, page) {
              return {
                  term: term, // search term
                  page: 10
              };
            },
                    processResults: function (data, page) {
                        return {
                            results: data.items
                        };
                    },
                    cache: true
                }
            });            
        });
    </script>
  ";
    }

    // line 44
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"post\"  id=\"contact_form\">

            <div style=\"width:520px;margin:0px auto;margin-top:30px;height:500px;\">
                <h2>Select Box with Search Option Jquery Select2.js</h2>
                <select class=\"itemName form-control\" style=\"width:500px\" name=\"itemName\"></select>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Speciallity: </label>  
                <div class=\"col-md-4 inputGroupContainer\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input  name=\"speciallity\" placeholder=\"Speciallity\" class=\"form-control\"  type=\"text\">                        
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
        return array (  90 => 50,  87 => 49,  78 => 44,  49 => 17,  47 => 15,  44 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js\"></script>
 {#       <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>#}
{#        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/esm/popper.js\"></script>#}
{#        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>#}

{#<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
#}
  {#  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    #}
    <script type=\"text/javascript\">
             
        \$(document).ready(function () {
            \$('.itemName').select2({
                placeholder: 'Select an item',
                ajax: {
                    url: '../ajaxpro.php',
                    dataType: 'json',
                    delay: 250,
                    data: function (term, page) {
              return {
                  term: term, // search term
                  page: 10
              };
            },
                    processResults: function (data, page) {
                        return {
                            results: data.items
                        };
                    },
                    cache: true
                }
            });            
        });
    </script>
  {#  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
#}{% endblock %}
{% block css %} 
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
    
{% endblock %}

{% block content %}
    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"post\"  id=\"contact_form\">

            <div style=\"width:520px;margin:0px auto;margin-top:30px;height:500px;\">
                <h2>Select Box with Search Option Jquery Select2.js</h2>
                <select class=\"itemName form-control\" style=\"width:500px\" name=\"itemName\"></select>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Speciallity: </label>  
                <div class=\"col-md-4 inputGroupContainer\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input  name=\"speciallity\" placeholder=\"Speciallity\" class=\"form-control\"  type=\"text\">                        
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
