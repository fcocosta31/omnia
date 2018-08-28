<?php

/* dai/rh/cadastro/index.html.twig */
class __TwigTemplate_eac2539543fe91ab2d0362f1a95cf12b9d48cab72aa5a1e785057756b1249b4f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dai/rh/cadastro/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dai/rh/cadastro/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dai/rh/cadastro/index.html.twig"));

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
        Listagem de Pessoal
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_novo");
        echo "\"
                   class=\"btn btn-success\">Novo</a>
            </div>
            <div class=\"col-md-10 col-xs-12 table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Classificação</th>
                        <th>Lotação</th>
                        <th>Cedido?</th>
                        <th>Órgão de Origem</th>
                        <th>Fone</th>
                        <th>E-mail</th>
                        <th>CPF nº</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empls"]) || array_key_exists("empls", $context) ? $context["empls"] : (function () { throw new Twig_Error_Runtime('Variable "empls" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                        <tr>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "matricula", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "classificacao", array()), "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "departamento", array()), "nome", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "cedido", array()) == 0)) {
                // line 42
                echo "                                   SIM
                                ";
            } else {
                // line 44
                echo "                                   NÃO
                                ";
            }
            // line 46
            echo "                            </td>
                            <td>
                                ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "orgao", array()) == null)) {
                // line 49
                echo "                                    NENHUM
                                ";
            } else {
                // line 51
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "orgao", array()), "descricao", array()), "html", null, true);
                echo "
                                ";
            }
            // line 53
            echo "                            </td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "fone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "cpf", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "matricula", array()))), "html", null, true);
            echo "\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </tbody>
                    <tfoot><tr><td colspan=\"11\"></td></tr></tfoot>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dai/rh/cadastro/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 63,  174 => 59,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  154 => 53,  148 => 51,  144 => 49,  142 => 48,  138 => 46,  134 => 44,  130 => 42,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  108 => 35,  104 => 34,  80 => 13,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Listagem de Pessoal
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>
                <a href=\"{{ path('dai_rh_cadastro_novo') }}\"
                   class=\"btn btn-success\">Novo</a>
            </div>
            <div class=\"col-md-10 col-xs-12 table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Classificação</th>
                        <th>Lotação</th>
                        <th>Cedido?</th>
                        <th>Órgão de Origem</th>
                        <th>Fone</th>
                        <th>E-mail</th>
                        <th>CPF nº</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for i in empls %}
                        <tr>
                            <td>{{ i.matricula }}</td>
                            <td>{{ i.nome }}</td>
                            <td>{{ i.classificacao.nome }}</td>
                            <td>{{ i.departamento.nome }}</td>
                            <td>
                                {% if i.cedido == 0 %}
                                   SIM
                                {% else %}
                                   NÃO
                                {% endif %}
                            </td>
                            <td>
                                {% if i.orgao == null %}
                                    NENHUM
                                {% else %}
                                    {{ i.orgao.descricao }}
                                {% endif %}
                            </td>
                            <td>{{ i.fone }}</td>
                            <td>{{ i.email }}</td>
                            <td>{{ i.cpf }}</td>
                            <td><a href=\"{{ path('dai_rh_cadastro_editar', {'id':i.id}) }}\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                            <td><a href=\"{{ path('dai_rh_cadastro_deletar', {'id':i.matricula}) }}\"
                                   onclick=\"return confirm('Tem certeza?')\" class=\"btn btn-danger btn-sm\">Deletar</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot><tr><td colspan=\"11\"></td></tr></tfoot>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "dai/rh/cadastro/index.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\dai\\rh\\cadastro\\index.html.twig");
    }
}
