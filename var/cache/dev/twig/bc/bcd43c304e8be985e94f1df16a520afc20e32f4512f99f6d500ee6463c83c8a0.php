<?php

/* esp/eleicao/pleito/index.html.twig */
class __TwigTemplate_94bb603dd72a6f797a673a7914e1d5f000eb0bc1ca823b75d21dc792785e8b10 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/eleicao/pleito/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/eleicao/pleito/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/eleicao/pleito/index.html.twig"));

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
        Listagem de Pleitos
    </div>

    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>

                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_pleito_novo");
        echo "\"
                   class=\"btn btn-success btn-block\">Novo</a>

            </div>
            <div class=\"col-md-10 col-xs-12\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"8\">
                            ";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 25, $this->source); })()), array("u.titulo" => "Titulo"));
        // line 27
        echo "
                        </th>
                    </tr>
                    <tr>
                        <th>";
        // line 31
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 31, $this->source); })()), "Id", "u.id");
        echo "</th>
                        <th>";
        // line 32
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 32, $this->source); })()), "Titulo", "u.titulo");
        echo "</th>
                        <th>";
        // line 33
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 33, $this->source); })()), "Início", "u.inicio");
        echo "</th>
                        <th>";
        // line 34
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 34, $this->source); })()), "Término", "u.termino");
        echo "</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "                        <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, sprintf("%06d", twig_get_attribute($this->env, $this->source, $context["i"], "id", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titulo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "inicio", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "termino", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_candidato_index", array("pleitoid" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-primary btn-sm btn-block\">Candidatos</a></td>
                            <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_pleito_votantes", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                    class=\"btn btn-success btn-sm btn-block\">Eleitores</a></td>
                            <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_pleito_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_pleito_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </tbody>
                    <tfoot><tr><td colspan=\"8\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 62, $this->source); })()));
        echo "
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
        return "esp/eleicao/pleito/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 62,  174 => 58,  164 => 54,  159 => 52,  154 => 50,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  130 => 43,  126 => 42,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  97 => 27,  95 => 25,  83 => 16,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Listagem de Pleitos
    </div>

    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>

                <a href=\"{{ path('esp_eleicao_pleito_novo') }}\"
                   class=\"btn btn-success btn-block\">Novo</a>

            </div>
            <div class=\"col-md-10 col-xs-12\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"8\">
                            {{ knp_pagination_filter(eleicao, {
                                'u.titulo':'Titulo'
                            }) }}
                        </th>
                    </tr>
                    <tr>
                        <th>{{ knp_pagination_sortable(eleicao, 'Id', 'u.id') }}</th>
                        <th>{{ knp_pagination_sortable(eleicao, 'Titulo', 'u.titulo') }}</th>
                        <th>{{ knp_pagination_sortable(eleicao, 'Início', 'u.inicio') }}</th>
                        <th>{{ knp_pagination_sortable(eleicao, 'Término', 'u.termino') }}</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for i in eleicao %}
                        <tr>
                            <td>{{ \"%06d\"|format(i.id) }}</td>
                            <td>{{ i.titulo }}</td>
                            <td>{{ i.inicio|date('d/m/Y H:i') }}</td>
                            <td>{{ i.termino|date('d/m/Y H:i') }}</td>
                            <td><a href=\"{{ path('esp_eleicao_candidato_index', {'pleitoid':i.id}) }}\"
                                   class=\"btn btn-primary btn-sm btn-block\">Candidatos</a></td>
                            <td><a href=\"{{ path('esp_eleicao_pleito_votantes', {'id':i.id}) }}\"
                                    class=\"btn btn-success btn-sm btn-block\">Eleitores</a></td>
                            <td><a href=\"{{ path('esp_eleicao_pleito_editar', {'id':i.id}) }}\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"{{ path('esp_eleicao_pleito_deletar', {'id':i.id}) }}\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot><tr><td colspan=\"8\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    {{ knp_pagination_render(eleicao) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/eleicao/pleito/index.html.twig", "/home/francisco/Projetos/omnia/templates/esp/eleicao/pleito/index.html.twig");
    }
}
