<?php

/* esp/produtividade/tipodeprocesso/index.html.twig */
class __TwigTemplate_a397ff2114be95b3ea61ba03fb6e3625d5d98e230b2a813eb0245368c94563be extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/tipodeprocesso/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/tipodeprocesso/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/tipodeprocesso/index.html.twig"));

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
        Tipos de Processo
    </div>

    <div class=\"container-fluid\">
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-1 col-xs-12\">
                    <h4>Ações</h4>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_novo");
        echo "\"
                       class=\"btn btn-success\">Novo</a><br>
                </div>
                <div class=\"col-md-11 col-xs-12 table-responsive\">

                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th colspan=\"4\">
                                    ";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["tprocs"]) || array_key_exists("tprocs", $context) ? $context["tprocs"] : (function () { throw new Twig_Error_Runtime('Variable "tprocs" does not exist.', 25, $this->source); })()), array("tpc.descricao" => "Descricao"));
        // line 27
        echo "
                                </th>
                            </tr>
                            <tr>
                                <th>Descrição</th>
                                <th>Peso</th>
                                <th>#</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tprocs"]) || array_key_exists("tprocs", $context) ? $context["tprocs"] : (function () { throw new Twig_Error_Runtime('Variable "tprocs" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 39
            echo "                                <tr>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descricao", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "peso", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                           class=\"btn btn-default btn-sm\">Editar</a></td>
                                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                           onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan=\"8\"></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class=\"navigation\">
                            ";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tprocs"]) || array_key_exists("tprocs", $context) ? $context["tprocs"] : (function () { throw new Twig_Error_Runtime('Variable "tprocs" does not exist.', 56, $this->source); })()));
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
        return "esp/produtividade/tipodeprocesso/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 56,  140 => 48,  130 => 44,  125 => 42,  121 => 41,  117 => 40,  114 => 39,  110 => 38,  97 => 27,  95 => 25,  83 => 16,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Tipos de Processo
    </div>

    <div class=\"container-fluid\">
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-1 col-xs-12\">
                    <h4>Ações</h4>
                    <a href=\"{{ path('esp_produtividade_tipo-de-processo_novo') }}\"
                       class=\"btn btn-success\">Novo</a><br>
                </div>
                <div class=\"col-md-11 col-xs-12 table-responsive\">

                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th colspan=\"4\">
                                    {{ knp_pagination_filter(tprocs, {
                                        'tpc.descricao':'Descricao'
                                    }) }}
                                </th>
                            </tr>
                            <tr>
                                <th>Descrição</th>
                                <th>Peso</th>
                                <th>#</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for i in tprocs %}
                                <tr>
                                    <td>{{ i.descricao }}</td>
                                    <td>{{ (i.peso)|number_format(2, ',', '.') }}</td>
                                    <td><a href=\"{{ path('esp_produtividade_tipo-de-processo_editar', {'id':i.id}) }}\"
                                           class=\"btn btn-default btn-sm\">Editar</a></td>
                                    <td><a href=\"{{ path('esp_produtividade_tipo-de-processo_editar', {'id':i.id}) }}\"
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
                            {{ knp_pagination_render(tprocs) }}
                        </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/produtividade/tipodeprocesso/index.html.twig", "/var/www/omnia/templates/esp/produtividade/tipodeprocesso/index.html.twig");
    }
}
