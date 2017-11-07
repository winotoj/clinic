<?php

/* admin/doctor_schedule.html.twig */
class __TwigTemplate_7b7c693b4ee54f726d7ad87c89b357076e7904cd3529db5a00d844ded0ae723a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/doctor_schedule.html.twig", 1);
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

    // line 6
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <style>

        select.monthpick {
            margin-right: 5px;
        }

        select.yearpick {
            margin-left: 5px;
        }
    </style>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/js/jquery.monthpicker.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#yearpicker').monthpicker();
           

            \$('input:submit').click(function () {
                \$('#yearpicker').show();
                
                return false;
            });
        });
        
    </script>
    <script>
        \$(document).ready(function () {
            // respond to all events that may change the value of input
            \$('input[name=yearpicker]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var yearpicker = \$('input[name=yearpicker]').val();
                
            });
        });
    </script>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "    <form name=\"test\">
        <input type=\"text\" id=\"yearpicker\" name=\"yearpicker\" >
        <br>
    </form>


";
    }

    public function getTemplateName()
    {
        return "admin/doctor_schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 46,  80 => 45,  36 => 6,  30 => 4,  11 => 1,);
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
    <style>

        select.monthpick {
            margin-right: 5px;
        }

        select.yearpick {
            margin-left: 5px;
        }
    </style>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/js/jquery.monthpicker.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#yearpicker').monthpicker();
           

            \$('input:submit').click(function () {
                \$('#yearpicker').show();
                
                return false;
            });
        });
        
    </script>
    <script>
        \$(document).ready(function () {
            // respond to all events that may change the value of input
            \$('input[name=yearpicker]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var yearpicker = \$('input[name=yearpicker]').val();
                
            });
        });
    </script>
{% endblock %}
{% block content %}
    <form name=\"test\">
        <input type=\"text\" id=\"yearpicker\" name=\"yearpicker\" >
        <br>
    </form>


{% endblock %}
", "admin/doctor_schedule.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\doctor_schedule.html.twig");
    }
}
