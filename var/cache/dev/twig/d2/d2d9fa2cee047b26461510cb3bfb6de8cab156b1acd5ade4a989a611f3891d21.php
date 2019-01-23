<?php

/* dti/printers/status.html.twig */
class __TwigTemplate_c4c8721941283f8bd75b76980d5aa74674b152dbb83ef6f505ad1f5aa0db9013 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dti/printers/status.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dti/printers/status.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dti/printers/status.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"fundo-topo-menu\">
    Procuradoria Geral do Município - Status das Impressoras
</div>

    <div class=\"container-fluid\">
<div class=\"table-responsive\"><hr>
<table class=\"table\">
    <thead>
    <tr>
        <th>Localização</th>
        <th>Endereço IP</th>
        <th>Modelo</th>
        <th>Nº Série</th>
        <th>Toner</th>
        <th>Últ.Troca</th>
        <th>Imagem</th>
        <th>Manutenção</th>
        <th>Situação</th>
    </tr>
    </thead>
    <tbody>

        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_printers"]) || array_key_exists("list_printers", $context) ? $context["list_printers"] : (function () { throw new Twig_Error_Runtime('Variable "list_printers" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "
        ";
            // line 27
            $context["cor_toner"] = "";
            // line 28
            echo "        ";
            $context["cor_imagem"] = "";
            // line 29
            echo "        ";
            $context["cor_manut"] = "";
            // line 30
            echo "        ";
            $context["cor_linha"] = "";
            // line 31
            echo "
        ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getStatusToner", array(), "method") < 31)) {
                // line 34
                echo "                ";
                $context["cor_toner"] = "tr-orange-color";
                // line 35
                echo "        ";
            }
            // line 36
            echo "        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getStatusToner", array(), "method") < 21)) {
                // line 38
                echo "                ";
                $context["cor_toner"] = "tr-red-color";
                // line 39
                echo "        ";
            }
            // line 41
            echo "
        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getStatusImagem", array(), "method") < 16)) {
                // line 44
                echo "                ";
                $context["cor_imagem"] = "tr-orange-color";
                // line 45
                echo "        ";
            }
            // line 46
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getStatusImagem", array(), "method") < 11)) {
                // line 47
                echo "                ";
                $context["cor_imagem"] = "tr-red-color";
                // line 48
                echo "        ";
            }
            // line 50
            echo "
        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getKitManutencao", array(), "method") < 16)) {
                // line 53
                echo "            ";
                $context["cor_manut"] = "tr-orange-color";
                // line 54
                echo "        ";
            }
            // line 55
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getKitManutencao", array(), "method") < 11)) {
                // line 56
                echo "            ";
                $context["cor_manut"] = "tr-red-color";
                // line 57
                echo "        ";
            }
            // line 59
            echo "
        ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getOnOff", array(), "method") == "DESLIGADA")) {
                // line 61
                echo "            ";
                $context["cor_linha"] = "tr-black-color";
                // line 62
                echo "            ";
                $context["cor_toner"] = "";
                // line 63
                echo "            ";
                $context["cor_imagem"] = "";
                // line 64
                echo "            ";
                $context["cor_manut"] = "";
                // line 65
                echo "        ";
            }
            // line 66
            echo "
        ";
            // line 67
            if (((twig_get_attribute($this->env, $this->source, $context["p"], "getOnOff", array(), "method") == "LIGADA") && (twig_get_attribute($this->env, $this->source, $context["p"], "getStatusToner", array(), "method") == ""))) {
                // line 68
                echo "            ";
                $context["cor_linha"] = "tr-red-color";
                // line 69
                echo "        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "getOnOff", array(), "method") == "ERRO")) {
                // line 72
                echo "            ";
                $context["cor_linha"] = "tr-red-color";
                // line 73
                echo "        ";
            }
            // line 74
            echo "
            <tr class='";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["cor_linha"]) || array_key_exists("cor_linha", $context) ? $context["cor_linha"] : (function () { throw new Twig_Error_Runtime('Variable "cor_linha" does not exist.', 75, $this->source); })()), "html", null, true);
            echo "'>
            <td><a href=\"http://";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getEndereco", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getLocal", array(), "method"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getEndereco", array(), "method"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_printers_editar", array("id" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                    <i class=\"glyphicon glyphicon-pencil\"></i>
                </a></td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getModelo", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getSerial", array(), "method"), "html", null, true);
            echo "</td>
            <td class='";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["cor_toner"]) || array_key_exists("cor_toner", $context) ? $context["cor_toner"] : (function () { throw new Twig_Error_Runtime('Variable "cor_toner" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getStatusToner", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getUltimaTroca", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td class='";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["cor_imagem"]) || array_key_exists("cor_imagem", $context) ? $context["cor_imagem"] : (function () { throw new Twig_Error_Runtime('Variable "cor_imagem" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getStatusImagem", array(), "method"), "html", null, true);
            echo "</td>
            <td class='";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["cor_manut"]) || array_key_exists("cor_manut", $context) ? $context["cor_manut"] : (function () { throw new Twig_Error_Runtime('Variable "cor_manut" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getKitManutencao", array(), "method"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                    title=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getMensagem", array(), "method"), "html", null, true);
            echo "\">
                    ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getOnOff", array(), "method"), "html", null, true);
            echo "
                </a>
            </td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"2\">Legenda (Toner):
                    <table class=\"table table-bordered\">
                        <tr>
                            <td class=\"tr-orange-color\"> abaixo de 30%</td>
                            <td class=\"tr-red-color\"> abaixo de 20%</td>
                        </tr>
                    </table>
                </td>
                <td></td>
                <td colspan=\"3\">Legenda (Imagem / Manutenção):
                    <table class=\"table table-bordered\">
                        <tr>
                            <td class=\"tr-orange-color\"> abaixo de 15%</td>
                            <td class=\"tr-red-color\"> abaixo de 10%</td>
                        </tr>
                    </table>
                </td>
                <td colspan=\"3\">
                    Cadastar nova impressora:
                    <br>
                    <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_printers_novo");
        echo "\" title=\"Nova Impressora\"
                       class=\"btn btn-md btn-primary\">
                        <i class=\"glyphicon glyphicon-new-window\"></i>
                    </a></td>
            </tr>
            <tr>
                <td colspan=\"9\">Obs.: a data da última troca está relacionada
                    a data registrada no dispositivo e pode não corresponder com a realidade.</td>
            </tr>
            <tr><td colspan=\"9\"></td></tr>
        </tfoot>
</table>
</div>
</div>

<script>
    setTimeout(function(){
        window.location.reload(1);
    }, 300000);
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dti/printers/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 118,  267 => 95,  255 => 89,  251 => 88,  243 => 85,  237 => 84,  233 => 83,  227 => 82,  223 => 81,  219 => 80,  211 => 77,  205 => 76,  201 => 75,  198 => 74,  195 => 73,  192 => 72,  190 => 71,  187 => 70,  184 => 69,  181 => 68,  179 => 67,  176 => 66,  173 => 65,  170 => 64,  167 => 63,  164 => 62,  161 => 61,  159 => 60,  156 => 59,  153 => 57,  150 => 56,  147 => 55,  144 => 54,  141 => 53,  139 => 52,  136 => 50,  133 => 48,  130 => 47,  127 => 46,  124 => 45,  121 => 44,  119 => 43,  116 => 41,  113 => 39,  110 => 38,  108 => 37,  106 => 36,  103 => 35,  100 => 34,  98 => 33,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  84 => 27,  81 => 26,  77 => 25,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block content %}
<div class=\"fundo-topo-menu\">
    Procuradoria Geral do Município - Status das Impressoras
</div>

    <div class=\"container-fluid\">
<div class=\"table-responsive\"><hr>
<table class=\"table\">
    <thead>
    <tr>
        <th>Localização</th>
        <th>Endereço IP</th>
        <th>Modelo</th>
        <th>Nº Série</th>
        <th>Toner</th>
        <th>Últ.Troca</th>
        <th>Imagem</th>
        <th>Manutenção</th>
        <th>Situação</th>
    </tr>
    </thead>
    <tbody>

        {% for p in list_printers %}

        {% set cor_toner  = '' %}
        {% set cor_imagem  = '' %}
        {% set cor_manut  = '' %}
        {% set cor_linha  = '' %}

        {%
            if p.getStatusToner() < 31 %}
                {% set cor_toner = \"tr-orange-color\" %}
        {%    endif  %}
        {%
            if p.getStatusToner() < 21  %}
                {% set cor_toner = \"tr-red-color\" %}
        {%    endif
        %}

        {%
            if p.getStatusImagem() < 16 %}
                {% set cor_imagem = 'tr-orange-color' %}
        {%    endif %}
        {%    if p.getStatusImagem() < 11 %}
                {% set cor_imagem = 'tr-red-color' %}
        {%    endif
        %}

        {%
            if p.getKitManutencao() < 16 %}
            {% set cor_manut = 'tr-orange-color' %}
        {%    endif %}
        {%    if p.getKitManutencao() < 11 %}
            {% set cor_manut = 'tr-red-color' %}
        {%    endif
        %}

        {% if p.getOnOff() == 'DESLIGADA' %}
            {% set cor_linha = 'tr-black-color' %}
            {% set cor_toner = '' %}
            {% set cor_imagem = '' %}
            {% set cor_manut = '' %}
        {% endif %}

        {% if p.getOnOff() == 'LIGADA' and p.getStatusToner() == '' %}
            {% set cor_linha = 'tr-red-color' %}
        {% endif %}

        {% if p.getOnOff() == 'ERRO' %}
            {% set cor_linha = 'tr-red-color' %}
        {% endif %}

            <tr class='{{cor_linha}}'>
            <td><a href=\"http://{{ p.getEndereco() }}\">{{p.getLocal()}}</a></td>
            <td>{{p.getEndereco()}}<a href=\"{{ path('dti_printers_editar', {'id':p.getId()}) }}\">
                    <i class=\"glyphicon glyphicon-pencil\"></i>
                </a></td>
            <td>{{p.getModelo()}}</td>
            <td>{{p.getSerial()}}</td>
            <td class='{{cor_toner}}'>{{p.getStatusToner()}}</td>
            <td>{{p.getUltimaTroca()|date('d/m/Y')}}</td>
            <td class='{{cor_imagem}}'>{{p.getStatusImagem()}}</td>
            <td class='{{cor_manut}}'>{{p.getKitManutencao()}}</td>
            <td>
                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                    title=\"{{ p.getMensagem() }}\">
                    {{p.getOnOff()}}
                </a>
            </td>
        </tr>

        {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"2\">Legenda (Toner):
                    <table class=\"table table-bordered\">
                        <tr>
                            <td class=\"tr-orange-color\"> abaixo de 30%</td>
                            <td class=\"tr-red-color\"> abaixo de 20%</td>
                        </tr>
                    </table>
                </td>
                <td></td>
                <td colspan=\"3\">Legenda (Imagem / Manutenção):
                    <table class=\"table table-bordered\">
                        <tr>
                            <td class=\"tr-orange-color\"> abaixo de 15%</td>
                            <td class=\"tr-red-color\"> abaixo de 10%</td>
                        </tr>
                    </table>
                </td>
                <td colspan=\"3\">
                    Cadastar nova impressora:
                    <br>
                    <a href=\"{{ path('dti_printers_novo') }}\" title=\"Nova Impressora\"
                       class=\"btn btn-md btn-primary\">
                        <i class=\"glyphicon glyphicon-new-window\"></i>
                    </a></td>
            </tr>
            <tr>
                <td colspan=\"9\">Obs.: a data da última troca está relacionada
                    a data registrada no dispositivo e pode não corresponder com a realidade.</td>
            </tr>
            <tr><td colspan=\"9\"></td></tr>
        </tfoot>
</table>
</div>
</div>

<script>
    setTimeout(function(){
        window.location.reload(1);
    }, 300000);
</script>

{% endblock %}", "dti/printers/status.html.twig", "/var/www/omnia/templates/dti/printers/status.html.twig");
    }
}
