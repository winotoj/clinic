<?php

/* admin/ajaxdoctor_schedule.html.twig */
class __TwigTemplate_746f624b89248ab1d158528736c44844a69ae876f8fb191ca13edcdf3e2ae84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div id=\"viewSchedule\">
    <p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["datelist"]) ? $context["datelist"] : null), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["firstday"]) ? $context["firstday"] : null), 0, array(), "array"), "html", null, true);
        echo "</p>
    <form action=\"/ajax/myschedule/";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["doctorId"]) ? $context["doctorId"] : null), "html", null, true);
        echo "\" class=\"form-horizontal\" method=\"Post\">
        <input type=\"hidden\" name=\"date\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["doctorId"]) ? $context["doctorId"] : null), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\"save\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["datelist"]) ? $context["datelist"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 10
            echo "            ";
            if (((((($context["day"] == 0) || ($context["day"] == 7)) || ($context["day"] == 14)) || ($context["day"] == 21)) || ($context["day"] == 28))) {
                // line 11
                echo "                <div class=\"row\">
                ";
            }
            // line 13
            echo "
                <div class=\"col-sm-1\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"></span>
                        <label class=\"form-control form-horizontal\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["firstday"]) ? $context["firstday"] : null), $context["day"], array(), "array"), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "</label>
                        <label class=\"form-check-label form-horizontal\">Available
                            <input class=\"form-control form-check-input\" name=\"doctorAvailable";
            // line 19
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "\" id=\"doctorAvailable";
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "\" type=\"checkbox\" name=\"doctorwork";
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "\" value=\"true\" checked></label>
                        <div class=\"inform-inline\">
                             <label for=\"startTime\" class=\"form-horizontal\">Start
                            <select class=\"form-control\" name =\"doctorStart";
            // line 22
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "\" id=\"doctorStart";
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "}}\" class=\"startTime\">
                                <option value=\"8:00\" selected>8:00</option>
                                <option value=\"9:00\">9:00</option>
                                <option value=\"10:00\">10:00</option>
                                <option value=\"11:00\">11:00</option>
                                <option value=\"12:00\">12:00</option>
                                <option value=\"13:00\">13:00</option>
                                <option value=\"14:00\">14:00</option>
                                <option value=\"15:00\">15:00</option>
                                <option value=\"16:00\">16:00</option>
                                <option value=\"17:00\">17:00</option>
                            </select></label>
                            <label for=\"endTime\" class=\"form-horizontal\">End
                            <select class=\"form-control\" name=\"doctorEnd";
            // line 35
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "\" id=\"doctorEnd";
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "}}\" class=\"endTime\">
                                <option value=\"9:00\">9:00</option>
                                <option value=\"10:00\">10:00</option>
                                <option value=\"11:00\">11:00</option>
                                <option value=\"12:00\">12:00</option>
                                <option value=\"13:00\">13:00</option>
                                <option value=\"14:00\">14:00</option>
                                <option value=\"15:00\">15:00</option>
                                <option value=\"16:00\">16:00</option>
                                <option value=\"17:00\">17:00</option>
                                <option value=\"18:00\">18:00</option>
                                <option value=\"19:00\">19:00</option>
                                <option value=\"20:00\"selected>20:00</option>
                            </select></label>     
                        </div>
                    </div>
                </div>
                ";
            // line 52
            if (((((($context["day"] == 6) || ($context["day"] == 13)) || ($context["day"] == 20)) || ($context["day"] == 27)) || ($context["day"] == ((isset($context["datelist"]) ? $context["datelist"] : null) - 1)))) {
                // line 53
                echo "                </div>
            ";
            }
            // line 55
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/ajaxdoctor_schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 56,  126 => 55,  122 => 53,  120 => 52,  98 => 35,  80 => 22,  70 => 19,  63 => 17,  57 => 13,  53 => 11,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div id=\"viewSchedule\">
    <p>{{ datelist }}</p>
    <p>{{ firstday[0] }}</p>
    <form action=\"/ajax/myschedule/{{ date }}/{{ doctorId }}\" class=\"form-horizontal\" method=\"Post\">
        <input type=\"hidden\" name=\"date\" value=\"{{ date }}\">
        <input type=\"hidden\" name=\"id\" value=\"{{ doctorId }}\">
        <input type=\"submit\" value=\"save\">
        {% for day in range(0, datelist-1 ) %}
            {% if day ==0 or day == 7 or day == 14 or day == 21 or day ==28 %}
                <div class=\"row\">
                {% endif %}

                <div class=\"col-sm-1\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"></span>
                        <label class=\"form-control form-horizontal\">{{ firstday[day] }}&nbsp;{{ day+1 }}</label>
                        <label class=\"form-check-label form-horizontal\">Available
                            <input class=\"form-control form-check-input\" name=\"doctorAvailable{{ day+1 }}\" id=\"doctorAvailable{{ day+1 }}\" type=\"checkbox\" name=\"doctorwork{{ day+1 }}\" value=\"true\" checked></label>
                        <div class=\"inform-inline\">
                             <label for=\"startTime\" class=\"form-horizontal\">Start
                            <select class=\"form-control\" name =\"doctorStart{{ day+1 }}\" id=\"doctorStart{{ day+1 }}}}\" class=\"startTime\">
                                <option value=\"8:00\" selected>8:00</option>
                                <option value=\"9:00\">9:00</option>
                                <option value=\"10:00\">10:00</option>
                                <option value=\"11:00\">11:00</option>
                                <option value=\"12:00\">12:00</option>
                                <option value=\"13:00\">13:00</option>
                                <option value=\"14:00\">14:00</option>
                                <option value=\"15:00\">15:00</option>
                                <option value=\"16:00\">16:00</option>
                                <option value=\"17:00\">17:00</option>
                            </select></label>
                            <label for=\"endTime\" class=\"form-horizontal\">End
                            <select class=\"form-control\" name=\"doctorEnd{{ day+1 }}\" id=\"doctorEnd{{ day+1 }}}}\" class=\"endTime\">
                                <option value=\"9:00\">9:00</option>
                                <option value=\"10:00\">10:00</option>
                                <option value=\"11:00\">11:00</option>
                                <option value=\"12:00\">12:00</option>
                                <option value=\"13:00\">13:00</option>
                                <option value=\"14:00\">14:00</option>
                                <option value=\"15:00\">15:00</option>
                                <option value=\"16:00\">16:00</option>
                                <option value=\"17:00\">17:00</option>
                                <option value=\"18:00\">18:00</option>
                                <option value=\"19:00\">19:00</option>
                                <option value=\"20:00\"selected>20:00</option>
                            </select></label>     
                        </div>
                    </div>
                </div>
                {% if day ==6 or day == 13 or day == 20 or day == 27 or day == datelist-1 %}
                </div>
            {% endif %}
        {% endfor %}

    </form>
</div>

", "admin/ajaxdoctor_schedule.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\ajaxdoctor_schedule.html.twig");
    }
}
