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
        echo "Add Schedule";
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        echo " 

    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <link rel='stylesheet' href='/assets/css/datepicker.css'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    <script src=\"/assets/js/bootstrap-datepicker.js\"></script>

";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
    <label for=\"month\">Month: </label>
    <input type=\"text\" id=\"datepicker\" name=\"month\" class=\"monthPicker\" />
    <div id=\"viewSchedule\">
        
    </div>
    <script>
        \$(document).ready(function () {
            \$(\"#datepicker\").datepicker({
                format: \"mm-yyyy\",
                startView: \"year\",
                minViewMode: \"months\",
                showAnim: \"bounce\",
                viewMode: \"months\"

            }).on(\"changeDate\", function () {
                alert('wow' + \$(\"#datepicker\").val());
               \$(\"#viewSchedule\").load(\"/ajax/myschedule/\" + \$(\"#datepicker\").val());
            });
        });

    </script>

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
        return array (  53 => 16,  50 => 15,  36 => 6,  30 => 4,  11 => 1,);
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


{% block title %}Add Schedule{% endblock %}

{% block css %} 

    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <link rel='stylesheet' href='/assets/css/datepicker.css'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
    <script src=\"/assets/js/bootstrap-datepicker.js\"></script>

{% endblock %}
{% block content %}

    <label for=\"month\">Month: </label>
    <input type=\"text\" id=\"datepicker\" name=\"month\" class=\"monthPicker\" />
    <div id=\"viewSchedule\">
        
    </div>
    <script>
        \$(document).ready(function () {
            \$(\"#datepicker\").datepicker({
                format: \"mm-yyyy\",
                startView: \"year\",
                minViewMode: \"months\",
                showAnim: \"bounce\",
                viewMode: \"months\"

            }).on(\"changeDate\", function () {
                alert('wow' + \$(\"#datepicker\").val());
               \$(\"#viewSchedule\").load(\"/ajax/myschedule/\" + \$(\"#datepicker\").val());
            });
        });

    </script>

{% endblock %}
", "admin/doctor_schedule.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\doctor_schedule.html.twig");
    }
}
