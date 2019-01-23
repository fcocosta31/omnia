<?php

/* esp/eleicao/pleito/votantes.html.twig */
class __TwigTemplate_a535c2cb49bf055447b19bf33ce21acc31b5bafac207c8a94a37d631e8059ceb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/eleicao/pleito/votantes.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/eleicao/pleito/votantes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/eleicao/pleito/votantes.html.twig"));

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
        echo "<br>
        Relação de Votantes
    </div>

    <div class=\"container-fluid\">
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-12 col-xs-12 table-responsive\">

                    <table class=\"table table-striped\">

                        <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Identificação digital do voto</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["eleicao"]) || array_key_exists("eleicao", $context) ? $context["eleicao"] : (function () { throw new Twig_Error_Runtime('Variable "eleicao" does not exist.', 29, $this->source); })()), "votos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                            <tr>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, sprintf("%06d", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "eleitor", array()), "matricula", array())), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "eleitor", array()), "nome", array())), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "chave", array())), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"3\"></td>
                        </tr>
                        </tfoot>
                    </table>

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
        return "esp/eleicao/pleito/votantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  122 => 33,  118 => 32,  114 => 31,  111 => 30,  107 => 29,  82 => 9,  78 => 8,  74 => 7,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
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
        Horário: {{ eleicao.inicio|date('H:i') }} ás {{ eleicao.termino|date('H:i') }}<br>
        Relação de Votantes
    </div>

    <div class=\"container-fluid\">
        <br>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"col-md-12 col-xs-12 table-responsive\">

                    <table class=\"table table-striped\">

                        <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Identificação digital do voto</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for i in eleicao.votos %}
                            <tr>
                                <td>{{ \"%06d\"|format(i.eleitor.matricula) }}</td>
                                <td>{{ i.eleitor.nome|upper }}</td>
                                <td>{{ i.chave|upper }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"3\"></td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "esp/eleicao/pleito/votantes.html.twig", "/home/francisco/Projetos/omnia/templates/esp/eleicao/pleito/votantes.html.twig");
    }
}
