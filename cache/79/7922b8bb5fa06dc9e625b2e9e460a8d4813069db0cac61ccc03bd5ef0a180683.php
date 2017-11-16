<?php

/* admin/patient_history.html.twig */
class __TwigTemplate_2fe4b80f3de13c1d025d132f1b16878cd8fd3ae8fb27259d979526281906bdae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/patient_history.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Patient History";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        echo " 

    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ((isset($context["hh"]) ? $context["hh"] : null)) {
            // line 14
            echo "    <h2>Consultation note for: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hh"]) ? $context["hh"] : null), 0, array(), "array"), "pfirstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hh"]) ? $context["hh"] : null), 0, array(), "array"), "plastName", array()), "html", null, true);
            echo "</h2>
               
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient Message</th>
                <th>Doctor Name</th>
                <th>Doctor Note</th>
            </tr>
        </thead>
        <tbody>

            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hh"]) ? $context["hh"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 28
                echo "                <tr>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "date", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "message", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "dfirstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "dlastName", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "note", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </tbody>
    </table>
            ";
        } else {
            // line 38
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "lastName", array()), "html", null, true);
            echo " is new patient, no record is found </h2>
                
";
        }
        // line 41
        echo "<button onclick=\"goBack()\">Go Back</button>

<script>
function goBack() {
    window.history.back();
 }
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/patient_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  108 => 38,  103 => 35,  94 => 32,  88 => 31,  84 => 30,  80 => 29,  77 => 28,  73 => 27,  54 => 14,  51 => 13,  48 => 12,  36 => 4,  30 => 3,  11 => 1,);
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

{% block title %}Patient History{% endblock %}
{% block css %} 

    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

{% endblock %}

{% block content %}
    {% if hh %}
    <h2>Consultation note for: {{ hh[0].pfirstName }} {{ hh[0].plastName }}</h2>
               
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient Message</th>
                <th>Doctor Name</th>
                <th>Doctor Note</th>
            </tr>
        </thead>
        <tbody>

            {% for h in hh %}
                <tr>
                    <td>{{ h.date }}</td>
                    <td>{{ h.message }}</td>
                    <td>{{ h.dfirstName }} {{ h.dlastName }}</td>
                    <td>{{ h.note }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
            {% else %}
                <h2>{{ p.firstName }} {{ p.lastName }} is new patient, no record is found </h2>
                
{% endif %}
<button onclick=\"goBack()\">Go Back</button>

<script>
function goBack() {
    window.history.back();
 }
</script>

{% endblock %}


", "admin/patient_history.html.twig", "/home/cp4809/clinic.ipd10.com/templates/admin/patient_history.html.twig");
    }
}
