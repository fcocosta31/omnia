<?php

/* esp/produtividade/ato/index.html.twig */
class __TwigTemplate_e529c95fd3292147013686f6942647a97610323db654e76b6b8f438948bccd14 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/ato/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/ato/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/ato/index.html.twig"));

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
        Atos Praticados
    </div>

    <div class=\"container-fluid\">
       <div class=\"row\">
            <div class=\"col-md-12 col-xs-12\">
                <span>Mostrando ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 13, $this->source); })())), "html", null, true);
        echo " registro(s).</span><br/><br/>
                <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_index");
        echo "\" method=\"post\">
                    <label>Início: </label>
                    <input type=\"date\" name=\"_dateini\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["dateini"]) || array_key_exists("dateini", $context) ? $context["dateini"] : (function () { throw new Twig_Error_Runtime('Variable "dateini" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
                    <label>Fim: </label>
                    <input type=\"date\" name=\"_datefim\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["datefim"]) || array_key_exists("datefim", $context) ? $context["datefim"] : (function () { throw new Twig_Error_Runtime('Variable "datefim" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"Enviar\">
                </form>
            </div>
       </div>
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-1 col-xs-12\">
                    <h4>Ações</h4>
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_novo");
        echo "\"
                       class=\"btn btn-success\">Novo</a>
                </div>
                <div class=\"col-md-11 col-xs-12 table-responsive\">

                        <table class=\"table table-hover\">
                            <thead class=\"rows\">
                                <tr>
                                    <th colspan=\"8\">
                                        ";
        // line 37
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 37, $this->source); })()), array("u.assunto" => "Assunto", "b.lotacao.descricao" => "Especializada", "u.numerodoprocesso" => "Número do Processo", "c.tipodeato.descricao" => "Tipo de Ato", "d.tipodeprocesso.descricao" => "Tipo de Processo"));
        // line 43
        echo "
                                    </th>
                                </tr>
                                <tr>
                                    <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 47, $this->source); })()), "Data", "u.emissao");
        echo "</th>
                                    <th>Especializada</th>
                                    <th>Tipo de Ato</th>
                                    <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 50, $this->source); })()), "Assunto", "u.assunto");
        echo "</th>
                                    <th>Tipo de Processo</th>
                                    <th>";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 52, $this->source); })()), "Nº Processo", "u.numerodoprocesso");
        echo "</th>
                                    <th>#</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 59
            echo "                                <tr>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emissao", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "descricao", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeato", array()), "descricao", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "assunto", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 64
            $context["processo"] = "";
            // line 65
            echo "                                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()))) {
                // line 66
                echo "                                        ";
                $context["processo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "tipodeprocesso", array()), "descricao", array());
                // line 67
                echo "                                    ";
            }
            // line 68
            echo "                                    <td>";
            echo twig_escape_filter($this->env, (isset($context["processo"]) || array_key_exists("processo", $context) ? $context["processo"] : (function () { throw new Twig_Error_Runtime('Variable "processo" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numerodoprocesso", array()), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                           class=\"btn btn-default btn-sm\">Editar</a></td>
                                    <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                           onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"8\"></td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class=\"navigation\">
                            ";
        // line 84
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["atos"]) || array_key_exists("atos", $context) ? $context["atos"] : (function () { throw new Twig_Error_Runtime('Variable "atos" does not exist.', 84, $this->source); })()));
        echo "
                        </div>

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
        return "esp/produtividade/ato/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 84,  205 => 76,  195 => 72,  190 => 70,  186 => 69,  181 => 68,  178 => 67,  175 => 66,  172 => 65,  170 => 64,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  151 => 59,  147 => 58,  138 => 52,  133 => 50,  127 => 47,  121 => 43,  119 => 37,  107 => 28,  94 => 18,  89 => 16,  84 => 14,  80 => 13,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Atos Praticados
    </div>

    <div class=\"container-fluid\">
       <div class=\"row\">
            <div class=\"col-md-12 col-xs-12\">
                <span>Mostrando {{ atos|length }} registro(s).</span><br/><br/>
                <form action=\"{{ path('esp_produtividade_ato_index') }}\" method=\"post\">
                    <label>Início: </label>
                    <input type=\"date\" name=\"_dateini\" value=\"{{ dateini }}\">
                    <label>Fim: </label>
                    <input type=\"date\" name=\"_datefim\" value=\"{{ datefim }}\">
                    <input type=\"submit\" value=\"Enviar\">
                </form>
            </div>
       </div>
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-1 col-xs-12\">
                    <h4>Ações</h4>
                    <a href=\"{{ path('esp_produtividade_ato_novo') }}\"
                       class=\"btn btn-success\">Novo</a>
                </div>
                <div class=\"col-md-11 col-xs-12 table-responsive\">

                        <table class=\"table table-hover\">
                            <thead class=\"rows\">
                                <tr>
                                    <th colspan=\"8\">
                                        {{ knp_pagination_filter(atos, {
                                            'u.assunto':'Assunto',
                                            'b.lotacao.descricao':'Especializada',
                                            'u.numerodoprocesso':'Número do Processo',
                                            'c.tipodeato.descricao':'Tipo de Ato',
                                            'd.tipodeprocesso.descricao':'Tipo de Processo'
                                        }) }}
                                    </th>
                                </tr>
                                <tr>
                                    <th>{{ knp_pagination_sortable(atos, 'Data', 'u.emissao') }}</th>
                                    <th>Especializada</th>
                                    <th>Tipo de Ato</th>
                                    <th>{{ knp_pagination_sortable(atos, 'Assunto', 'u.assunto') }}</th>
                                    <th>Tipo de Processo</th>
                                    <th>{{ knp_pagination_sortable(atos, 'Nº Processo', 'u.numerodoprocesso') }}</th>
                                    <th>#</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for i in atos %}
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
                                    <td><a href=\"{{ path('esp_produtividade_ato_editar', {'id':i.id}) }}\"
                                           class=\"btn btn-default btn-sm\">Editar</a></td>
                                    <td><a href=\"{{ path('esp_produtividade_ato_deletar', {'id':i.id}) }}\"
                                           onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                                </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"8\"></td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class=\"navigation\">
                            {{ knp_pagination_render(atos) }}
                        </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/produtividade/ato/index.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\esp\\produtividade\\ato\\index.html.twig");
    }
}
