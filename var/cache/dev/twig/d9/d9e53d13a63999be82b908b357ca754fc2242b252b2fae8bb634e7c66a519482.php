<?php

/* emails/voteconfirm.html.twig */
class __TwigTemplate_b2f4510cf17459c574e9a52607bc7ca13dd1a19b2346e737b7dda2aa7c045337 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/voteconfirm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/voteconfirm.html.twig"));

        // line 1
        echo "<div style=\"border: black ridge 3px; width: 600px; height:300px;text-align: center; font-family: Arial; position:relative;\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new Twig_Error_Runtime('Variable "img_src" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" width=\"128px\" height=\"auto\" float=\"left\">
    <h3>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["pleito"]) || array_key_exists("pleito", $context) ? $context["pleito"] : (function () { throw new Twig_Error_Runtime('Variable "pleito" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h3>
    <h2>COMPROVANTE DE VOTAÇÃO</h2>
    <h3>DATA: ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datapleito"]) || array_key_exists("datapleito", $context) ? $context["datapleito"] : (function () { throw new Twig_Error_Runtime('Variable "datapleito" does not exist.', 5, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "</h3>
    <h3>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["eleitor"]) || array_key_exists("eleitor", $context) ? $context["eleitor"] : (function () { throw new Twig_Error_Runtime('Variable "eleitor" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h3>
    <h4>Matrícula: ";
        // line 7
        echo twig_escape_filter($this->env, sprintf((isset($context["matricula"]) || array_key_exists("matricula", $context) ? $context["matricula"] : (function () { throw new Twig_Error_Runtime('Variable "matricula" does not exist.', 7, $this->source); })()), "%06d"), "html", null, true);
        echo "</h4>
    <h5>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["chave"]) || array_key_exists("chave", $context) ? $context["chave"] : (function () { throw new Twig_Error_Runtime('Variable "chave" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h5>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/voteconfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"border: black ridge 3px; width: 600px; height:300px;text-align: center; font-family: Arial; position:relative;\">
    <img src=\"{{ img_src }}\" width=\"128px\" height=\"auto\" float=\"left\">
    <h3>{{ pleito }}</h3>
    <h2>COMPROVANTE DE VOTAÇÃO</h2>
    <h3>DATA: {{ datapleito|date('d/m/Y') }}</h3>
    <h3>{{ eleitor }}</h3>
    <h4>Matrícula: {{ matricula|format(\"%06d\") }}</h4>
    <h5>{{ chave }}</h5>
</div>", "emails/voteconfirm.html.twig", "/home/francisco/Projetos/omnia/templates/emails/voteconfirm.html.twig");
    }
}
