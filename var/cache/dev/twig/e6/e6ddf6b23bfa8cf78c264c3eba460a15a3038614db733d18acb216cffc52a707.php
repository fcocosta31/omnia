<?php

/* esp/produtividade/reports/list-acts.html.twig */
class __TwigTemplate_8b946874bf7aa123da0d91f87c9f12e78cd151ece0feb03808ce18543d827b20 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/list-acts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/list-acts.html.twig"));

        // line 1
        echo "<div class=\"row\">
<div class=\"row\">
    <div class=\"col-md-12 col-xs-12\">
        <span>Mostrando ";
        // line 4
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["acts"]) || array_key_exists("acts", $context) ? $context["acts"] : (function () { throw new Twig_Error_Runtime('Variable "acts" does not exist.', 4, $this->source); })())), "html", null, true);
        echo " registro(s). Período: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateinifilter"]) || array_key_exists("dateinifilter", $context) ? $context["dateinifilter"] : (function () { throw new Twig_Error_Runtime('Variable "dateinifilter" does not exist.', 4, $this->source); })()), "d/m/Y"), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datefimfilter"]) || array_key_exists("datefimfilter", $context) ? $context["datefimfilter"] : (function () { throw new Twig_Error_Runtime('Variable "datefimfilter" does not exist.', 4, $this->source); })()), "d/m/Y"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["valueselection"]) || array_key_exists("valueselection", $context) ? $context["valueselection"] : (function () { throw new Twig_Error_Runtime('Variable "valueselection" does not exist.', 4, $this->source); })()), "html", null, true);
        echo ".</span><br/><br/>
    </div>
</div>
<br>
<div class=\"row\">
    <div class=\"container-fluid\">
        <div class=\"col-md-12 col-xs-12\">
            <div class=\"col-md-12 col-xs-12 table-responsive\">
                <table class=\"table table-hover datatables\">
                    <thead class=\"rows\">
                    <tr>
                        <th>Date</th>
                        <th>Especializada</th>
                        <th>Tipo de Ato</th>
                        <th>Assunto</th>
                        <th>Tipo de Processo</th>
                        <th>Nº Processo</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acts"]) || array_key_exists("acts", $context) ? $context["acts"] : (function () { throw new Twig_Error_Runtime('Variable "acts" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "                        <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emissao", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "descricao", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeato", array()), "descricao", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "assunto", array()), "html", null, true);
            echo "</td>
                            ";
            // line 31
            $context["processo"] = "";
            // line 32
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()))) {
                // line 33
                echo "                                ";
                $context["processo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()), "descricao", array());
                // line 34
                echo "                            ";
            }
            // line 35
            echo "                            <td>";
            echo twig_escape_filter($this->env, (isset($context["processo"]) || array_key_exists("processo", $context) ? $context["processo"] : (function () { throw new Twig_Error_Runtime('Variable "processo" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"#!\" onclick='viewDetailsAct(\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_visualizar-ato", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\")'
                                   class=\"btn btn-default btn-sm\">View</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"7\"></td>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <input type=\"button\" class=\"btn btn-success btn-sm\" value=\"Voltar\" onclick=\"turnBackToListActs('";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-filter-reports");
        echo "')\">
    </div>
</div>
</div>

<script>
    \$(document).ready(function () {
        \$('.datatables').DataTable({
            lengthMenu: [[5, 10, 15, -1], [5, 10, 15, \"Tudo\"]],
            stateSave: true,
            language: {
                \"url\": \"//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json\"
            }
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/reports/list-acts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  117 => 41,  107 => 37,  103 => 36,  98 => 35,  95 => 34,  92 => 33,  89 => 32,  87 => 31,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  68 => 26,  64 => 25,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
<div class=\"row\">
    <div class=\"col-md-12 col-xs-12\">
        <span>Mostrando {{ acts|length }} registro(s). Período: {{ dateinifilter|date('d/m/Y') }} a {{ datefimfilter|date('d/m/Y') }}. {{ valueselection }}.</span><br/><br/>
    </div>
</div>
<br>
<div class=\"row\">
    <div class=\"container-fluid\">
        <div class=\"col-md-12 col-xs-12\">
            <div class=\"col-md-12 col-xs-12 table-responsive\">
                <table class=\"table table-hover datatables\">
                    <thead class=\"rows\">
                    <tr>
                        <th>Date</th>
                        <th>Especializada</th>
                        <th>Tipo de Ato</th>
                        <th>Assunto</th>
                        <th>Tipo de Processo</th>
                        <th>Nº Processo</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for i in acts %}
                        <tr>
                            <td>{{ i.emissao|date('d/m/Y') }}</td>
                            <td>{{ i.lotacao.descricao }}</td>
                            <td>{{ i.tipodeato.descricao }}</td>
                            <td>{{ i.assunto }}</td>
                            {% set processo = '' %}
                            {% if i.tipodeprocesso is not null %}
                                {% set processo = i.tipodeprocesso.descricao %}
                            {% endif %}
                            <td>{{ processo }}</td>
                            <td>{{ i.numerodoprocesso }}</td>
                            <td><a href=\"#!\" onclick='viewDetailsAct(\"{{ path('esp_produtividade_visualizar-ato', {'id':i.id}) }}\")'
                                   class=\"btn btn-default btn-sm\">View</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"7\"></td>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <input type=\"button\" class=\"btn btn-success btn-sm\" value=\"Voltar\" onclick=\"turnBackToListActs('{{ path('esp_produtividade_esp-filter-reports') }}')\">
    </div>
</div>
</div>

<script>
    \$(document).ready(function () {
        \$('.datatables').DataTable({
            lengthMenu: [[5, 10, 15, -1], [5, 10, 15, \"Tudo\"]],
            stateSave: true,
            language: {
                \"url\": \"//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json\"
            }
        });
    });
</script>", "esp/produtividade/reports/list-acts.html.twig", "/home/francisco/Projetos/omnia/templates/esp/produtividade/reports/list-acts.html.twig");
    }
}
