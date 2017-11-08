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
       <form>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["datelist"]) ? $context["datelist"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 7
            echo "            ";
            if ((((($context["day"] == 7) || ($context["day"] == 14)) || ($context["day"] == 21)) || ($context["day"] == 28))) {
                // line 8
                echo "                <br>
            ";
            }
            // line 10
            echo "            <div class=\"drschedule\">
            <label> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["firstday"]) ? $context["firstday"] : null), $context["day"], array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo " </label><br>
            <input type=\"checkbox\" name=\"doctorwork";
            // line 12
            echo twig_escape_filter($this->env, ($context["day"] + 1), "html", null, true);
            echo "\" value=\"true\">
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
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
        return array (  61 => 15,  52 => 12,  46 => 11,  43 => 10,  39 => 8,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
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
       <form>
        {% for day in range(0, datelist-1 ) %}
            {% if day == 7 or day == 14 or day == 21 or day ==28 %}
                <br>
            {% endif %}
            <div class=\"drschedule\">
            <label> {{ firstday[day] }} {{ day+1 }} </label><br>
            <input type=\"checkbox\" name=\"doctorwork{{ day+1 }}\" value=\"true\">
            </div>
            {% endfor %}

       </form>
    </div>
    ", "admin/ajaxdoctor_schedule.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\ajaxdoctor_schedule.html.twig");
    }
}
