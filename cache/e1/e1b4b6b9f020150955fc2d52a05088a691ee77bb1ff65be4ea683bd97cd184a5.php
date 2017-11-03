<?php

/* register.html.twig */
class __TwigTemplate_bad9f3f9ef7bb6cc18cfd77633e467e37a8c076747f1d37693fa4259450ab0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["Register"]) ? $context["Register"] : null), "html", null, true);
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "        <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
        <script>
             \$(document).ready(function () {
            // respond to all events that may change the value of input
            \$('input[name=email]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var email = \$('input[name=email]').val();
                \$('#isTaken').load('/isemailregistered/' + email);
            });
        });
        </script>
    ";
    }

    // line 19
    public function block_css($context, array $blocks = array())
    {
        echo " 
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
        ";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "        <div class=\"container\">

    <form class=\"well form-horizontal\" action=\" \" method=\"post\"  id=\"contact_form\">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\">First Name</label>  
  <div class=\"col-md-4 inputGroupContainer\">
  <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input  name=\"first_name\" placeholder=\"First Name\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Last Name</label> 
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input name=\"last_name\" placeholder=\"Last Name\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>

  <div class=\"form-group\"> 
  <label class=\"col-md-4 control-label\">Department / Office</label>
    <div class=\"col-md-4 selectContainer\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-list\"></i></span>
    <select name=\"department\" class=\"form-control selectpicker\">
      <option value=\"\">Select your Department/Office</option>
      <option>Department of Engineering</option>
      <option>Department of Agriculture</option>
      <option >Accounting Office</option>
      <option >Tresurer's Office</option>
      <option >MPDC</option>
      <option >MCTC</option>
      <option >MCR</option>
      <option >Mayor's Office</option>
      <option >Tourism Office</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\">Username</label>  
  <div class=\"col-md-4 inputGroupContainer\">
  <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input  name=\"user_name\" placeholder=\"Username\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Password</label> 
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input name=\"user_password\" placeholder=\"Password\" class=\"form-control\"  type=\"password\">
    </div>
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Confirm Password</label> 
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input name=\"confirm_password\" placeholder=\"Confirm Password\" class=\"form-control\"  type=\"password\">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class=\"form-group\">
  <label class=\"col-md-4 control-label\">E-Mail</label>  
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
  <input name=\"email\" placeholder=\"E-Mail Address\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\">Contact No.</label>  
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
  <input name=\"contact_no\" placeholder=\"(639)\" class=\"form-control\" type=\"text\">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class=\"alert alert-success\" role=\"alert\" id=\"success_message\">Success <i class=\"glyphicon glyphicon-thumbs-up\"></i> Success!.</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\"></label>
  <div class=\"col-md-4\"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type=\"submit\" class=\"btn btn-warning\" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class=\"glyphicon glyphicon-send\"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    ";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  66 => 25,  57 => 19,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title Register %}
    {% block matchpwd %}
        <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
        <script>
             \$(document).ready(function () {
            // respond to all events that may change the value of input
            \$('input[name=email]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var email = \$('input[name=email]').val();
                \$('#isTaken').load('/isemailregistered/' + email);
            });
        });
        </script>
    {% endblock %}
    {% block css %} 
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
        {% endblock %}


    {% block content %}
        <div class=\"container\">

    <form class=\"well form-horizontal\" action=\" \" method=\"post\"  id=\"contact_form\">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\">First Name</label>  
  <div class=\"col-md-4 inputGroupContainer\">
  <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input  name=\"first_name\" placeholder=\"First Name\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Last Name</label> 
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input name=\"last_name\" placeholder=\"Last Name\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>

  <div class=\"form-group\"> 
  <label class=\"col-md-4 control-label\">Department / Office</label>
    <div class=\"col-md-4 selectContainer\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-list\"></i></span>
    <select name=\"department\" class=\"form-control selectpicker\">
      <option value=\"\">Select your Department/Office</option>
      <option>Department of Engineering</option>
      <option>Department of Agriculture</option>
      <option >Accounting Office</option>
      <option >Tresurer's Office</option>
      <option >MPDC</option>
      <option >MCTC</option>
      <option >MCR</option>
      <option >Mayor's Office</option>
      <option >Tourism Office</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\">Username</label>  
  <div class=\"col-md-4 inputGroupContainer\">
  <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input  name=\"user_name\" placeholder=\"Username\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Password</label> 
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input name=\"user_password\" placeholder=\"Password\" class=\"form-control\"  type=\"password\">
    </div>
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Confirm Password</label> 
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
  <input name=\"confirm_password\" placeholder=\"Confirm Password\" class=\"form-control\"  type=\"password\">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class=\"form-group\">
  <label class=\"col-md-4 control-label\">E-Mail</label>  
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
  <input name=\"email\" placeholder=\"E-Mail Address\" class=\"form-control\"  type=\"text\">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\">Contact No.</label>  
    <div class=\"col-md-4 inputGroupContainer\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
  <input name=\"contact_no\" placeholder=\"(639)\" class=\"form-control\" type=\"text\">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class=\"alert alert-success\" role=\"alert\" id=\"success_message\">Success <i class=\"glyphicon glyphicon-thumbs-up\"></i> Success!.</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\"></label>
  <div class=\"col-md-4\"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type=\"submit\" class=\"btn btn-warning\" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class=\"glyphicon glyphicon-send\"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    {% endblock %}
", "register.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\register.html.twig");
    }
}