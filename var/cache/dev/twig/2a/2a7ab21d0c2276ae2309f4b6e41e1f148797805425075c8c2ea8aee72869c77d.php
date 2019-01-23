<?php

/* esp/produtividade/reports/esp_criticas.html.twig */
class __TwigTemplate_aae407796fc4eb5eff7070e12e9860039968ff7eb62e5695782a63119a31f913 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/reports/esp_criticas.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_criticas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_criticas.html.twig"));

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
        echo "
    <div class=\"fundo-topo-menu\">
        Gerar Relatório Sintético de Críticas
    </div>
    <br><br><br>
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"col-md-4\"></div>

            <div class=\"col-md-4 col-xs-12\">

                <div class=\"jumbotron fundo-shadow\">

                    <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-criticas-report");
        echo "\" method=\"post\">

                        <div class=\"col-md-8 col-xs-12\">
                            <label>Data inicial: </label>
                            <input class=\"form-control\" type=\"date\" name=\"_dateini\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["dateini"]) || array_key_exists("dateini", $context) ? $context["dateini"] : (function () { throw new Twig_Error_Runtime('Variable "dateini" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"row\"></div>
                        <br><br>

                        <div class=\"col-md-8 col-xs-12\">
                            <label>Data final: </label>
                            <input class=\"form-control\" type=\"date\" name=\"_datefim\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["datefim"]) || array_key_exists("datefim", $context) ? $context["datefim"] : (function () { throw new Twig_Error_Runtime('Variable "datefim" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"row\"></div>

                        <br>
                        <div class=\"col-md-8 col-xs-12\">
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\">
                        </div>
                        <br>

                    </form>

                </div>

            </div>

            <div class=\"col-md-4\"></div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/reports/esp_criticas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  94 => 24,  87 => 20,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}

    <div class=\"fundo-topo-menu\">
        Gerar Relatório Sintético de Críticas
    </div>
    <br><br><br>
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"col-md-4\"></div>

            <div class=\"col-md-4 col-xs-12\">

                <div class=\"jumbotron fundo-shadow\">

                    <form action=\"{{ path('esp_produtividade_esp-criticas-report') }}\" method=\"post\">

                        <div class=\"col-md-8 col-xs-12\">
                            <label>Data inicial: </label>
                            <input class=\"form-control\" type=\"date\" name=\"_dateini\" value=\"{{ dateini }}\">
                        </div>

                        <div class=\"row\"></div>
                        <br><br>

                        <div class=\"col-md-8 col-xs-12\">
                            <label>Data final: </label>
                            <input class=\"form-control\" type=\"date\" name=\"_datefim\" value=\"{{ datefim }}\">
                        </div>
                        <div class=\"row\"></div>

                        <br>
                        <div class=\"col-md-8 col-xs-12\">
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\">
                        </div>
                        <br>

                    </form>

                </div>

            </div>

            <div class=\"col-md-4\"></div>

        </div>
    </div>

{% endblock %}", "esp/produtividade/reports/esp_criticas.html.twig", "/var/www/omnia/templates/esp/produtividade/reports/esp_criticas.html.twig");
    }
}
