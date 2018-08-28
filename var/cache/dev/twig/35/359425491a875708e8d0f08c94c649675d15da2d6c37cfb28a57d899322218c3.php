<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_4d9d74b9a798c13273ad97e60a49b1d9ca8b1a5aa09f17f70ee84ace483ff714 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3\"></div>
            <div class=\"jumbotron col-md-6 fundo-shadow\">
                <div class=\"col-xs-12 form-group\">
                    <div class=\"col-xs-12 input-group\">
                        <label for=\"username\">E-mail ou login</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required=\"required\" />
                    </div>
                    <br>
                    <div class=\"input-group\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Recuperar senha\" />
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\"></div>
        </div>
    </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3\"></div>
            <div class=\"jumbotron col-md-6 fundo-shadow\">
                <div class=\"col-xs-12 form-group\">
                    <div class=\"col-xs-12 input-group\">
                        <label for=\"username\">E-mail ou login</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required=\"required\" />
                    </div>
                    <br>
                    <div class=\"input-group\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Recuperar senha\" />
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\"></div>
        </div>
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\src\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
