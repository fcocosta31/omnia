<?php

/* esp/produtividade/ato/editar.html.twig */
class __TwigTemplate_adfd0bd8684a72452dad62bbd587a05bf2820a457de0cfd778076ea3e7edb41e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/ato/editar.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/ato/editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/ato/editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"fundo-topo-menu\">
        Editar Ato
    </div>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-11 col-xs-12\">
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
                    <div class=\"col-md-3 col-xs-12\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "emissao", array()), 'row', array("label" => "Data"));
        echo "
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "numero", array()), 'row', array("label" => "Nº do Ato"));
        echo "
                    </div>
                    <div class=\"col-md-5 col-xs-12\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "tipodeato", array()), 'row', array("label" => "Tipo de Ato"));
        echo "
                    </div>
                    <div class=\"row\"></div>
                    <br>
                    <div class=\"col-md-6 col-xs-12\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "assunto", array()), 'row', array("label" => "Assunto"));
        echo "
                    </div>
                    <div class=\"col-md-6 col-xs-12\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "interessado", array()), 'row', array("label" => "Interessado/Requerente"));
        echo "
                    </div>
                    <div class=\"row\"></div>
                    <br>
                    <div class=\"col-md-4 col-xs-12\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "favoravel", array()), 'row', array("label" => "Parecer Favorável?"));
        echo "
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "tipodeprocesso", array()), 'row', array("label" => "Tipo de Processo"));
        echo "
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "numerodoprocesso", array()), 'row', array("label" => "Nº do Processo"));
        echo "
                    </div>
                    <div class=\"row\"></div>
                    <br>
                    <div class=\"col-md-12 col-xs-12\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "descricao", array()), 'row', array("label" => "Descrição"));
        echo "
                    </div>
                    <div class=\"row\"></div>
                    <br><br>
                    <div class=\"col-md-12 col-xs-12\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\" />
                    </div>
                    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
                </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/ato/editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  140 => 46,  132 => 41,  126 => 38,  120 => 35,  112 => 30,  106 => 27,  98 => 22,  92 => 19,  86 => 16,  81 => 14,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Editar Ato
    </div>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-11 col-xs-12\">
                    {{ form_start(form) }}
                    <div class=\"col-md-3 col-xs-12\">
                        {{ form_row(form.emissao, {'label':'Data'}) }}
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        {{ form_row(form.numero, {'label':'Nº do Ato'}) }}
                    </div>
                    <div class=\"col-md-5 col-xs-12\">
                        {{ form_row(form.tipodeato, {'label':'Tipo de Ato'}) }}
                    </div>
                    <div class=\"row\"></div>
                    <br>
                    <div class=\"col-md-6 col-xs-12\">
                        {{ form_row(form.assunto, {'label':'Assunto'}) }}
                    </div>
                    <div class=\"col-md-6 col-xs-12\">
                        {{ form_row(form.interessado, {'label':'Interessado/Requerente'}) }}
                    </div>
                    <div class=\"row\"></div>
                    <br>
                    <div class=\"col-md-4 col-xs-12\">
                        {{ form_row(form.favoravel, {'label':'Parecer Favorável?'}) }}
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        {{ form_row(form.tipodeprocesso, {'label':'Tipo de Processo'}) }}
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        {{ form_row(form.numerodoprocesso, {'label':'Nº do Processo'}) }}
                    </div>
                    <div class=\"row\"></div>
                    <br>
                    <div class=\"col-md-12 col-xs-12\">
                        {{ form_row(form.descricao, {'label':'Descrição'}) }}
                    </div>
                    <div class=\"row\"></div>
                    <br><br>
                    <div class=\"col-md-12 col-xs-12\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\" />
                    </div>
                    {{ form_end(form) }}
                </div>
        </div>
    </div>
{% endblock %}", "esp/produtividade/ato/editar.html.twig", "/home/francisco/Projetos/omnia/templates/esp/produtividade/ato/editar.html.twig");
    }
}
