<?php

/* master.html.twig */
class __TwigTemplate_87a86df006dd2202e643b264156f3e573238b8b43873d898258852522591c01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
            'css' => array($this, 'block_css'),
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

                    ";
        // line 33
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 34
            echo "                        <p class=\"navbar-text navbar-right actions\">You're logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "lastName", array()), "html", null, true);
            echo "
                            You may <a href=\"/logout\">Logout</a></p>
                        ";
        } else {
            // line 37
            echo "                        <p class=\"navbar-text navbar-right actions\">You're not logged in. You may <a href=\"/register\">Register</a>
                            or <a href=\"/login\">Login</a></p>
                        ";
        }
        // line 40
        echo "                </div>
            </div>
        </nav>
    </div>
    <div class=\"container\">
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "

</div>
</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Clinical Medical";
    }

    // line 12
    public function block_matchpwd($context, array $blocks = array())
    {
    }

    // line 16
    public function block_css($context, array $blocks = array())
    {
    }

    // line 45
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
        return array (  117 => 45,  112 => 16,  107 => 12,  101 => 7,  91 => 46,  89 => 45,  82 => 40,  77 => 37,  68 => 34,  66 => 33,  48 => 17,  46 => 16,  41 => 13,  39 => 12,  31 => 7,  23 => 1,);
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
        <title>{% block title %}Clinical Medical{% endblock %}</title>
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
", "master.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
