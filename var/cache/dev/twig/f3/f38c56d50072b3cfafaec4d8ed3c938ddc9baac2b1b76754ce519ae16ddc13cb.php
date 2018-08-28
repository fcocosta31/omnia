<?php

/* dai/rh/cadastro/novo.html.twig */
class __TwigTemplate_f196056ea71b12622f8d875afc7163e7d255a4acc23ec310c490a5610f523853 extends Twig_Template
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
<div class=\"container\">
     <div class=\"row\">
         ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

         <div class=\"col-md-12 col-xs-12\">
             <div class=\"row\">
                 <div class=\"container-topo\">
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "classificacao", array()), 'row', array("label" => "Classificação"));
        echo "
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "cargo", array()), 'row', array("label" => "Cargo"));
        echo "
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "departamento", array()), 'row', array("label" => "Lotação"));
        echo "
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "cedido", array()), 'row', array("label" => "Cedido?"));
        echo "
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "orgao", array()), 'row', array("label" => "Órgão de Origem"));
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
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "matricula", array()), 'row', array("label" => "Matrícula"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "nome", array()), 'row', array("label" => "Nome"));
        echo "
                         </div>
                         <div class=\"col-md-5 col-xs-12\">
                             ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "endereco", array()), 'row', array("label" => "Endereço"));
        echo "
                         </div>
                         <div class=\"col-md-1 col-xs-12\">
                             ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "numero", array()), 'row', array("label" => "Número"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "bairro", array()), 'row', array("label" => "Bairro"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "uf", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "cidade", array()), 'row', array("label" => "Cidade"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "cep", array()), 'row', array("label" => "Cep"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "fone", array()), 'row', array("label" => "Telefone"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "email", array()), 'row', array("label" => "E-mail"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "estadocivil", array()), 'row', array("label" => "Estado Civil"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "datanascimento", array()), 'row', array("label" => "Data de Nascimento"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "ufnatu", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "naturalidade", array()), 'row', array("label" => "Naturalidade"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "sexo", array()), 'row', array("label" => "Sexo"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), "mae", array()), 'row', array("label" => "Mãe"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                             ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), "pai", array()), 'row', array("label" => "Pai"));
        echo "
                         </div>
                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"documentospessoais\">
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "cpf", array()), 'row', array("label" => "CPF nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "rg", array()), 'row', array("label" => "RG nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), "orgaoemissor", array()), 'row', array("label" => "Órgão emissor"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->source); })()), "ufrg", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "dataemissao", array()), 'row', array("label" => "Data emissão"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->source); })()), "cnh", array()), 'row', array("label" => "CNH nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "categoria", array()), 'row', array("label" => "Categoria"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), "pispasep", array()), 'row', array("label" => "PIS/Pasep nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->source); })()), "oab", array()), 'row', array("label" => "OAB nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "ctps", array()), 'row', array("label" => "CTPS nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->source); })()), "seriectps", array()), 'row', array("label" => "Série"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "certmil", array()), 'row', array("label" => "Certificado Militar"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), "seriecertmil", array()), 'row', array("label" => "Série"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->source); })()), "titulo", array()), 'row', array("label" => "Título de Eleitor"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->source); })()), "secao", array()), 'row', array("label" => "Seção"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->source); })()), "zona", array()), 'row', array("label" => "Zona"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->source); })()), "ufeleitor", array()), 'row', array("label" => "UF"));
        echo "
                         </div>

                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"dadoscomplemento\">
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->source); })()), "grauinstrucao", array()), 'row', array("label" => "Grau de Instrução"));
        echo "
                         </div>
                         <div class=\"col-md-7 col-xs-12\">
                             ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->source); })()), "especializacoes", array()), 'row', array("label" => "Especializações"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 162, $this->source); })()), "dataposse", array()), 'row', array("label" => "Data da Posse"));
        echo "
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Dados Bancários</h4>
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 168, $this->source); })()), "banco", array()), 'row', array("label" => "Banco"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 171, $this->source); })()), "agencia", array()), 'row', array("label" => "Agência"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 174, $this->source); })()), "conta", array()), 'row', array("label" => "Conta"));
        echo "
                         </div>
                     </div>

                     <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"arquivos\">
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Enviar Arquivos</h4>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->source); })()), "files", array()), 'row', array("label" => "Arquivos"));
        echo "
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <br><br>
                             <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\" />
                         </div>
                     </div>
                 </div>
             </div>
             ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 192, $this->source); })()), 'form_end');
        echo "
         </div>
     </div>
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
        return array (  401 => 192,  389 => 183,  377 => 174,  371 => 171,  365 => 168,  356 => 162,  350 => 159,  344 => 156,  334 => 149,  328 => 146,  322 => 143,  316 => 140,  310 => 137,  304 => 134,  298 => 131,  292 => 128,  286 => 125,  280 => 122,  274 => 119,  268 => 116,  262 => 113,  256 => 110,  250 => 107,  244 => 104,  238 => 101,  229 => 95,  223 => 92,  217 => 89,  211 => 86,  205 => 83,  199 => 80,  193 => 77,  187 => 74,  181 => 71,  175 => 68,  169 => 65,  163 => 62,  157 => 59,  151 => 56,  145 => 53,  139 => 50,  133 => 47,  113 => 30,  107 => 27,  101 => 24,  95 => 21,  89 => 18,  80 => 12,  71 => 5,  62 => 4,  45 => 2,  15 => 1,);
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
<div class=\"container\">
     <div class=\"row\">
         {{ form_start(form) }}

         <div class=\"col-md-12 col-xs-12\">
             <div class=\"row\">
                 <div class=\"container-topo\">
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.classificacao, {'label':'Classificação'}) }}
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.cargo, {'label':'Cargo'}) }}
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
                         {{ form_row(form.departamento, {'label':'Lotação'}) }}
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.cedido, {'label':'Cedido?'}) }}
                     </div>
                     <div class=\"col-md-3 col-xs-12\">
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
                         <div class=\"col-md-5 col-xs-12\">
                             {{ form_row(form.endereco, {'label':'Endereço'}) }}
                         </div>
                         <div class=\"col-md-1 col-xs-12\">
                             {{ form_row(form.numero, {'label':'Número'}) }}
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
                         <div class=\"col-md-7 col-xs-12\">
                             {{ form_row(form.especializacoes, {'label':'Especializações'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             {{ form_row(form.dataposse, {'label':'Data da Posse'}) }}
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
                         <div class=\"col-md-12 col-xs-12\">
                             <br><br>
                             <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\" />
                         </div>
                     </div>
                 </div>
             </div>
             {{ form_end(form) }}
         </div>
     </div>
</div>
{% endblock %}
", "dai/rh/cadastro/novo.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\dai\\rh\\cadastro\\novo.html.twig");
    }
}
