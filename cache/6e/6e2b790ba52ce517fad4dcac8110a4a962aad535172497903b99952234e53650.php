<?php

/* myaccount.html.twig */
class __TwigTemplate_3c2eb1a0d4c29527c88c987a8d8d77104a411dd40792e8b9130e2c20c8a15919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "myaccount.html.twig", 1);
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
        echo "        <div class=\"col-xs-12 navbar-container\">
        <div class=\"main-navbar\" role=\"navigation\">
          <div class=\"square-navtabs\">
            <ul class=\"nav nav-pills nav-justified\">
              <li class=\"selected navigation-button border-right\"><a href=\"/patient/home\"><img src=\"/assets/icons/dashboard-f884d59638782a9acacfc28cc839c55c.png\" alt=\"Dashboard\"> Dashboard</a> </li>
              <li class=\" navigation-button border-right border-left\"><a href=\"/patient/clinics\"><img src=\"/assets/icons/my_clinics-1c5ac3c29a54ebdfaae2cd7fc8f66921.png\" alt=\"My clinics\"> My Clinics</a> </li>
              <li class=\" navigation-button border-right border-left\"><a href=\"/patient/appointments\"><img src=\"/assets/icons/appointments-bea07ecf29ac42426dacf7b88f5707bf.png\" alt=\"Appointments\"> Appointments</a> </li>
              <li class=\" navigation-button border-left\"><a href=\"/patient/message\"><img src=\"/assets/icons/messages-37b5d14e229f3fd004ab99917b66866e.png\" alt=\"Messages\"> Messages (0)</a></li>
            </ul>
          </div>
        </div>
      </div>
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
        return "myaccount.html.twig";
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
        <div class=\"col-xs-12 navbar-container\">
        <div class=\"main-navbar\" role=\"navigation\">
          <div class=\"square-navtabs\">
            <ul class=\"nav nav-pills nav-justified\">
              <li class=\"selected navigation-button border-right\"><a href=\"/patient/home\"><img src=\"/assets/icons/dashboard-f884d59638782a9acacfc28cc839c55c.png\" alt=\"Dashboard\"> Dashboard</a> </li>
              <li class=\" navigation-button border-right border-left\"><a href=\"/patient/clinics\"><img src=\"/assets/icons/my_clinics-1c5ac3c29a54ebdfaae2cd7fc8f66921.png\" alt=\"My clinics\"> My Clinics</a> </li>
              <li class=\" navigation-button border-right border-left\"><a href=\"/patient/appointments\"><img src=\"/assets/icons/appointments-bea07ecf29ac42426dacf7b88f5707bf.png\" alt=\"Appointments\"> Appointments</a> </li>
              <li class=\" navigation-button border-left\"><a href=\"/patient/message\"><img src=\"/assets/icons/messages-37b5d14e229f3fd004ab99917b66866e.png\" alt=\"Messages\"> Messages (0)</a></li>
            </ul>
          </div>
        </div>
      </div>
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
    {% endblock %}", "myaccount.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\myaccount.html.twig");
    }
}
