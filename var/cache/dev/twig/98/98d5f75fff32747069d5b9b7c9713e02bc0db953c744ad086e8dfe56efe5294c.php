<?php

/* esp/produtividade/ato/view.html.twig */
class __TwigTemplate_c663b50426b9ba9fab7ebab2884b35fa2da5512068b4d65a9ec15d33b8b5e6f2 extends Twig_Template
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
                    <th>Data do Registro: </th>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "datacadastro", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Data do Ato: </th>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emissao", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                </tr>
                    <tr>
                        <th>Nº do Ato: </th>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numero", array()), "html", null, true);
            echo "</td>
                    </tr>
                <tr>
                    <th>Tipo de Ato: </th>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeato", array()), "descricao", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Assunto: </th>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "assunto", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Interessado/Requerente: </th>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "interessado", array()), "html", null, true);
            echo "</td>
                </tr>

                ";
            // line 43
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["i"], "favoravel", array()))) {
                // line 44
                echo "                    <tr>
                        ";
                // line 45
                $context["parecer"] = "Não";
                // line 46
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["i"], "favoravel", array())) {
                    // line 47
                    echo "                            ";
                    $context["parecer"] = "Sim";
                    // line 48
                    echo "                        ";
                }
                // line 49
                echo "                        <th>Parecer Favorável?</th>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["parecer"]) || array_key_exists("parecer", $context) ? $context["parecer"] : (function () { throw new Twig_Error_Runtime('Variable "parecer" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 53
            echo "
                <tr>
                    <th>Tipo de Processo: </th>
                    ";
            // line 56
            $context["processo"] = "Não informado";
            // line 57
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()))) {
                // line 58
                echo "                        ";
                $context["processo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()), "descricao", array());
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                    <td>";
            echo twig_escape_filter($this->env, (isset($context["processo"]) || array_key_exists("processo", $context) ? $context["processo"] : (function () { throw new Twig_Error_Runtime('Variable "processo" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Nº do Processo: </th>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Descrição: </th>
                    <td>";
            // line 68
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
        // line 76
        echo "            </table>
            <input type=\"button\" class=\"btn btn-success btn-sm\" value=\"Voltar\" onclick=\"turnBackToListActs('";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_list-acts");
        echo "')\">
        </div>
    </div>
    
</div>
";
        
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
        return array (  175 => 77,  172 => 76,  158 => 68,  151 => 64,  143 => 60,  140 => 59,  137 => 58,  134 => 57,  132 => 56,  127 => 53,  121 => 50,  118 => 49,  115 => 48,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  102 => 43,  96 => 40,  89 => 36,  82 => 32,  75 => 28,  68 => 24,  61 => 20,  54 => 16,  47 => 12,  43 => 10,  39 => 9,  29 => 1,);
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
                    <th>Data do Registro: </th>
                    <td>{{ i.datacadastro|date('d/m/Y') }}</td>
                </tr>
                <tr>
                    <th>Data do Ato: </th>
                    <td>{{ i.emissao|date('d/m/Y') }}</td>
                </tr>
                    <tr>
                        <th>Nº do Ato: </th>
                        <td>{{ i.numero }}</td>
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
                    <th>Interessado/Requerente: </th>
                    <td>{{ i.interessado }}</td>
                </tr>

                {% if i.favoravel is not null %}
                    <tr>
                        {% set parecer = 'Não' %}
                        {% if i.favoravel %}
                            {% set parecer = 'Sim' %}
                        {% endif %}
                        <th>Parecer Favorável?</th>
                        <td>{{ parecer }}</td>
                    </tr>
                {% endif %}

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
    
</div>
", "esp/produtividade/ato/view.html.twig", "/var/www/omnia/templates/esp/produtividade/ato/view.html.twig");
    }
}
