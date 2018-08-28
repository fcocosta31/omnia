<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_ad1513ed4bb9b047455a66d74eae91f9d666622be6183f6d49352398f6475f2d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

    <div class=\"row\">
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "nome", array()), 'row', array("label" => "Nome Completo"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "email", array()), 'row', array("label" => "E-mail"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "username", array()), 'row', array("label" => "Login"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "lotacao", array()), 'row', array("label" => "Lotação"));
        echo "
        </div>
        <div class=\"col-md-6 col-xs-12\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "current_password", array()), 'row', array("label" => "Senha Atual"));
        echo "
        </div>
        <div class=\"col-md-12 col-xs-12\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Alterar\" />
        </div>
    </div>

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  63 => 19,  57 => 16,  51 => 13,  45 => 10,  39 => 7,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

    <div class=\"row\">
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.nome, {'label':'Nome Completo'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.email, {'label':'E-mail'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.username, {'label':'Login'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.lotacao, {'label':'Lotação'}) }}
        </div>
        <div class=\"col-md-6 col-xs-12\">
            {{ form_row(form.current_password, {'label':'Senha Atual'}) }}
        </div>
        <div class=\"col-md-12 col-xs-12\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Alterar\" />
        </div>
    </div>

{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\src\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
