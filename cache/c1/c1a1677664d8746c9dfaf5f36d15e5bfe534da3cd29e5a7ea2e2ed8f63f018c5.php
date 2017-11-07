<?php

/* admin/schedule.html.twig */
class __TwigTemplate_55e98892a13f0d2f40049b20ef2a41d2d2b705f9f4816e8a354984ae9efaa983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/schedule.html.twig", 1);
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
        echo "Schedule";
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "    <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
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

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class=\"cd-schedule\">
        <div class=\"timeline\">
            <ul>
                <li><span>09:00</span></li>
                <li><span>09:30</span></li>
                <!-- additional elements here -->
            </ul>
        </div>

        <div class=\"events\">
            <ul>
                <li class=\"events-group\">
                    <div class=\"top-info\"><span>Monday</span></div>

                    <ul>
                        <li class=\"single-event\" data-start=\"09:30\" data-end=\"10:30\" data-content=\"event-abs-circuit\" data-event=\"event-1\">
                            <a href=\"#0\">
                                <em class=\"event-name\">Abs Circuit</em>
                            </a>
                        </li>

                        <!-- other events here -->
                    </ul>
                </li>

                <li class=\"events-group\">
                    <div class=\"top-info\"><span>Tuesday</span></div>

                    <ul>
                        <!-- events here -->
                    </ul>
                </li>

                <!-- additional li.events-group here -->
            </ul>
        </div>

        <div class=\"event-modal\">
            <header class=\"header\">
                <div class=\"content\">
                    <span class=\"event-date\"></span>
                    <h3 class=\"event-name\"></h3>
                </div>

                <div class=\"header-bg\"></div>
            </header>

            <div class=\"body\">
                <div class=\"event-info\"></div>
                <div class=\"body-bg\"></div>
            </div>

            <a href=\"#0\" class=\"close\">Close</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  57 => 15,  48 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title %}Schedule{% endblock %}
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

    <div class=\"cd-schedule\">
        <div class=\"timeline\">
            <ul>
                <li><span>09:00</span></li>
                <li><span>09:30</span></li>
                <!-- additional elements here -->
            </ul>
        </div>

        <div class=\"events\">
            <ul>
                <li class=\"events-group\">
                    <div class=\"top-info\"><span>Monday</span></div>

                    <ul>
                        <li class=\"single-event\" data-start=\"09:30\" data-end=\"10:30\" data-content=\"event-abs-circuit\" data-event=\"event-1\">
                            <a href=\"#0\">
                                <em class=\"event-name\">Abs Circuit</em>
                            </a>
                        </li>

                        <!-- other events here -->
                    </ul>
                </li>

                <li class=\"events-group\">
                    <div class=\"top-info\"><span>Tuesday</span></div>

                    <ul>
                        <!-- events here -->
                    </ul>
                </li>

                <!-- additional li.events-group here -->
            </ul>
        </div>

        <div class=\"event-modal\">
            <header class=\"header\">
                <div class=\"content\">
                    <span class=\"event-date\"></span>
                    <h3 class=\"event-name\"></h3>
                </div>

                <div class=\"header-bg\"></div>
            </header>

            <div class=\"body\">
                <div class=\"event-info\"></div>
                <div class=\"body-bg\"></div>
            </div>

            <a href=\"#0\" class=\"close\">Close</a>
        </div>
    </div>
{% endblock %}", "admin/schedule.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\schedule.html.twig");
    }
}
