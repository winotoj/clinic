<?php

/* master.html.twig */
class __TwigTemplate_7af445ea07190ebdd92d13a51a8cd1e8d8f85733bb487e57c2e54ee5b6a1e75b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
            'css' => array($this, 'block_css'),
            'calendar' => array($this, 'block_calendar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- <script src=\"/assets/js/jquery.min.js\"></script>-->
    ";
        // line 12
        $this->displayBlock('matchpwd', $context, $blocks);
        // line 13
        echo "    <script src=\"/assets/js/script.js\"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
";
        // line 18
        $this->displayBlock('calendar', $context, $blocks);
        // line 19
        echo "</head>

<body>
    <div>
        <nav class=\"navbar navbar-default navigation-clean-button\">
            <div class=\"container\">
                <div class=\"navbar-header\"><a class=\"navbar-brand navbar-link\" href=\"#\">Clinic Medical</a>
                    <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    <ul class=\"nav navbar-nav\">
                        <li role=\"presentation\"><a href=\"/\">Services</a></li>
                        <li role=\"presentation\"><a href=\"/add\">Contact Us</a></li>                        
                    </ul>

                    ";
        // line 34
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 35
            echo "                        <p class=\"navbar-text navbar-right actions\">You're logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "lastName", array()), "html", null, true);
            echo "
                            You may <a href=\"/logout\">Logout</a></p>
                        ";
        } else {
            // line 38
            echo "                        <p class=\"navbar-text navbar-right actions\">You're not logged in. You may <a href=\"/register\">Register</a>
                            or <a href=\"/login\">Login</a></p>
                        ";
        }
        // line 41
        echo "                </div>
            </div>
        </nav>
    </div>
    <div class=\"container\">
    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "

</div>
</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_matchpwd($context, array $blocks = array())
    {
    }

    // line 16
    public function block_css($context, array $blocks = array())
    {
    }

    // line 18
    public function block_calendar($context, array $blocks = array())
    {
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  121 => 18,  116 => 16,  111 => 12,  106 => 7,  96 => 47,  94 => 46,  87 => 41,  82 => 38,  73 => 35,  71 => 34,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  32 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}{% endblock %}</title>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- <script src=\"/assets/js/jquery.min.js\"></script>-->
    {% block matchpwd %}{% endblock %}
    <script src=\"/assets/js/script.js\"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
{% block css %}{% endblock %}
<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
{% block calendar %}{% endblock %}
</head>

<body>
    <div>
        <nav class=\"navbar navbar-default navigation-clean-button\">
            <div class=\"container\">
                <div class=\"navbar-header\"><a class=\"navbar-brand navbar-link\" href=\"#\">Clinic Medical</a>
                    <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    <ul class=\"nav navbar-nav\">
                        <li role=\"presentation\"><a href=\"/\">Services</a></li>
                        <li role=\"presentation\"><a href=\"/add\">Contact Us</a></li>                        
                    </ul>

                    {% if userSession %}
                        <p class=\"navbar-text navbar-right actions\">You're logged in as {{ userSession.firstName }} {{userSession.lastName }}
                            You may <a href=\"/logout\">Logout</a></p>
                        {% else %}
                        <p class=\"navbar-text navbar-right actions\">You're not logged in. You may <a href=\"/register\">Register</a>
                            or <a href=\"/login\">Login</a></p>
                        {% endif %}
                </div>
            </div>
        </nav>
    </div>
    <div class=\"container\">
    {% block content %}{% endblock %}


</div>
</body>

</html>
", "master.html.twig", "/home/cp4809/clinic.ipd10.com/templates/master.html.twig");
    }
}
