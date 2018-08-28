<?php

/* lotacao/index.html.twig */
class __TwigTemplate_be14e69e604eab127a1c731e38fd8b37b3ec4e09156226f868ca2ab9c9c8a55e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lotacao/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lotacao/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lotacao/index.html.twig"));

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
        Lotações (Especializadas / Divisões)
    </div>
    <br>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lotacao_novo");
        echo "\"
                   class=\"btn btn-success\">Novo</a><br>
            </div>
            <div class=\"col-md-10 col-xs-12 table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"4\">
                            ";
        // line 22
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["lots"]) || array_key_exists("lots", $context) ? $context["lots"] : (function () { throw new Twig_Error_Runtime('Variable "lots" does not exist.', 22, $this->source); })()), array("lt.descricao" => "Descricao"));
        // line 24
        echo "
                        </th>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lots"]) || array_key_exists("lots", $context) ? $context["lots"] : (function () { throw new Twig_Error_Runtime('Variable "lots" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                        <tr>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descricao", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lotacao_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lotacao_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                    <tfoot><tr><td colspan=\"3\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["lots"]) || array_key_exists("lots", $context) ? $context["lots"] : (function () { throw new Twig_Error_Runtime('Variable "lots" does not exist.', 47, $this->source); })()));
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
        return "lotacao/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  132 => 43,  122 => 39,  117 => 37,  113 => 36,  110 => 35,  106 => 34,  94 => 24,  92 => 22,  81 => 14,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Lotações (Especializadas / Divisões)
    </div>
    <br>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>
                <a href=\"{{ path('lotacao_novo') }}\"
                   class=\"btn btn-success\">Novo</a><br>
            </div>
            <div class=\"col-md-10 col-xs-12 table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"4\">
                            {{ knp_pagination_filter(lots, {
                                'lt.descricao':'Descricao'
                            }) }}
                        </th>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for i in lots %}
                        <tr>
                            <td>{{ i.descricao }}</td>
                            <td><a href=\"{{ path('lotacao_editar', {'id':i.id}) }}\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"{{ path('lotacao_deletar', {'id':i.id}) }}\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot><tr><td colspan=\"3\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    {{ knp_pagination_render(lots) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "lotacao/index.html.twig", "/var/www/omnia/templates/lotacao/index.html.twig");
    }
}
