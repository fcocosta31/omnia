<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_9ffe05ef77cac4ee5b1494b77ad45a07eb184c1a5c1b3400fef3799b1386fbf5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    <div class=\"row\">
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "matricula", array()), 'row', array("label" => "Matrícula"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "nome", array()), 'row', array("label" => "Nome Completo"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "email", array()), 'row', array("label" => "E-mail"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "username", array()), 'row', array("label" => "Login"));
        echo "
        </div>
        <div class=\"col-md-3 col-xs-12\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "cargo", array()), 'row', array("label" => "Cargo"));
        echo "
        </div>
        <div class=\"col-md-3 col-xs-12\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "lotacao", array()), 'row', array("label" => "Lotação"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "plainPassword", array()), 'row', array("label" => "Senha"));
        echo "
        </div>
        <div class=\"col-md-12 col-xs-12\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Registrar\" />
        </div>
    </div>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  75 => 25,  69 => 22,  63 => 19,  57 => 16,  51 => 13,  45 => 10,  39 => 7,  33 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container\">
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    <div class=\"row\">
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.matricula, {'label':'Matrícula'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.nome, {'label':'Nome Completo'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.email, {'label':'E-mail'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.username, {'label':'Login'}) }}
        </div>
        <div class=\"col-md-3 col-xs-12\">
            {{ form_row(form.cargo, {'label':'Cargo'}) }}
        </div>
        <div class=\"col-md-3 col-xs-12\">
            {{ form_row(form.lotacao, {'label':'Lotação'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.plainPassword, {'label':'Senha'}) }}
        </div>
        <div class=\"col-md-12 col-xs-12\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Registrar\" />
        </div>
    </div>
{{ form_end(form) }}
</div>", "@FOSUser/Registration/register_content.html.twig", "/home/francisco/Projetos/omnia/src/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
