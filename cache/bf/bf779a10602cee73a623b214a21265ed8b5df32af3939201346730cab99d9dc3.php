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
        <script src=\"/assets/js/jquery.min.js\"></script>
        ";
        // line 9
        $this->displayBlock('matchpwd', $context, $blocks);
        // line 10
        echo "        <script src=\"/assets/js/script.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
    </head>

    <body>
        <div>
            <nav class=\"navbar navbar-default navigation-clean-button\">
                <div class=\"container\">
                    <div class=\"navbar-header\"><a class=\"navbar-brand navbar-link\" href=\"#\">Todo List</a>
                        <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                        <ul class=\"nav navbar-nav\">
                            <li role=\"presentation\"><a href=\"/\">List Todo</a></li>
                            <li role=\"presentation\"><a href=\"/add\">Add Todo</a></li>
                        </ul>
                        
                        ";
        // line 29
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 30
            echo "            <p class=\"navbar-text navbar-right actions\">You're logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "lastName", array()), "html", null, true);
            echo "
                You may <a href=\"/logout\">Logout</a></p>
        ";
        } else {
            // line 33
            echo "        <p class=\"navbar-text navbar-right actions\">You're not logged in. You may <a href=\"/register\">Register</a>
            or <a href=\"/login\">Login</a></p>
        ";
        }
        // line 36
        echo "                    </div>
                </div>
            </nav>
        </div>
        <div class=\"listTrip\">
        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "        
        
    </div>
    </body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null)), "html", null, true);
    }

    // line 9
    public function block_matchpwd($context, array $blocks = array())
    {
    }

    // line 12
    public function block_css($context, array $blocks = array())
    {
    }

    // line 41
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
        return array (  113 => 41,  108 => 12,  103 => 9,  97 => 7,  87 => 42,  85 => 41,  78 => 36,  73 => 33,  64 => 30,  62 => 29,  44 => 13,  42 => 12,  38 => 10,  36 => 9,  31 => 7,  23 => 1,);
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
        <title>{% block title page_title|title %}</title>
        <script src=\"/assets/js/jquery.min.js\"></script>
        {% block matchpwd %}{% endblock %}
        <script src=\"/assets/js/script.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        {% block css %}{% endblock %}
        <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
    </head>

    <body>
        <div>
            <nav class=\"navbar navbar-default navigation-clean-button\">
                <div class=\"container\">
                    <div class=\"navbar-header\"><a class=\"navbar-brand navbar-link\" href=\"#\">Todo List</a>
                        <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                        <ul class=\"nav navbar-nav\">
                            <li role=\"presentation\"><a href=\"/\">List Todo</a></li>
                            <li role=\"presentation\"><a href=\"/add\">Add Todo</a></li>
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
        <div class=\"listTrip\">
        {% block content %}{% endblock %}
        
        
    </div>
    </body>

</html>
", "master.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
