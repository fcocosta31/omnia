<?php

/* esp/produtividade/reports/esp_criticas_report.html.twig */
class __TwigTemplate_76e31f306c9994e303c452d3205dc275b879d03c91553103c807f9b879919261 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/reports/esp_criticas_report.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_criticas_report.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_criticas_report.html.twig"));

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
        Relatório Sintético de Críticas
    </div>
    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-12 col-xs-12 table-responsive\">

                    <h5>Período de ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateini"]) || array_key_exists("dateini", $context) ? $context["dateini"] : (function () { throw new Twig_Error_Runtime('Variable "dateini" does not exist.', 15, $this->source); })()), "d/m/Y"), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datefim"]) || array_key_exists("datefim", $context) ? $context["datefim"] : (function () { throw new Twig_Error_Runtime('Variable "datefim" does not exist.', 15, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "</h5>

                    <table class=\"table table-hover\">
                        <thead class=\"rows\">
                        <tr>
                            <th>Especializada</th>
                            <th>Tipo de Processo</th>
                            <th>Número do Processo</th>
                            <th>Ocorrências</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["criticas"]) || array_key_exists("criticas", $context) ? $context["criticas"] : (function () { throw new Twig_Error_Runtime('Variable "criticas" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "                            <tr>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "tipoprocesso", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()), "html", null, true);
            echo "</td>
                                <td>Ocorreu em ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "atos", array()), "html", null, true);
            echo " atos</td>
                                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-criticas-detalhe", array("dini" => (isset($context["dateini"]) || array_key_exists("dateini", $context) ? $context["dateini"] : (function () { throw new Twig_Error_Runtime('Variable "dateini" does not exist.', 34, $this->source); })()), "dfim" => (isset($context["datefim"]) || array_key_exists("datefim", $context) ? $context["datefim"] : (function () { throw new Twig_Error_Runtime('Variable "datefim" does not exist.', 34, $this->source); })()), "idesp" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "idproc" => twig_get_attribute($this->env, $this->source, $context["i"], "idtipoprocesso", array()), "nproc" => twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()))), "html", null, true);
            echo "\"
                                       class=\"btn btn-default btn-sm\">
                                        Detalhar
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"5\"></td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/reports/esp_criticas_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  104 => 29,  100 => 28,  82 => 15,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Relatório Sintético de Críticas
    </div>
    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-12 col-xs-12 table-responsive\">

                    <h5>Período de {{ dateini|date('d/m/Y') }} a {{ datefim|date('d/m/Y') }}</h5>

                    <table class=\"table table-hover\">
                        <thead class=\"rows\">
                        <tr>
                            <th>Especializada</th>
                            <th>Tipo de Processo</th>
                            <th>Número do Processo</th>
                            <th>Ocorrências</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for i in criticas %}
                            <tr>
                                <td>{{ i.lotacao }}</td>
                                <td>{{ i.tipoprocesso }}</td>
                                <td>{{ i.numerodoprocesso }}</td>
                                <td>Ocorreu em {{ i.atos }} atos</td>
                                <td><a href=\"{{ path('esp_produtividade_esp-criticas-detalhe', {'dini':dateini, 'dfim':datefim, 'idesp':i.id, 'idproc':i.idtipoprocesso, 'nproc':i.numerodoprocesso }) }}\"
                                       class=\"btn btn-default btn-sm\">
                                        Detalhar
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"5\"></td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/produtividade/reports/esp_criticas_report.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\esp\\produtividade\\reports\\esp_criticas_report.html.twig");
    }
}
