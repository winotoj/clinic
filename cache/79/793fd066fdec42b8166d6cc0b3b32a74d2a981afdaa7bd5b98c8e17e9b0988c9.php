<?php

/* patient/myaccount.html.twig */
class __TwigTemplate_9724ea60e445061663779e8b403a415a92e074bd105d818cf80b91f21f463190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "patient/myaccount.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["MyAccount"]) ? $context["MyAccount"] : null), "html", null, true);
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "        <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

    ";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        echo " 
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"nav nav-pills nav-justified\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">My Account</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Make Booking</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">My Bookings</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class=\"col-xs-12\">
            <div class=\"mha-common-header\">
                Welcome to your MyHealthAccess Account
            </div>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"mha-common-header\"> 
                <p> To book an appointment, please go to the My Clinics tab and click \"Book Appointment\" beside the Clinic you would like to book with, or click \"Find a Clinic\" to request a connection with a new clinic.
                </p>
                <p>
                    You can see a list of appointments you have booked and make changes to them by clicking Appointments.
                </p>
                <p>
                    To edit your contact preferences and account details, or to log-out, please click the username dropdown on the top right.
                </p>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "patient/myaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  57 => 16,  48 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title MyAccount %}
    {% block matchpwd %}
        <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

    {% endblock %}
    {% block css %} 
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    {% endblock %}


    {% block content %}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"nav nav-pills nav-justified\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">My Account</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Make Booking</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">My Bookings</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class=\"col-xs-12\">
            <div class=\"mha-common-header\">
                Welcome to your MyHealthAccess Account
            </div>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"mha-common-header\"> 
                <p> To book an appointment, please go to the My Clinics tab and click \"Book Appointment\" beside the Clinic you would like to book with, or click \"Find a Clinic\" to request a connection with a new clinic.
                </p>
                <p>
                    You can see a list of appointments you have booked and make changes to them by clicking Appointments.
                </p>
                <p>
                    To edit your contact preferences and account details, or to log-out, please click the username dropdown on the top right.
                </p>
            </div>
        </div>
    {% endblock %}", "patient/myaccount.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\patient\\myaccount.html.twig");
    }
}
