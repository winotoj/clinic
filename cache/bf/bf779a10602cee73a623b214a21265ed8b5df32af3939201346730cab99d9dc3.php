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
            'calendar' => array($this, 'block_calendar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Clinic Medical\">
        <meta name=\"keywords\" content=\"Clinic Medical, book Appointment\">

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>  
        <script src=\"/assets/js/jquery.easing.min.js\"></script>
        <script src=\"/assets/js/custom.js\"></script>
        <script src=\"contactform/contactform.js\"></script>
        <script src=\"/assets/js/script.js\"></script>
    ";
        // line 17
        $this->displayBlock('matchpwd', $context, $blocks);
        // line 18
        echo "
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!--<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">-->
";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('calendar', $context, $blocks);
        // line 25
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">

</head>

<body id=\"myPage\" data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">
    ";
        // line 33
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 34
            echo "        <section id=\"login-info\" class=\"logins\">
            <div style=\"min-height: 40px; background: #163a47; color: #fff; padding: 13px;\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <p class=\"\">You're logged in as ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "lastName", array()), "html", null, true);
            echo "
                            You may <a href=\"/logout\">Logout</a></p>
                    </div>              
                </div>
            </div>
        </section>
    ";
        }
        // line 45
        echo "

    <section id=\"nav1\" class=\"banner\">
        <div style=\"min-height: 80px; background: #163a47;\">
            <nav class=\"navbar navbar-default \">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"assets/img/logo.png\" class=\"img-responsive\" style=\"width: 140px; margin-top: -16px;\"></a>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-right\" id=\"myNavbar\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"#banner\">Home</a></li>
                                <li class=\"\"><a href=\"#service\">Services</a></li>
                                <li class=\"\"><a href=\"#about\">About</a></li>
                                <li class=\"\"><a href=\"#testimonial\">Testimonial</a></li>
                                <li class=\"\"><a href=\"#contact\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </section>


";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "

<!--footer-->
<footer id=\"footer\">
    <div class=\"top-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">About Us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Quick Links</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"quick-info\">
                            <li><a href=\"index.html\"><i class=\"fa fa-circle\"></i>Home</a></li>
                            <li><a href=\"#service\"><i class=\"fa fa-circle\"></i>Service</a></li>
                            <li><a href=\"#contact\"><i class=\"fa fa-circle\"></i>Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Follow us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"social-icon\">
                            <li class=\"bglight-blue\"><i class=\"fa fa-facebook\"></i></li>
                            <li class=\"bgred\"><i class=\"fa fa-google-plus\"></i></li>
                            <li class=\"bgdark-blue\"><i class=\"fa fa-linkedin\"></i></li>
                            <li class=\"bglight-blue\"><i class=\"fa fa-twitter\"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    © Copyright Clinic Medical. All Rights Reserved

                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->



</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Clinical Medical";
    }

    // line 17
    public function block_matchpwd($context, array $blocks = array())
    {
    }

    // line 22
    public function block_css($context, array $blocks = array())
    {
    }

    // line 24
    public function block_calendar($context, array $blocks = array())
    {
    }

    // line 77
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
        return array (  212 => 77,  207 => 24,  202 => 22,  197 => 17,  191 => 7,  126 => 78,  124 => 77,  90 => 45,  78 => 38,  72 => 34,  70 => 33,  60 => 25,  58 => 24,  55 => 23,  53 => 22,  47 => 18,  45 => 17,  32 => 7,  24 => 1,);
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
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Clinical Medical{% endblock %}</title>
        <meta name=\"description\" content=\"Clinic Medical\">
        <meta name=\"keywords\" content=\"Clinic Medical, book Appointment\">

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>  
        <script src=\"/assets/js/jquery.easing.min.js\"></script>
        <script src=\"/assets/js/custom.js\"></script>
        <script src=\"contactform/contactform.js\"></script>
        <script src=\"/assets/js/script.js\"></script>
    {% block matchpwd %}{% endblock %}

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!--<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">-->
{% block css %}{% endblock %}

{% block calendar %}{% endblock %}

<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">

</head>

<body id=\"myPage\" data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">
    {% if userSession %}
        <section id=\"login-info\" class=\"logins\">
            <div style=\"min-height: 40px; background: #163a47; color: #fff; padding: 13px;\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <p class=\"\">You're logged in as {{ userSession.firstName }} {{userSession.lastName }}
                            You may <a href=\"/logout\">Logout</a></p>
                    </div>              
                </div>
            </div>
        </section>
    {% endif %}


    <section id=\"nav1\" class=\"banner\">
        <div style=\"min-height: 80px; background: #163a47;\">
            <nav class=\"navbar navbar-default \">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"assets/img/logo.png\" class=\"img-responsive\" style=\"width: 140px; margin-top: -16px;\"></a>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-right\" id=\"myNavbar\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"#banner\">Home</a></li>
                                <li class=\"\"><a href=\"#service\">Services</a></li>
                                <li class=\"\"><a href=\"#about\">About</a></li>
                                <li class=\"\"><a href=\"#testimonial\">Testimonial</a></li>
                                <li class=\"\"><a href=\"#contact\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </section>


{% block content %}{% endblock %}


<!--footer-->
<footer id=\"footer\">
    <div class=\"top-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">About Us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Quick Links</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"quick-info\">
                            <li><a href=\"index.html\"><i class=\"fa fa-circle\"></i>Home</a></li>
                            <li><a href=\"#service\"><i class=\"fa fa-circle\"></i>Service</a></li>
                            <li><a href=\"#contact\"><i class=\"fa fa-circle\"></i>Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Follow us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"social-icon\">
                            <li class=\"bglight-blue\"><i class=\"fa fa-facebook\"></i></li>
                            <li class=\"bgred\"><i class=\"fa fa-google-plus\"></i></li>
                            <li class=\"bgdark-blue\"><i class=\"fa fa-linkedin\"></i></li>
                            <li class=\"bglight-blue\"><i class=\"fa fa-twitter\"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    © Copyright Clinic Medical. All Rights Reserved

                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->



</body>

</html>
", "master.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
