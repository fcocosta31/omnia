<?php

/* dti/equipamento/index.html.twig */
class __TwigTemplate_38bc9bc4f71eac187ba0a51c81e9fee0c4394994265c936105a7189d4c657462 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dti/equipamento/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dti/equipamento/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dti/equipamento/index.html.twig"));

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
        Listagem de Equipamentos
    </div>

    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>

                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_equipamento_novo");
        echo "\"
                   class=\"btn btn-success btn-block\">Novo</a>
                <br>
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_tipoequipamento_novo");
        echo "\"
                   class=\"btn btn-info btn-block\">Tipo</a>
                <br>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_marca_novo");
        echo "\"
                   class=\"btn btn-warning btn-block\">Marca</a>
                <br>
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_status_novo");
        echo "\"
                   class=\"btn btn-danger btn-block\">Status</a>

            </div>
            <div class=\"col-md-10 col-xs-12\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"9\">
                            ";
        // line 34
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 34, $this->source); })()), array("u.titulo" => "Titulo", "c.marca" => "Marca", "d.status" => "Status", "b.descricao" => "Tipo", "e.descricao" => "Lotação", "u.id" => "Id"));
        // line 41
        echo "
                        </th>
                    </tr>
                    <tr>
                        <th>";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 45, $this->source); })()), "Id", "u.id");
        echo "</th>
                        <th>";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 46, $this->source); })()), "Serial", "u.serial");
        echo "</th>
                        <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 47, $this->source); })()), "Titulo", "u.titulo");
        echo "</th>
                        <th>";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 48, $this->source); })()), "Tipo", "b.descricao");
        echo "</th>
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 49, $this->source); })()), "Marca", "c.marca");
        echo "</th>
                        <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 50, $this->source); })()), "Status", "d.status");
        echo "</th>
                        <th>";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 51, $this->source); })()), "Lotação", "e.descricao");
        echo "</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "                        <tr>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, sprintf("%06d", twig_get_attribute($this->env, $this->source, $context["i"], "id", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "serial", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titulo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descricao", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "marca", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_equipamento_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_equipamento_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                    <tfoot><tr><td colspan=\"9\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 76
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["eqpto"]) || array_key_exists("eqpto", $context) ? $context["eqpto"] : (function () { throw new Twig_Error_Runtime('Variable "eqpto" does not exist.', 76, $this->source); })()));
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
        return "dti/equipamento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 76,  204 => 72,  194 => 68,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  158 => 58,  154 => 57,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  115 => 41,  113 => 34,  101 => 25,  95 => 22,  89 => 19,  83 => 16,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Listagem de Equipamentos
    </div>

    <br>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>

                <a href=\"{{ path('dti_equipamento_novo') }}\"
                   class=\"btn btn-success btn-block\">Novo</a>
                <br>
                <a href=\"{{ path('dti_tipoequipamento_novo') }}\"
                   class=\"btn btn-info btn-block\">Tipo</a>
                <br>
                <a href=\"{{ path('dti_marca_novo') }}\"
                   class=\"btn btn-warning btn-block\">Marca</a>
                <br>
                <a href=\"{{ path('dti_status_novo') }}\"
                   class=\"btn btn-danger btn-block\">Status</a>

            </div>
            <div class=\"col-md-10 col-xs-12\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"9\">
                            {{ knp_pagination_filter(eqpto, {
                                'u.titulo':'Titulo',
                                'c.marca':'Marca',
                                'd.status':'Status',
                                'b.descricao':'Tipo',
                                'e.descricao':'Lotação',
                                'u.id':'Id'
                            }) }}
                        </th>
                    </tr>
                    <tr>
                        <th>{{ knp_pagination_sortable(eqpto, 'Id', 'u.id') }}</th>
                        <th>{{ knp_pagination_sortable(eqpto, 'Serial', 'u.serial') }}</th>
                        <th>{{ knp_pagination_sortable(eqpto, 'Titulo', 'u.titulo') }}</th>
                        <th>{{ knp_pagination_sortable(eqpto, 'Tipo', 'b.descricao') }}</th>
                        <th>{{ knp_pagination_sortable(eqpto, 'Marca', 'c.marca') }}</th>
                        <th>{{ knp_pagination_sortable(eqpto, 'Status', 'd.status') }}</th>
                        <th>{{ knp_pagination_sortable(eqpto, 'Lotação', 'e.descricao') }}</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for i in eqpto %}
                        <tr>
                            <td>{{ \"%06d\"|format(i.id) }}</td>
                            <td>{{ i.serial }}</td>
                            <td>{{ i.titulo }}</td>
                            <td>{{ i.descricao }}</td>
                            <td>{{ i.marca }}</td>
                            <td>{{ i.status }}</td>
                            <td>{{ i.lotacao }}</td>
                            <td><a href=\"{{ path('dti_equipamento_editar', {'id':i.id}) }}\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"{{ path('dti_equipamento_deletar', {'id':i.id}) }}\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot><tr><td colspan=\"9\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    {{ knp_pagination_render(eqpto) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "dti/equipamento/index.html.twig", "/home/francisco/Projetos/omnia/templates/dti/equipamento/index.html.twig");
    }
}
