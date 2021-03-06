<?php

/* register.html.twig */
class __TwigTemplate_32d853cada8fc3aa5cc10574dd08eaf713eb6da87b95acfd25827e1123e8f2c2 extends Twig_Template
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
        echo "Register";
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "    <!--<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  
    <!--<script src=\"../assets/bootstrap/js/bootstrap.js\"></script>-->
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

    // line 22
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <!--<link rel=\"stylesheet\" href=\"../assets/bootstrap/css/bootstrap.min.css\">-->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"post\"  id=\"contact_form\">
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
                        <span class=\"label-danger\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "fNameError", array()), "html", null, true);
        echo "</</span>
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
                        <span class=\"label-danger\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "lNameError", array()), "html", null, true);
        echo "</span>
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
                        <span class=\"label-danger\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "emailError", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Address</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                            <input name=\"street\" placeholder=\"Civic No street Apt No\" class=\"form-control\"  type=\"text\">

                        </div>
                        <span class=\"label-danger\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "addressError", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">City</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                            <input name=\"city\" placeholder=\"City\" class=\"form-control\"  type=\"text\">

                        </div>
                        <span class=\"label-danger\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "cityError", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Province</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <select class=\"form-control\" name=\"province\">
                                <option value=\"\"></option>
                                <option value=\"AB\">Alberta (AB)</option>
                                <option value=\"BC\">British Columbia (BC)</option>
                                <option value=\"MB\">Manitoba (MB)</option>
                                <option value=\"NB\">New Brunswick (MB)</option>
                                <option value=\"NL\">Newfoundland Labrador (NL)</option>
                                <option value=\"NS\">Nova Scotia (NS)</option>
                                <option value=\"NT\">Northwest Territories (NT)</option>
                                <option value=\"NU\">Nunavut (NU)</option>
                                <option value=\"ON\">Ontario (ON)</option>
                                <option value=\"PE\">Prince Edward Island (PE)</option>
                                <option value=\"QC\">Quebec (QC)</option>
                                <option value=\"SK\">Saskatchewan (SK)</option>
                                <option value=\"YT\">Yukon (YT)</option>
                            </select>

                        </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Postal</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <input name=\"postal\" placeholder=\"Postal\" class=\"form-control\"  type=\"text\">


                        </div>
                        <span class=\"label-danger\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "postalError", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Country</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <input name=\"country\" placeholder=\"Country\" class=\"form-control\"  type=\"text\">


                        </div>
                        <span class=\"label-danger\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "countryError", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">SIN</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <input name=\"sin\" placeholder=\"999999999\" class=\"form-control\"  type=\"text\">


                        </div>
                        <span class=\"label-danger\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "sinError", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" >Password</label> 
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                            <input name=\"user_password\" placeholder=\"Password\" class=\"form-control\"  type=\"password\">

                        </div>
                        <span class=\"label-danger\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "pass1Error", array()), "html", null, true);
        echo "</span>
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
                        <span class=\"label-danger\">";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "pass2Error", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <!-- Text input-->

                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Contact No.</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
                            <input name=\"contact_no\" placeholder=\"(123) 123-1234\" class=\"form-control\" type=\"text\">

                        </div>
                        <span class=\"label-danger\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "phoneError", array()), "html", null, true);
        echo "</span>
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
        return array (  280 => 205,  263 => 191,  246 => 177,  231 => 165,  215 => 152,  199 => 139,  157 => 100,  143 => 89,  127 => 76,  112 => 64,  95 => 50,  74 => 31,  71 => 30,  60 => 22,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title %}Register{% endblock %}
{% block matchpwd %}
    <!--<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
  
    <!--<script src=\"../assets/bootstrap/js/bootstrap.js\"></script>-->
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
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <!--<link rel=\"stylesheet\" href=\"../assets/bootstrap/css/bootstrap.min.css\">-->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
{% endblock %}


{% block content %}
    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"post\"  id=\"contact_form\">
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
                        <span class=\"label-danger\">{{ e.fNameError }}</</span>
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
                        <span class=\"label-danger\">{{ e.lNameError }}</span>
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
                        <span class=\"label-danger\">{{ e.emailError }}</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Address</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                            <input name=\"street\" placeholder=\"Civic No street Apt No\" class=\"form-control\"  type=\"text\">

                        </div>
                        <span class=\"label-danger\">{{ e.addressError }}</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">City</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                            <input name=\"city\" placeholder=\"City\" class=\"form-control\"  type=\"text\">

                        </div>
                        <span class=\"label-danger\">{{ e.cityError }}</span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Province</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <select class=\"form-control\" name=\"province\">
                                <option value=\"\"></option>
                                <option value=\"AB\">Alberta (AB)</option>
                                <option value=\"BC\">British Columbia (BC)</option>
                                <option value=\"MB\">Manitoba (MB)</option>
                                <option value=\"NB\">New Brunswick (MB)</option>
                                <option value=\"NL\">Newfoundland Labrador (NL)</option>
                                <option value=\"NS\">Nova Scotia (NS)</option>
                                <option value=\"NT\">Northwest Territories (NT)</option>
                                <option value=\"NU\">Nunavut (NU)</option>
                                <option value=\"ON\">Ontario (ON)</option>
                                <option value=\"PE\">Prince Edward Island (PE)</option>
                                <option value=\"QC\">Quebec (QC)</option>
                                <option value=\"SK\">Saskatchewan (SK)</option>
                                <option value=\"YT\">Yukon (YT)</option>
                            </select>

                        </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Postal</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <input name=\"postal\" placeholder=\"Postal\" class=\"form-control\"  type=\"text\">


                        </div>
                        <span class=\"label-danger\">{{ e.postalError }}</span>
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Country</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <input name=\"country\" placeholder=\"Country\" class=\"form-control\"  type=\"text\">


                        </div>
                        <span class=\"label-danger\">{{ e.countryError }}</span>
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">SIN</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                            <input name=\"sin\" placeholder=\"999999999\" class=\"form-control\"  type=\"text\">


                        </div>
                        <span class=\"label-danger\">{{ e.sinError }}</span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" >Password</label> 
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                            <input name=\"user_password\" placeholder=\"Password\" class=\"form-control\"  type=\"password\">

                        </div>
                        <span class=\"label-danger\">{{ e.pass1Error }}</span>
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
                        <span class=\"label-danger\">{{ e.pass2Error }}</span>
                    </div>
                </div>

                <!-- Text input-->

                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\">Contact No.</label>  
                    <div class=\"col-md-4 inputGroupContainer\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
                            <input name=\"contact_no\" placeholder=\"(123) 123-1234\" class=\"form-control\" type=\"text\">

                        </div>
                        <span class=\"label-danger\">{{ e.phoneError }}</span>
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
", "register.html.twig", "/home/cp4809/clinic.ipd10.com/templates/register.html.twig");
    }
}
