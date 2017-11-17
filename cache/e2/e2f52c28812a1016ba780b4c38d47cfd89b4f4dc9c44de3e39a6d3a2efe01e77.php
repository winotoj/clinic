<?php

/* admin/create_doctor_account.html.twig */
class __TwigTemplate_0dd1e08e3e8a8d1f272c95d245582fa61fe8402d0c1d3edd84a86d50d25ef64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/create_doctor_account.html.twig", 1);
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
                                <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "fNameError", array()), "html", null, true);
        echo "</p>
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
                                <p>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "lNameError", array()), "html", null, true);
        echo "</p>
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
                                <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "emailError", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Title</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-education\"></i></span>
                                <input name=\"title\" placeholder=\"Title\" class=\"form-control\"  type=\"text\">
                                <p>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "titleError", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Speciality</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-education\"></i></span>
                                <input name=\"speciality\" placeholder=\"Speciality\" class=\"form-control\"  type=\"text\">
                                <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "specialityError", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Graduated Year</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span>
                                <input name=\"experience\" placeholder=\"1900\" class=\"form-control\"  type=\"text\">
                                <p>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "experienceError", array()), "html", null, true);
        echo "</p>

                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Description</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                                <textarea class=\"form-control\" rows=\"6\" id=\"description\"></textarea>

                                <p>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "descriptionError", array()), "html", null, true);
        echo "</p>

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
                                <p>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "pass1Error", array()), "html", null, true);
        echo "</p>
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
                                <p>";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "pass2Error", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 label-column\">
                            <label class=\"control-label\" for=\"fileupload-input-field\">Choose a file</label>
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-picture\"></i></span>
                                    <div class=\"col-sm-6 input-column\" >
                                        <input class=\"file form-control\" id=\"file-upload\" type=\"file\" name=\"productImage\">
                                        <p>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "productImageError", array()), "html", null, true);
        echo "</p>
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
        return "admin/create_doctor_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 155,  209 => 140,  193 => 127,  177 => 114,  161 => 101,  146 => 89,  133 => 79,  118 => 67,  103 => 55,  87 => 42,  69 => 26,  66 => 25,  57 => 19,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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
                                <p>{{ e.fNameError }}</p>
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
                                <p>{{ e.lNameError }}</p>
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
                                <p>{{ e.emailError }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Title</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-education\"></i></span>
                                <input name=\"title\" placeholder=\"Title\" class=\"form-control\"  type=\"text\">
                                <p>{{ e.titleError }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Speciality</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-education\"></i></span>
                                <input name=\"speciality\" placeholder=\"Speciality\" class=\"form-control\"  type=\"text\">
                                <p>{{ e.specialityError }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Graduated Year</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span>
                                <input name=\"experience\" placeholder=\"1900\" class=\"form-control\"  type=\"text\">
                                <p>{{ e.experienceError }}</p>

                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Description</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                                <textarea class=\"form-control\" rows=\"6\" id=\"description\"></textarea>

                                <p>{{ e.descriptionError }}</p>

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
                                <p>{{ e.pass1Error }}</p>
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
                                <p>{{ e.pass2Error }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 label-column\">
                            <label class=\"control-label\" for=\"fileupload-input-field\">Choose a file</label>
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-picture\"></i></span>
                                    <div class=\"col-sm-6 input-column\" >
                                        <input class=\"file form-control\" id=\"file-upload\" type=\"file\" name=\"productImage\">
                                        <p>{{ e.productImageError }}</p>
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

", "admin/create_doctor_account.html.twig", "/home/cp4809/clinic.ipd10.com/templates/admin/create_doctor_account.html.twig");
    }
}
