<?php

/* emails/termino-estagio.html.twig */
class __TwigTemplate_6ea48478811dd1f6aa4c4ab8d24ecb74b522cd6c90f61cabf2ecfc409e395706 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/termino-estagio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/termino-estagio.html.twig"));

        // line 1
        echo "<div style=\"border: black ridge 3px; width: 600px; height:300px;text-align: center; font-family: Arial; position:relative;\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new Twig_Error_Runtime('Variable "img_src" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" width=\"128px\" height=\"auto\" float=\"left\">
    <h3>Estagiários com estágio a vencer em ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["prazo"]) || array_key_exists("prazo", $context) ? $context["prazo"] : (function () { throw new Twig_Error_Runtime('Variable "prazo" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " dias</h3>

    <table border=\"2\" cellpadding=\"2\" cellspacing=\"2\">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Lotacao</th>
                <th>Termino</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estagiarios"]) || array_key_exists("estagiarios", $context) ? $context["estagiarios"] : (function () { throw new Twig_Error_Runtime('Variable "estagiarios" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                <tr>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, sprintf("%06d", twig_get_attribute($this->env, $this->source, $context["i"], "matricula", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nome", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "cargo", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lotacao", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "datatermino", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/termino-estagio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  56 => 17,  52 => 16,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"border: black ridge 3px; width: 600px; height:300px;text-align: center; font-family: Arial; position:relative;\">
    <img src=\"{{ img_src }}\" width=\"128px\" height=\"auto\" float=\"left\">
    <h3>Estagiários com estágio a vencer em {{ prazo }} dias</h3>

    <table border=\"2\" cellpadding=\"2\" cellspacing=\"2\">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Lotacao</th>
                <th>Termino</th>
            </tr>
        </thead>
        <tbody>
            {% for i in estagiarios %}
                <tr>
                    <td>{{ \"%06d\"|format(i.matricula) }}</td>
                    <td>{{ i.nome }}</td>
                    <td>{{ i.cargo }}</td>
                    <td>{{ i.lotacao }}</td>
                    <td>{{ i.datatermino|date('d/m/Y') }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

</div>
", "emails/termino-estagio.html.twig", "/home/francisco/Projetos/omnia/templates/emails/termino-estagio.html.twig");
    }
}
