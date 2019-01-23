<?php

/* esp/eleicao/candidato/index.html.twig */
class __TwigTemplate_c81401c5fe90efb891c4266f12c93172e8aa6cbab947e6696ded42c0b11f748e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/eleicao/candidato/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/eleicao/candidato/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/eleicao/candidato/index.html.twig"));

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
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 7, $this->source); })()), "titulo", array()), "html", null, true);
        echo " <br>
        Data do pleito: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 8, $this->source); })()), "inicio", array()), "d/m/Y"), "html", null, true);
        echo "<br>
        Horário: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 9, $this->source); })()), "inicio", array()), "H:i"), "html", null, true);
        echo " ás ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 9, $this->source); })()), "termino", array()), "H:i"), "html", null, true);
        echo "
    </div>

    <div class=\"container-fluid\">
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-1 col-xs-12 noPrint\">
                    <h4>Ações</h4>
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_candidato_novo", array("eleicaoid" => twig_get_attribute($this->env, $this->source, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 18, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-success btn-block\">Novo</a><br>
                </div>
                <div class=\"col-md-11 col-xs-12 table-responsive\">

                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th colspan=\"4\" class=\"noPrint\">
                                ";
        // line 27
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["candidato"]) || array_key_exists("candidato", $context) ? $context["candidato"] : (function () { throw new Twig_Error_Runtime('Variable "candidato" does not exist.', 27, $this->source); })()), array("candidato.candidato" => "Nome"));
        // line 29
        echo "
                            </th>
                        </tr>
                        <tr>
                            <th>Nome</th>
                            <th>Votos</th>
                            <th class=\"noPrint\">#</th>
                            <th class=\"noPrint\">#</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidato"]) || array_key_exists("candidato", $context) ? $context["candidato"] : (function () { throw new Twig_Error_Runtime('Variable "candidato" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "                            <tr>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "candidato", array())), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "total", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_candidato_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                       class=\"noPrint btn btn-default btn-sm\">Editar</a></td>
                                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_candidato_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return confirm('Tem certeza?')\" class=\"noPrint btn btn-danger btn-sm\">Deletar</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"4\"></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class=\"navigation\">
                        ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["candidato"]) || array_key_exists("candidato", $context) ? $context["candidato"] : (function () { throw new Twig_Error_Runtime('Variable "candidato" does not exist.', 58, $this->source); })()));
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
        return "esp/eleicao/candidato/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  153 => 50,  143 => 46,  138 => 44,  134 => 43,  130 => 42,  127 => 41,  123 => 40,  110 => 29,  108 => 27,  96 => 18,  82 => 9,  78 => 8,  74 => 7,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        {{ eleicao.titulo }} <br>
        Data do pleito: {{ eleicao.inicio|date('d/m/Y') }}<br>
        Horário: {{ eleicao.inicio|date('H:i') }} ás {{ eleicao.termino|date('H:i') }}
    </div>

    <div class=\"container-fluid\">
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-1 col-xs-12 noPrint\">
                    <h4>Ações</h4>
                    <a href=\"{{ path('esp_eleicao_candidato_novo', {'eleicaoid':eleicao.id}) }}\"
                       class=\"btn btn-success btn-block\">Novo</a><br>
                </div>
                <div class=\"col-md-11 col-xs-12 table-responsive\">

                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th colspan=\"4\" class=\"noPrint\">
                                {{ knp_pagination_filter(candidato, {
                                    'candidato.candidato':'Nome'
                                }) }}
                            </th>
                        </tr>
                        <tr>
                            <th>Nome</th>
                            <th>Votos</th>
                            <th class=\"noPrint\">#</th>
                            <th class=\"noPrint\">#</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for i in candidato %}
                            <tr>
                                <td>{{ i.candidato|upper }}</td>
                                <td>{{ i.total }}</td>
                                <td><a href=\"{{ path('esp_eleicao_candidato_editar', {'id':i.id}) }}\"
                                       class=\"noPrint btn btn-default btn-sm\">Editar</a></td>
                                <td><a href=\"{{ path('esp_eleicao_candidato_deletar', {'id':i.id}) }}\"
                                       onclick=\"return confirm('Tem certeza?')\" class=\"noPrint btn btn-danger btn-sm\">Deletar</a></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"4\"></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class=\"navigation\">
                        {{ knp_pagination_render(candidato) }}
                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/eleicao/candidato/index.html.twig", "/home/francisco/Projetos/omnia/templates/esp/eleicao/candidato/index.html.twig");
    }
}
