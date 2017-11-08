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
       <table>
         ";
        // line 6
        $context["dat"] = 1;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["datelist"]) ? $context["datelist"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 8
            echo "             <tr>
                 ";
            // line 9
            $context["foo"] = 1;
            // line 10
            echo "                 
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["datelist"]) ? $context["datelist"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
                if (((isset($context["foo"]) ? $context["foo"] : null) < 8)) {
                    // line 12
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["firstday"]) ? $context["firstday"] : null), $context["num"], array(), "array"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["dat"]) ? $context["dat"] : null), "html", null, true);
                    echo " </td> 
                ";
                    // line 13
                    $context["foo"] = ((isset($context["foo"]) ? $context["foo"] : null) + 1);
                    // line 14
                    echo "                ";
                    $context["dat"] = ((isset($context["dat"]) ? $context["dat"] : null) + 1);
                    // line 15
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </tr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "       </table>
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
        return array (  79 => 19,  71 => 16,  64 => 15,  61 => 14,  59 => 13,  52 => 12,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
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
       <table>
         {% set dat = 1 %}
        {% for day in range(1, datelist ) %}
             <tr>
                 {% set foo = 1 %}
                 
            {% for num in range(0,datelist-1) if foo < 8  %}
                <td>{{ firstday[num] }} {{ dat }} </td> 
                {% set foo = foo + 1 %}
                {% set dat = dat + 1 %}
            {% endfor %}
            </tr>
            
        {% endfor %}
       </table>
    </div>
    ", "admin/ajaxdoctor_schedule.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\ajaxdoctor_schedule.html.twig");
    }
}
