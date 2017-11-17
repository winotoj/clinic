<?php

/* passreset_form.html.twig */
class __TwigTemplate_766f171d6af8004d84b894f840b45881e8dc90ebfa29d207307292724fb7369e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "passreset_form.html.twig", 1);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Set New Password";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <p>Hi ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo ")</p>
    <p> set new Password for your account </p>
    ";
        // line 13
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 14
            echo "        <ul>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </ul>
        ";
        }
        // line 20
        echo "<div id=\"successful_login\" class=\"fix-middle\">
  <div class=\"container text-center\">
    <h1>Welcome back to the internet!</h1>
    <p>You've successfully managed to log into a nonexistant account in order to test a login dialog box.<br> If you like it, you are welcomed to use it wherever you want, no strings attached.<br><br><a href=\"#\" class=\"link dialog-reset\">Rerun the whole thing.</a></p>
  </div>
</div>

<div id=\"dialog\" class=\"dialog dialog-effect-in\">
  <div class=\"dialog-front\">
    <div class=\"dialog-content\">
      <form id=\"login_form\" class=\"dialog-form\" action=\"\" method=\"POST\">
        <fieldset>
          <legend>Forgotton Password</legend>
          <div class=\"form-group\">
            <label for=\"Password\" class=\"control-label\">Password:</label>
            <input type=\"password\" id=\"user_password\" class=\"form-control\" name=\"pass1\" autofocus/>
          </div>
          <div class=\"form-group\">
            <label for=\"Password\" class=\"control-label\">Password (repeated):</label>
            <input type=\"password\" id=\"user_password\" class=\"form-control\" name=\"pass2\" autofocus/>
          </div>
          
          
          <div class=\"pad-top-20 pad-btm-20\">
            <input type=\"submit\" class=\"btn btn-default btn-block btn-lg\" value=\"Set new password\">
          </div>
         
        </fieldset>
      </form>
    </div>
  </div>
 
</div>


";
    }

    public function getTemplateName()
    {
        return "passreset_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  75 => 18,  66 => 16,  62 => 15,  59 => 14,  57 => 13,  49 => 11,  46 => 10,  36 => 5,  30 => 4,  11 => 1,);
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


{% block title %}Set New Password{% endblock %}
{% block css %} 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
{% endblock %}
{% block content %}
    <p>Hi {{name}} ({{email}})</p>
    <p> set new Password for your account </p>
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
            {% endfor %}
        </ul>
        {% endif %}
<div id=\"successful_login\" class=\"fix-middle\">
  <div class=\"container text-center\">
    <h1>Welcome back to the internet!</h1>
    <p>You've successfully managed to log into a nonexistant account in order to test a login dialog box.<br> If you like it, you are welcomed to use it wherever you want, no strings attached.<br><br><a href=\"#\" class=\"link dialog-reset\">Rerun the whole thing.</a></p>
  </div>
</div>

<div id=\"dialog\" class=\"dialog dialog-effect-in\">
  <div class=\"dialog-front\">
    <div class=\"dialog-content\">
      <form id=\"login_form\" class=\"dialog-form\" action=\"\" method=\"POST\">
        <fieldset>
          <legend>Forgotton Password</legend>
          <div class=\"form-group\">
            <label for=\"Password\" class=\"control-label\">Password:</label>
            <input type=\"password\" id=\"user_password\" class=\"form-control\" name=\"pass1\" autofocus/>
          </div>
          <div class=\"form-group\">
            <label for=\"Password\" class=\"control-label\">Password (repeated):</label>
            <input type=\"password\" id=\"user_password\" class=\"form-control\" name=\"pass2\" autofocus/>
          </div>
          
          
          <div class=\"pad-top-20 pad-btm-20\">
            <input type=\"submit\" class=\"btn btn-default btn-block btn-lg\" value=\"Set new password\">
          </div>
         
        </fieldset>
      </form>
    </div>
  </div>
 
</div>


{% endblock %}", "passreset_form.html.twig", "/home/cp4809/clinic.ipd10.com/templates/passreset_form.html.twig");
    }
}
