<?php

/* esp/produtividade/reports/esp_partial.html.twig */
class __TwigTemplate_78607ad9bf208f724ac503fa1015b891ba105a7f584093feca6122a6d899e0c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_partial.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "esp/produtividade/reports/esp_partial.html.twig"));

        // line 1
        echo "<div class=\"container-fluid table-responsive\" id=\"div_img\">
<div class=\"col-md-12 col-xs-12\">
           <!-- <span><h4>Período de ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateini"]) || array_key_exists("dateini", $context) ? $context["dateini"] : (function () { throw new Twig_Error_Runtime('Variable "dateini" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datefim"]) || array_key_exists("datefim", $context) ? $context["datefim"] : (function () { throw new Twig_Error_Runtime('Variable "datefim" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["typefilter"]) || array_key_exists("typefilter", $context) ? $context["typefilter"] : (function () { throw new Twig_Error_Runtime('Variable "typefilter" does not exist.', 3, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["valuefilter"]) || array_key_exists("valuefilter", $context) ? $context["valuefilter"] : (function () { throw new Twig_Error_Runtime('Variable "valuefilter" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h4></span> -->
            <a href=\"#!\" title=\"Converter em imagem\" onclick=\"exportImageToClipBoard()\" class=\"pull-right\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/png-icon.png"), "html", null, true);
        echo "\" width=\"32\" height=\"auto\">
            </a>
</div>
<div class=\"col-md-12 col-xs-12\" id=\"div_chart\"></div>
<div class=\"row\"><br><br><p>...</p></div>
<div class=\"col-md-12 col-xs-12\" id=\"div_table\"></div>
<div class=\"row\"><br><br><p>...</p></div>
</div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">

    var imgData;

    ";
        // line 19
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcStart(array(0 => (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new Twig_Error_Runtime('Variable "chart" does not exist.', 19, $this->source); })()), 1 => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new Twig_Error_Runtime('Variable "table" does not exist.', 19, $this->source); })())), array(0 => "div_chart", 1 => "div_table"));
        echo "

    ";
        // line 21
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcEvent((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new Twig_Error_Runtime('Variable "chart" does not exist.', 21, $this->source); })()), "ready", "printPngChart");
        echo "

    function printPngChart() {
        imgData = ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new Twig_Error_Runtime('Variable "chart" does not exist.', 24, $this->source); })()), "name", array()), "html", null, true);
        echo ".getImageURI();
    };

    ";
        // line 27
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcEvent((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new Twig_Error_Runtime('Variable "chart" does not exist.', 27, $this->source); })()), "select", "getSelectionChart");
        echo "

    function getSelectionChart() {

        var selection = ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new Twig_Error_Runtime('Variable "chart" does not exist.', 31, $this->source); })()), "name", array()), "html", null, true);
        echo ".getSelection()[0].row;
        var valueselection = dataChartDiv_chart.getValue(selection, 0);
        var typefilter = \$(\"#esp_type_filter\").val();
        var valuefilter = \$(\"#esp_value_filter\").val();
        var dateinifilter = \$(\"#_dateini\").val();
        var datefimfilter = \$(\"#_datefim\").val();
        var url = \"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_list-acts");
        echo "\";

        onChartClickItem(url, typefilter, valuefilter, valueselection, dateinifilter, datefimfilter);

    };


    ";
        // line 44
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcEnd(array(0 => (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new Twig_Error_Runtime('Variable "chart" does not exist.', 44, $this->source); })()), 1 => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new Twig_Error_Runtime('Variable "table" does not exist.', 44, $this->source); })())));
        echo "

    function exportImageToClipBoard() {
        \$.ajax({
           type: \"POST\",
           url: \"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_export-image-chart");
        echo "\",
           data: {imageData:imgData},
           success: function (content) {
               \$(\"#div_img\").html(content);
           }
        });
    };

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "esp/produtividade/reports/esp_partial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  103 => 44,  93 => 37,  84 => 31,  77 => 27,  71 => 24,  65 => 21,  60 => 19,  43 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid table-responsive\" id=\"div_img\">
<div class=\"col-md-12 col-xs-12\">
           <!-- <span><h4>Período de {{ dateini|date('d/m/Y') }} a {{ datefim|date('d/m/Y') }} - {{ typefilter }}{{ valuefilter }}</h4></span> -->
            <a href=\"#!\" title=\"Converter em imagem\" onclick=\"exportImageToClipBoard()\" class=\"pull-right\">
                <img src=\"{{ asset('uploads/images/png-icon.png') }}\" width=\"32\" height=\"auto\">
            </a>
</div>
<div class=\"col-md-12 col-xs-12\" id=\"div_chart\"></div>
<div class=\"row\"><br><br><p>...</p></div>
<div class=\"col-md-12 col-xs-12\" id=\"div_table\"></div>
<div class=\"row\"><br><br><p>...</p></div>
</div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">

    var imgData;

    {{ gc_start([chart, table], ['div_chart', 'div_table']) }}

    {{ gc_event(chart, 'ready', 'printPngChart') }}

    function printPngChart() {
        imgData = {{ chart.name }}.getImageURI();
    };

    {{ gc_event(chart, 'select', 'getSelectionChart') }}

    function getSelectionChart() {

        var selection = {{ chart.name }}.getSelection()[0].row;
        var valueselection = dataChartDiv_chart.getValue(selection, 0);
        var typefilter = \$(\"#esp_type_filter\").val();
        var valuefilter = \$(\"#esp_value_filter\").val();
        var dateinifilter = \$(\"#_dateini\").val();
        var datefimfilter = \$(\"#_datefim\").val();
        var url = \"{{ path('esp_produtividade_list-acts') }}\";

        onChartClickItem(url, typefilter, valuefilter, valueselection, dateinifilter, datefimfilter);

    };


    {{ gc_end([chart, table]) }}

    function exportImageToClipBoard() {
        \$.ajax({
           type: \"POST\",
           url: \"{{ path('esp_produtividade_export-image-chart') }}\",
           data: {imageData:imgData},
           success: function (content) {
               \$(\"#div_img\").html(content);
           }
        });
    };

</script>
", "esp/produtividade/reports/esp_partial.html.twig", "D:\\projetos\\omnia\\templates\\esp\\produtividade\\reports\\esp_partial.html.twig");
    }
}
