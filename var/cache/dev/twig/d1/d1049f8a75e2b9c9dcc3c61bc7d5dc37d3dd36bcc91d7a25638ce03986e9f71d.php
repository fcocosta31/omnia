<?php

/* dai/rh/cadastro/novo.html.twig */
class __TwigTemplate_fa683cd8a7746fca3c28ae38c5a15cfe737317bf69c0484e77a78dab70a1bbfd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dai/rh/cadastro/novo.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dai/rh/cadastro/novo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dai/rh/cadastro/novo.html.twig"));

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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"fundo-topo-menu\">
    Cadastro de Pessoal
</div>
<br>

<div class=\"container-fluid\">
     <div class=\"row\">

         <div class=\"col-md-2 col-xs-12\">
             <h4>Cadastrar Novo(a)</h4>

             <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_classificacao_index");
        echo "\"
                class=\"btn btn-success btn-block\">Situação</a>
             <br>
             <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_listar_cargos");
        echo "\"
                class=\"btn btn-info btn-block\">Cargo</a>
             <br>
             <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_listar_orgaos");
        echo "\"
                class=\"btn btn-warning btn-block\">Órgão</a>
             <br>
             <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_listar_estadocivis");
        echo "\"
                class=\"btn btn-primary btn-block\">Estado Civil</a>
             <br>
             <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_listar_escolaridades");
        echo "\"
                class=\"btn btn-danger btn-block\">Escolaridade</a>

         </div>

         <div class=\"col-md-10 col-xs-12\">

         ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        echo "

             <div class=\"row\">
                 <div class=\"container-topo\">
                     <div class=\"row\">
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "classificacao", array()), 'row', array("label" => "Situação"));
        echo "
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "cargo", array()), 'row', array("label" => "Cargo"));
        echo "
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "departamento", array()), 'row', array("label" => "Lotação"));
        echo "
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "cedido", array()), 'row', array("label" => "Cedido?"));
        echo "
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "orgao", array()), 'row', array("label" => "Órgão de Origem"));
        echo "
                     </div>
                     </div>
                 </div>

             <div>
                 <!-- Nav tabs -->
                 <ul class=\"nav nav-tabs\" role=\"tablist\">
                     <li role=\"presentation\" class=\"active\"><a href=\"#dadospessoais\" class=\"tabs-color\" aria-controls=\"dadospessoais\" role=\"tab\" data-toggle=\"tab\">Dados Pessoais</a></li>
                     <li role=\"presentation\"><a href=\"#documentospessoais\" class=\"tabs-color\" aria-controls=\"documentospessoais\" role=\"tab\" data-toggle=\"tab\">Documentos Pessoais</a></li>
                     <li role=\"presentation\"><a href=\"#dadoscomplemento\" class=\"tabs-color\" aria-controls=\"dadoscomplemento\" role=\"tab\" data-toggle=\"tab\">Dados Complementares</a></li>
                     <li role=\"presentation\"><a href=\"#arquivos\" class=\"tabs-color\" aria-controls=\"arquivos\" role=\"tab\" data-toggle=\"tab\">Arquivos</a></li>
                 </ul>

                 <div class=\"tab-content\">

                     <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"dadospessoais\">
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "matricula", array()), 'row', array("label" => "Matrícula"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "nome", array()), 'row', array("label" => "Nome"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "endereco", array()), 'row', array("label" => "Endereço"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "numero", array()), 'row', array("label" => "Nº"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "bairro", array()), 'row', array("label" => "Bairro"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "uf", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "cidade", array()), 'row', array("label" => "Cidade"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), "cep", array()), 'row', array("label" => "Cep"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), "fone", array()), 'row', array("label" => "Telefone"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "email", array()), 'row', array("label" => "E-mail"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "estadocivil", array()), 'row', array("label" => "Estado Civil"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "datanascimento", array()), 'row', array("label" => "Data de Nascimento"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), "ufnatu", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->source); })()), "naturalidade", array()), 'row', array("label" => "Naturalidade"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "sexo", array()), 'row', array("label" => "Sexo"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->source); })()), "mae", array()), 'row', array("label" => "Mãe"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "pai", array()), 'row', array("label" => "Pai"));
        echo "
                         </div>
                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"documentospessoais\">
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->source); })()), "cpf", array()), 'row', array("label" => "CPF nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "rg", array()), 'row', array("label" => "RG nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->source); })()), "orgaoemissor", array()), 'row', array("label" => "Órgão emissor"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "ufrg", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), "dataemissao", array()), 'row', array("label" => "Data emissão"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->source); })()), "cnh", array()), 'row', array("label" => "CNH nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->source); })()), "categoria", array()), 'row', array("label" => "Categoria"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->source); })()), "pispasep", array()), 'row', array("label" => "PIS/Pasep nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->source); })()), "oab", array()), 'row', array("label" => "OAB nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->source); })()), "ctps", array()), 'row', array("label" => "CTPS nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->source); })()), "seriectps", array()), 'row', array("label" => "Série"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->source); })()), "certmil", array()), 'row', array("label" => "Certificado Militar"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->source); })()), "seriecertmil", array()), 'row', array("label" => "Série"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 164, $this->source); })()), "titulo", array()), 'row', array("label" => "Título de Eleitor"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), "secao", array()), 'row', array("label" => "Seção"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->source); })()), "zona", array()), 'row', array("label" => "Zona"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 173, $this->source); })()), "ufeleitor", array()), 'row', array("label" => "UF"));
        echo "
                         </div>

                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"dadoscomplemento\">
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), "grauinstrucao", array()), 'row', array("label" => "Grau de Instrução"));
        echo "
                         </div>
                         <div class=\"col-md-9 col-xs-12\">
                             ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->source); })()), "especializacoes", array()), 'row', array("label" => "Especializações"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 186, $this->source); })()), "dataposse", array()), 'row', array("label" => "Data entrada em exercício"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 189, $this->source); })()), "duracao", array()), 'row', array("label" => "Tempo de duração (estágio, contrato)"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 192, $this->source); })()), "datatermino", array()), 'row', array("label" => "Data do Término (estágio, contrato)"));
        echo "
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Dados Bancários</h4>
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->source); })()), "banco", array()), 'row', array("label" => "Banco"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 201, $this->source); })()), "agencia", array()), 'row', array("label" => "Agência"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->source); })()), "conta", array()), 'row', array("label" => "Conta"));
        echo "
                         </div>
                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"arquivos\">
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Enviar Arquivos</h4>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 213, $this->source); })()), "files", array()), 'row', array("label" => "Arquivos"));
        echo "
                         </div>
                     </div>
                 </div>

             ";
        // line 218
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 218, $this->source); })()), 'form_end');
        echo "

             </div>
         </div>
     </div>
</div>
    <div class=\"row\">
        <div class=\"col-md-2 col-xs-4 col-md-offset-2\">
            <input class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"\$('form').submit()\" value=\"Salvar Cadastro\" />
        </div>
    </div>
    <br><br>
</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dai/rh/cadastro/novo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 218,  440 => 213,  428 => 204,  422 => 201,  416 => 198,  407 => 192,  401 => 189,  395 => 186,  389 => 183,  383 => 180,  373 => 173,  367 => 170,  361 => 167,  355 => 164,  349 => 161,  343 => 158,  337 => 155,  331 => 152,  325 => 149,  319 => 146,  313 => 143,  307 => 140,  301 => 137,  295 => 134,  289 => 131,  283 => 128,  277 => 125,  268 => 119,  262 => 116,  256 => 113,  250 => 110,  244 => 107,  238 => 104,  232 => 101,  226 => 98,  220 => 95,  214 => 92,  208 => 89,  202 => 86,  196 => 83,  190 => 80,  184 => 77,  178 => 74,  172 => 71,  151 => 53,  145 => 50,  139 => 47,  133 => 44,  127 => 41,  118 => 35,  108 => 28,  102 => 25,  96 => 22,  90 => 19,  84 => 16,  71 => 5,  62 => 4,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}
{% endblock %}
{% block content %}
<div class=\"fundo-topo-menu\">
    Cadastro de Pessoal
</div>
<br>

<div class=\"container-fluid\">
     <div class=\"row\">

         <div class=\"col-md-2 col-xs-12\">
             <h4>Cadastrar Novo(a)</h4>

             <a href=\"{{ path('dai_rh_classificacao_index') }}\"
                class=\"btn btn-success btn-block\">Situação</a>
             <br>
             <a href=\"{{ path('dai_rh_listar_cargos') }}\"
                class=\"btn btn-info btn-block\">Cargo</a>
             <br>
             <a href=\"{{ path('dai_rh_listar_orgaos') }}\"
                class=\"btn btn-warning btn-block\">Órgão</a>
             <br>
             <a href=\"{{ path('dai_rh_listar_estadocivis') }}\"
                class=\"btn btn-primary btn-block\">Estado Civil</a>
             <br>
             <a href=\"{{ path('dai_rh_listar_escolaridades') }}\"
                class=\"btn btn-danger btn-block\">Escolaridade</a>

         </div>

         <div class=\"col-md-10 col-xs-12\">

         {{ form_start(form) }}

             <div class=\"row\">
                 <div class=\"container-topo\">
                     <div class=\"row\">
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.classificacao, {'label':'Situação'}) }}
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         {{ form_row(form.cargo, {'label':'Cargo'}) }}
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         {{ form_row(form.departamento, {'label':'Lotação'}) }}
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.cedido, {'label':'Cedido?'}) }}
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.orgao, {'label':'Órgão de Origem'}) }}
                     </div>
                     </div>
                 </div>

             <div>
                 <!-- Nav tabs -->
                 <ul class=\"nav nav-tabs\" role=\"tablist\">
                     <li role=\"presentation\" class=\"active\"><a href=\"#dadospessoais\" class=\"tabs-color\" aria-controls=\"dadospessoais\" role=\"tab\" data-toggle=\"tab\">Dados Pessoais</a></li>
                     <li role=\"presentation\"><a href=\"#documentospessoais\" class=\"tabs-color\" aria-controls=\"documentospessoais\" role=\"tab\" data-toggle=\"tab\">Documentos Pessoais</a></li>
                     <li role=\"presentation\"><a href=\"#dadoscomplemento\" class=\"tabs-color\" aria-controls=\"dadoscomplemento\" role=\"tab\" data-toggle=\"tab\">Dados Complementares</a></li>
                     <li role=\"presentation\"><a href=\"#arquivos\" class=\"tabs-color\" aria-controls=\"arquivos\" role=\"tab\" data-toggle=\"tab\">Arquivos</a></li>
                 </ul>

                 <div class=\"tab-content\">

                     <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"dadospessoais\">
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.matricula, {'label':'Matrícula'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.nome, {'label':'Nome'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.endereco, {'label':'Endereço'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.numero, {'label':'Nº'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.bairro, {'label':'Bairro'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.uf, {'label':'UF'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.cidade, {'label':'Cidade'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.cep, {'label':'Cep'}) }}
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             {{ form_row(form.fone, {'label':'Telefone'}) }}
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             {{ form_row(form.email, {'label':'E-mail'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.estadocivil, {'label':'Estado Civil'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.datanascimento, {'label':'Data de Nascimento'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.ufnatu, {'label':'UF'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.naturalidade, {'label':'Naturalidade'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.sexo, {'label':'Sexo'}) }}
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             {{ form_row(form.mae, {'label':'Mãe'}) }}
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             {{ form_row(form.pai, {'label':'Pai'}) }}
                         </div>
                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"documentospessoais\">
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.cpf, {'label':'CPF nº'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.rg, {'label':'RG nº'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.orgaoemissor, {'label':'Órgão emissor'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.ufrg, {'label':'UF'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.dataemissao, {'label':'Data emissão'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.cnh, {'label':'CNH nº'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.categoria, {'label':'Categoria'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.pispasep, {'label':'PIS/Pasep nº'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.oab, {'label':'OAB nº'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.ctps, {'label':'CTPS nº'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.seriectps, {'label':'Série'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.certmil, {'label':'Certificado Militar'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.seriecertmil, {'label':'Série'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.titulo, {'label':'Título de Eleitor'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.secao, {'label':'Seção'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.zona, {'label':'Zona'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.ufeleitor, {'label':'UF'}) }}
                         </div>

                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"dadoscomplemento\">
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.grauinstrucao, {'label':'Grau de Instrução'}) }}
                         </div>
                         <div class=\"col-md-9 col-xs-12\">
                             {{ form_row(form.especializacoes, {'label':'Especializações'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.dataposse, {'label':'Data entrada em exercício'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.duracao, {'label':'Tempo de duração (estágio, contrato)'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.datatermino, {'label':'Data do Término (estágio, contrato)'}) }}
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Dados Bancários</h4>
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.banco, {'label':'Banco'}) }}
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             {{ form_row(form.agencia, {'label':'Agência'}) }}
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             {{ form_row(form.conta, {'label':'Conta'}) }}
                         </div>
                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"arquivos\">
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Enviar Arquivos</h4>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             {{ form_row(form.files, {'label':'Arquivos'}) }}
                         </div>
                     </div>
                 </div>

             {{ form_end(form) }}

             </div>
         </div>
     </div>
</div>
    <div class=\"row\">
        <div class=\"col-md-2 col-xs-4 col-md-offset-2\">
            <input class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"\$('form').submit()\" value=\"Salvar Cadastro\" />
        </div>
    </div>
    <br><br>
</div>
    {% endblock %}
", "dai/rh/cadastro/novo.html.twig", "/home/francisco/Projetos/omnia/templates/dai/rh/cadastro/novo.html.twig");
    }
}
