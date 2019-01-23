<?php

/* esp/produtividade/reports/esp_criticas_detalhe.html.twig */
class __TwigTemplate_db867170b67ca673d33c0ebb0be1300e3870794dec73c1d31593c53b8bd2be45 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/reports/esp_criticas_detalhe.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_criticas_detalhe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_criticas_detalhe.html.twig"));

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
        Detalhe de Críticas
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

                    <table class=\"table table-hover datatables\">
                        <thead class=\"rows\">
                        <tr>
                            <th>Emissão</th>
                            <th>Procurador</th>
                            <th>Assunto</th>
                            <th>Tipo de Ato</th>
                            <th>Tipo de Processo</th>
                            <th>Nº do Processo</th>
                            <th>Descrição</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalhe"]) || array_key_exists("detalhe", $context) ? $context["detalhe"] : (function () { throw new Twig_Error_Runtime('Variable "detalhe" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "                            <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emissao", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nome", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "assunto", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeato", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descricao", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_detalhar-ato", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                       class=\"btn btn-default btn-sm\">View</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"8\"></td>
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
        return "esp/produtividade/reports/esp_criticas_detalhe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  107 => 32,  103 => 31,  82 => 15,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Detalhe de Críticas
    </div>
    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-12 col-xs-12 table-responsive\">

                    <h5>Período de {{ dateini|date('d/m/Y') }} a {{ datefim|date('d/m/Y') }}</h5>

                    <table class=\"table table-hover datatables\">
                        <thead class=\"rows\">
                        <tr>
                            <th>Emissão</th>
                            <th>Procurador</th>
                            <th>Assunto</th>
                            <th>Tipo de Ato</th>
                            <th>Tipo de Processo</th>
                            <th>Nº do Processo</th>
                            <th>Descrição</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for i in detalhe %}
                            <tr>
                                <td>{{ i.emissao|date('d/m/Y') }}</td>
                                <td>{{ i.nome }}</td>
                                <td>{{ i.assunto }}</td>
                                <td>{{ i.tipodeato }}</td>
                                <td>{{ i.tipodeprocesso }}</td>
                                <td>{{ i.numerodoprocesso }}</td>
                                <td>{{ i.descricao }}</td>
                                <td><a href=\"{{ path('esp_produtividade_detalhar-ato', {'id':i.id}) }}\"
                                       class=\"btn btn-default btn-sm\">View</a></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"8\"></td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/produtividade/reports/esp_criticas_detalhe.html.twig", "/home/dti/Projetos/omnia/templates/esp/produtividade/reports/esp_criticas_detalhe.html.twig");
    }
}
