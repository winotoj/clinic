<?php

/* passreset_email.html.twig */
class __TwigTemplate_6e2dff8eefd312bf047051cb4eba2b7271984ff2195b96bedb588bf13d21ac31 extends Twig_Template
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
        // line 2
        echo "
<html>
    <body>
        <h1>Password reset request</h1>
        <p>HI ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo ", </p><br>
        <p> You have requested password reset: </p>
        <p> Click on <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"> this link </a>to reset your password or paste the following URL into a browser. </p>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "</p>
    </body>
    
</html>
";
    }

    public function getTemplateName()
    {
        return "passreset_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  30 => 8,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Warning : This template is for an email NOT an HTML Page #}

<html>
    <body>
        <h1>Password reset request</h1>
        <p>HI {{ name }}, </p><br>
        <p> You have requested password reset: </p>
        <p> Click on <a href=\"{{ url }}\"> this link </a>to reset your password or paste the following URL into a browser. </p>
        <p>{{ url }}</p>
    </body>
    
</html>
", "passreset_email.html.twig", "/home/cp4809/clinic.ipd10.com/templates/passreset_email.html.twig");
    }
}
