<?php

/* users/index.html.twig */
class __TwigTemplate_5b37cf6d16e699265b4e20ab8f0b868899c6716ec3cb60b4df64aa498c212d39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/index.html.twig"));

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
        Usuários cadastrados
    </div>
    <br>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\"
                   class=\"btn btn-success\">Novo</a>
            </div>
            <div class=\"col-md-10 col-xs-12\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"5\">
                            ";
        // line 22
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->filter($this->env, (isset($context["usr"]) || array_key_exists("usr", $context) ? $context["usr"] : (function () { throw new Twig_Error_Runtime('Variable "usr" does not exist.', 22, $this->source); })()), array("u.nome" => "Nome", "t.descricao" => "Lotação"));
        // line 25
        echo "
                        </th>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Lotação</th>
                        <th>Últ.Acesso</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usr"]) || array_key_exists("usr", $context) ? $context["usr"] : (function () { throw new Twig_Error_Runtime('Variable "usr" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                        ";
            $context["cor_linha"] = "";
            // line 39
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["i"], "enabled", array())) {
                // line 40
                echo "                            ";
                $context["cor_linha"] = "tr-black-color";
                // line 41
                echo "                        ";
            }
            // line 42
            echo "                        <tr class='";
            echo twig_escape_filter($this->env, (isset($context["cor_linha"]) || array_key_exists("cor_linha", $context) ? $context["cor_linha"] : (function () { throw new Twig_Error_Runtime('Variable "cor_linha" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "'>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "descricao", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lastLogin", array()), "d/m/Y H:i:s", "America/Fortaleza"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit_id", array("id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </tbody>
                    <tfoot><tr><td colspan=\"5\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["usr"]) || array_key_exists("usr", $context) ? $context["usr"] : (function () { throw new Twig_Error_Runtime('Variable "usr" does not exist.', 55, $this->source); })()));
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
        return "users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  155 => 51,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  124 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  108 => 37,  94 => 25,  92 => 22,  81 => 14,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}
    <div class=\"fundo-topo-menu\">
        Usuários cadastrados
    </div>
    <br>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-1 col-xs-12\">
                <h4>Ações</h4>
                <a href=\"{{ path('fos_user_registration_register') }}\"
                   class=\"btn btn-success\">Novo</a>
            </div>
            <div class=\"col-md-10 col-xs-12\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th colspan=\"5\">
                            {{ knp_pagination_filter(usr, {
                                'u.nome':'Nome',
                                't.descricao':'Lotação'
                            }) }}
                        </th>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Lotação</th>
                        <th>Últ.Acesso</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for i in usr %}
                        {% set cor_linha  = '' %}
                        {% if not i.enabled %}
                            {% set cor_linha = 'tr-black-color' %}
                        {% endif %}
                        <tr class='{{cor_linha}}'>
                            <td>{{ i.nome }}</td>
                            <td>{{ i.email }}</td>
                            <td>{{ i.lotacao.descricao }}</td>
                            <td>{{ i.lastLogin|date('d/m/Y H:i:s', 'America/Fortaleza') }}</td>
                            <td><a href=\"{{ path('fos_user_profile_edit_id', {'id':i.id}) }}\"
                                   class=\"btn btn-default btn-sm\">Editar</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot><tr><td colspan=\"5\"></td></tr></tfoot>
                </table>
                <div class=\"navigation\">
                    {{ knp_pagination_render(usr) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "users/index.html.twig", "D:\\projetos\\omnia\\templates\\users\\index.html.twig");
    }
}
