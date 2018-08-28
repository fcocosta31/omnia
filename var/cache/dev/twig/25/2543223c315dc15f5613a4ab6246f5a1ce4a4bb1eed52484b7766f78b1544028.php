<?php

/* esp/produtividade/reports/index.html.twig */
class __TwigTemplate_941c8875e95557d7f8235f1145a4c8bacd93aff04796c428642d833bcc76ac16 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "esp/produtividade/reports/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/index.html.twig"));

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
        echo "
    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-md-2 col-xs-12 noPrint\">

                <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-filter-reports");
        echo "\" method=\"post\"
                    id=\"esp_form_filter\">
                    <div class=\"left-panel-title\"><h4>Filtros:</h4></div>
                    <br>
                    <label>Início: </label>
                    <input type=\"date\" class=\"form-control\" id=\"_dateini\" name=\"_dateini\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["dateini"]) || array_key_exists("dateini", $context) ? $context["dateini"] : (function () { throw new Twig_Error_Runtime('Variable "dateini" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
                    <br>
                    <label>Fim: </label>
                    <input type=\"date\" class=\"form-control\" id=\"_datefim\" name=\"_datefim\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["datefim"]) || array_key_exists("datefim", $context) ? $context["datefim"] : (function () { throw new Twig_Error_Runtime('Variable "datefim" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
                    <br/>
                    <label>Tipo de Filtro: </label>
                    <select name=\"_filterType\" id=\"esp_type_filter\"
                            base-url=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-filters");
        echo "\"
                    class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        <option value=\"1\">Especializada</option>
                        <option value=\"2\">Procurador</option>
                        <option value=\"3\">Tipo de Ato</option>
                    </select>
                    <br>
                    <label>Filtrar por: </label>
                    <select name=\"_filterValue\" id=\"esp_value_filter\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                    </select>
                    <br/>
                    <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Enviar\">
                    <input type=\"hidden\" name=\"_download-report\" value=\"no\" id=\"_download-report\">
                    <br/>
                </form>

            </div>

            <div class=\"col-md-10 col-xs-12\" id=\"div_partial\">
                ";
        // line 45
        echo twig_include($this->env, $context, "esp/produtividade/reports/esp_partial.html.twig");
        echo "
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        function onChartClickItem(urlaction, typefilter, valuefilter, valueselection, dateinifilter, datefimfilter){

            var datacall = {
                '_typefilter':typefilter,
                '_valuefilter':valuefilter,
                '_valueselection':valueselection,
                '_dateinifilter':dateinifilter,
                '_datefimfilter':datefimfilter
            };

            \$.ajax({
                type: \"POST\",
                url: urlaction,
                dataType: \"json\",
                data: datacall,
                success: function (response) {
                    \$(\"#div_partial\").html(response);
                },
                error: function(XmlHttpRequest,textStatus, errorThrown){

                    alert(\"Escolha um item do Filtro! \");
                }
            });

        };

        function turnBackToListActs(urlaction) {

            \$.ajax({
                type: \"GET\",
                url: urlaction,
                dataType: \"json\",
                success: function (response) {
                    \$(\"#div_partial\").html(response);
                },
                error: function(XmlHttpRequest,textStatus, errorThrown){

                    alert(\"Falha ao carregar! \");
                }
            });
        }

        function viewDetailsAct(urlaction){

            \$.ajax({
                type: \"GET\",
                url: urlaction,
                dataType: \"json\",
                success: function (response) {
                    \$(\"#div_partial\").html(response);
                },
                error: function(XmlHttpRequest,textStatus, errorThrown){
                    alert(textStatus+\" : \"+errorThrown);
                }
            });
        }

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/reports/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 45,  100 => 24,  93 => 20,  87 => 17,  79 => 12,  71 => 6,  62 => 5,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}

{% block content %}

    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-md-2 col-xs-12 noPrint\">

                <form action=\"{{ path('esp_produtividade_esp-filter-reports') }}\" method=\"post\"
                    id=\"esp_form_filter\">
                    <div class=\"left-panel-title\"><h4>Filtros:</h4></div>
                    <br>
                    <label>Início: </label>
                    <input type=\"date\" class=\"form-control\" id=\"_dateini\" name=\"_dateini\" value=\"{{ dateini }}\">
                    <br>
                    <label>Fim: </label>
                    <input type=\"date\" class=\"form-control\" id=\"_datefim\" name=\"_datefim\" value=\"{{ datefim }}\">
                    <br/>
                    <label>Tipo de Filtro: </label>
                    <select name=\"_filterType\" id=\"esp_type_filter\"
                            base-url=\"{{ path('esp_produtividade_esp-filters') }}\"
                    class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        <option value=\"1\">Especializada</option>
                        <option value=\"2\">Procurador</option>
                        <option value=\"3\">Tipo de Ato</option>
                    </select>
                    <br>
                    <label>Filtrar por: </label>
                    <select name=\"_filterValue\" id=\"esp_value_filter\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                    </select>
                    <br/>
                    <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Enviar\">
                    <input type=\"hidden\" name=\"_download-report\" value=\"no\" id=\"_download-report\">
                    <br/>
                </form>

            </div>

            <div class=\"col-md-10 col-xs-12\" id=\"div_partial\">
                {{ include('esp/produtividade/reports/esp_partial.html.twig') }}
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        function onChartClickItem(urlaction, typefilter, valuefilter, valueselection, dateinifilter, datefimfilter){

            var datacall = {
                '_typefilter':typefilter,
                '_valuefilter':valuefilter,
                '_valueselection':valueselection,
                '_dateinifilter':dateinifilter,
                '_datefimfilter':datefimfilter
            };

            \$.ajax({
                type: \"POST\",
                url: urlaction,
                dataType: \"json\",
                data: datacall,
                success: function (response) {
                    \$(\"#div_partial\").html(response);
                },
                error: function(XmlHttpRequest,textStatus, errorThrown){

                    alert(\"Escolha um item do Filtro! \");
                }
            });

        };

        function turnBackToListActs(urlaction) {

            \$.ajax({
                type: \"GET\",
                url: urlaction,
                dataType: \"json\",
                success: function (response) {
                    \$(\"#div_partial\").html(response);
                },
                error: function(XmlHttpRequest,textStatus, errorThrown){

                    alert(\"Falha ao carregar! \");
                }
            });
        }

        function viewDetailsAct(urlaction){

            \$.ajax({
                type: \"GET\",
                url: urlaction,
                dataType: \"json\",
                success: function (response) {
                    \$(\"#div_partial\").html(response);
                },
                error: function(XmlHttpRequest,textStatus, errorThrown){
                    alert(textStatus+\" : \"+errorThrown);
                }
            });
        }

    </script>

{% endblock %}", "esp/produtividade/reports/index.html.twig", "/home/francisco/omnia/templates/esp/produtividade/reports/index.html.twig");
    }
}
