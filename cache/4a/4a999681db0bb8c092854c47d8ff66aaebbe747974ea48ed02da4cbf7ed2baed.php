<?php

/* passreset_request.html.twig */
class __TwigTemplate_19e2d21f8128b4464e7b4a7ebb3c7158041166ec2d9eb233b1c18659625cbf14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "passreset_request.html.twig", 1);
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
        echo "Forgotten Password";
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
        echo "    
    <p> Enter your Email below and we'll send you password reset link. </p>
    ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "        <p> we were'nt able to find email you provided in our records.
            Try again or <a href=\"/register\">register</a> a new account
        </p>
        ";
        }
        // line 18
        echo "<div id=\"successful_login\" class=\"fix-middle\">
  <div class=\"container text-center\">
    <h1>Welcome back to the internet!</h1>
    <p>You've successfully managed to log into a nonexistant account in order to test a login dialog box.<br> If you like it, you are welcomed to use it wherever you want, no strings attached.<br><br><a href=\"#\" class=\"link dialog-reset\">Rerun the whole thing.</a></p>
  </div>
</div>

<div id=\"dialog\" class=\"dialog dialog-effect-in\">
  <div class=\"dialog-front\">
    <div class=\"dialog-content\">
      <form id=\"login_form\" class=\"dialog-form\" method=\"POST\">
        <fieldset>
          <legend>Forgotton Password</legend>
          <div class=\"form-group\">
            <label for=\"email\" class=\"control-label\">Email:</label>
            <input type=\"email\" class=\"form-control\" name=\"email\" autofocus/>
          </div>
          
          
          <div class=\"pad-top-20 pad-btm-20\">
            <input type=\"submit\" class=\"btn btn-default btn-block btn-lg\" value=\"Request reset email\">
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
        return "passreset_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  55 => 14,  53 => 13,  49 => 11,  46 => 10,  36 => 5,  30 => 4,  11 => 1,);
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


{% block title %}Forgotten Password{% endblock %}
{% block css %} 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
{% endblock %}
{% block content %}
    
    <p> Enter your Email below and we'll send you password reset link. </p>
    {% if error %}
        <p> we were'nt able to find email you provided in our records.
            Try again or <a href=\"/register\">register</a> a new account
        </p>
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
      <form id=\"login_form\" class=\"dialog-form\" method=\"POST\">
        <fieldset>
          <legend>Forgotton Password</legend>
          <div class=\"form-group\">
            <label for=\"email\" class=\"control-label\">Email:</label>
            <input type=\"email\" class=\"form-control\" name=\"email\" autofocus/>
          </div>
          
          
          <div class=\"pad-top-20 pad-btm-20\">
            <input type=\"submit\" class=\"btn btn-default btn-block btn-lg\" value=\"Request reset email\">
          </div>
         
        </fieldset>
      </form>
    </div>
  </div>
 
</div>


{% endblock %}", "passreset_request.html.twig", "/home/cp4809/clinic.ipd10.com/templates/passreset_request.html.twig");
    }
}
