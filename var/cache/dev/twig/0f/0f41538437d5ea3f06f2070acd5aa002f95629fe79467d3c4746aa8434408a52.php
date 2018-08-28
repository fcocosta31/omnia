<?php

/* esp/produtividade/ato/view.html.twig */
class __TwigTemplate_08e4500056857c5bf3160cdc2e4ebb9450a84e50b899bbadb829eaacd1e8822e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/ato/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/ato/view.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"fundo-topo-menu\">
        Detalhe do Ato
    </div>
    <br>
    <div class=\"row\">
        <div class=\"container-fluid table-responsive\">
            <table class=\"table\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new Twig_Error_Runtime('Variable "act" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "                <tr>
                    <th>Especializada: </th>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "descricao", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Procurador: </th>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "user", array()), "nome", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Emissão: </th>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emissao", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Tipo de Ato: </th>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeato", array()), "descricao", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Assunto: </th>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "assunto", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Tipo de Processo: </th>
                    ";
            // line 32
            $context["processo"] = "Não informado";
            // line 33
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()))) {
                // line 34
                echo "                        ";
                $context["processo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()), "descricao", array());
                // line 35
                echo "                    ";
            }
            // line 36
            echo "                    <td>";
            echo twig_escape_filter($this->env, (isset($context["processo"]) || array_key_exists("processo", $context) ? $context["processo"] : (function () { throw new Twig_Error_Runtime('Variable "processo" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Nº do Processo: </th>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Descrição: </th>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descricao", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </table>
            <input type=\"button\" class=\"btn btn-success btn-sm\" value=\"Voltar\" onclick=\"turnBackToListActs('";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_list-acts");
        echo "')\">
        </div>
    </div>
    
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/ato/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 53,  122 => 52,  108 => 44,  101 => 40,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  82 => 32,  75 => 28,  68 => 24,  61 => 20,  54 => 16,  47 => 12,  43 => 10,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid\">
    <div class=\"fundo-topo-menu\">
        Detalhe do Ato
    </div>
    <br>
    <div class=\"row\">
        <div class=\"container-fluid table-responsive\">
            <table class=\"table\">
                {% for i in act %}
                <tr>
                    <th>Especializada: </th>
                    <td>{{ i.lotacao.descricao }}</td>
                </tr>
                <tr>
                    <th>Procurador: </th>
                    <td>{{ i.user.nome }}</td>
                </tr>
                <tr>
                    <th>Emissão: </th>
                    <td>{{ i.emissao|date('d/m/Y') }}</td>
                </tr>
                <tr>
                    <th>Tipo de Ato: </th>
                    <td>{{ i.tipodeato.descricao }}</td>
                </tr>
                <tr>
                    <th>Assunto: </th>
                    <td>{{ i.assunto }}</td>
                </tr>
                <tr>
                    <th>Tipo de Processo: </th>
                    {% set processo = 'Não informado' %}
                    {% if i.tipodeprocesso is not null %}
                        {% set processo = i.tipodeprocesso.descricao %}
                    {% endif %}
                    <td>{{ processo }}</td>
                </tr>
                <tr>
                    <th>Nº do Processo: </th>
                    <td>{{ i.numerodoprocesso }}</td>
                </tr>
                <tr>
                    <th>Descrição: </th>
                    <td>{{ i.descricao }}</td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                </tr>

            {% endfor %}
            </table>
            <input type=\"button\" class=\"btn btn-success btn-sm\" value=\"Voltar\" onclick=\"turnBackToListActs('{{ path('esp_produtividade_list-acts') }}')\">
        </div>
    </div>
    
</div>", "esp/produtividade/ato/view.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\esp\\produtividade\\ato\\view.html.twig");
    }
}
