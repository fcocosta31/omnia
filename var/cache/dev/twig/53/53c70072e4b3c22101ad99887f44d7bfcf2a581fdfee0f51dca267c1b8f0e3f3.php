<?php

/* dai/rh/cadastro/editar.html.twig */
class __TwigTemplate_53ea18d621baca82515c84b7ab491074e4db129af01c1db286a11e5eaaec6a7c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dai/rh/cadastro/editar.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dai/rh/cadastro/editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dai/rh/cadastro/editar.html.twig"));

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

        // line 3
        echo "
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_geral");
        echo "\" class=\"navbar-brand\" title=\"Home\">
        <i class=\"glyphicon glyphicon-home\"></i>
    </a>

    <div class=\"fundo-topo-menu\">
        Editar Cadastro de Pessoal
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "<br>
<div class=\"container\">
     <div class=\"row\">
         ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
         <div class=\"col-md-12 col-xs-12\">
             <div class=\"row\">
                 <div class=\"container-topo\">
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "classificacao", array()), 'row', array("label" => "Tipo de Servidor"));
        echo "
                     </div>
                     <div class=\"col-md-4 col-xs-12\">
                         ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "departamento", array()), 'row', array("label" => "Lotação"));
        echo "
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "cedido", array()), 'row', array("label" => "Cedido?"));
        echo "
                     </div>
                     <div class=\"col-md-4 col-xs-12\">
                         ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "orgao", array()), 'row', array("label" => "Órgão de Origem"));
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
                         <div class=\"col-md-5 col-xs-12\">
                         ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "nome", array()), 'row', array("label" => "Nome"));
        echo "
                         </div>
                         <div class=\"col-md-5 col-xs-12\">
                         ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "endereco", array()), 'row', array("label" => "Endereço"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "numero", array()), 'row', array("label" => "Número"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                         ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "bairro", array()), 'row', array("label" => "Bairro"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "uf", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "cidade", array()), 'row', array("label" => "Cidade"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "cep", array()), 'row', array("label" => "Cep"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                         ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "fone", array()), 'row', array("label" => "Telefone"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                         ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "email", array()), 'row', array("label" => "E-mail"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                         ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "estadocivil", array()), 'row', array("label" => "Estado Civil"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "datanascimento", array()), 'row', array("label" => "Data de Nascimento"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "ufnatu", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "naturalidade", array()), 'row', array("label" => "Naturalidade"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                         ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "sexo", array()), 'row', array("label" => "Sexo"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                         ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "mae", array()), 'row', array("label" => "Mãe"));
        echo "
                         </div>
                         <div class=\"col-md-6 col-xs-12\">
                         ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "pai", array()), 'row', array("label" => "Pai"));
        echo "
                         </div>
                     </div>
                   <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"documentospessoais\">
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), "cpf", array()), 'row', array("label" => "CPF nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "rg", array()), 'row', array("label" => "RG nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "orgaoemissor", array()), 'row', array("label" => "Órgão emissor"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), "ufrg", array()), 'row', array("label" => "UF"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), "dataemissao", array()), 'row', array("label" => "Data emissão"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "cnh", array()), 'row', array("label" => "CNH nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "categoria", array()), 'row', array("label" => "Categoria"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->source); })()), "pispasep", array()), 'row', array("label" => "PIS/Pasep nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "oab", array()), 'row', array("label" => "OAB nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "ctps", array()), 'row', array("label" => "CTPS nº"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->source); })()), "seriectps", array()), 'row', array("label" => "Série"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), "certmil", array()), 'row', array("label" => "Certificado Militar"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), "seriecertmil", array()), 'row', array("label" => "Série"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "titulo", array()), 'row', array("label" => "Título de Eleitor"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "secao", array()), 'row', array("label" => "Seção"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->source); })()), "zona", array()), 'row', array("label" => "Zona"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "ufeleitor", array()), 'row', array("label" => "UF"));
        echo "
                         </div>

                     </div>

                   <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"dadoscomplemento\">
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->source); })()), "grauinstrucao", array()), 'row', array("label" => "Grau de Instrução"));
        echo "
                         </div>
                         <div class=\"col-md-7 col-xs-12\">
                             ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->source); })()), "especializacoes", array()), 'row', array("label" => "Especializações"));
        echo "
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
                             ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 160, $this->source); })()), "dataposse", array()), 'row', array("label" => "Data da Posse"));
        echo "
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Dados Bancários</h4>
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->source); })()), "banco", array()), 'row', array("label" => "Banco"));
        echo "
                         </div>
                         <div class=\"col-md-3 col-xs-12\">
                             ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 169, $this->source); })()), "agencia", array()), 'row', array("label" => "Agência"));
        echo "
                         </div>
                         <div class=\"col-md-4 col-xs-12\">
                             ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->source); })()), "conta", array()), 'row', array("label" => "Conta"));
        echo "
                         </div>
                     </div>

                   <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"arquivos\">
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Enviar Arquivos</h4>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 181, $this->source); })()), "files", array()), 'row', array("label" => "Arquivos"));
        echo "
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <h4>Arquivos anexados</h4>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <table class=\"table table-striped\">
                                 <thead>
                                 <tr>
                                     <th>Arquivo</th>
                                     <th>#</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 195, $this->source); })()), "vars", array()), "data", array()), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 196
            echo "                                     <tr>
                                         <td>
                                             <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_documento_download", array("filename" => twig_get_attribute($this->env, $this->source, $context["file"], "path", array()))), "html", null, true);
            echo "\">
                                                 ";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", array()), "html", null, true);
            echo "
                                             </a>
                                         </td>
                                         <td>
                                         <td><a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_documento_deletar", array("id" => twig_get_attribute($this->env, $this->source, $context["file"], "id", array()), "idemp" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 203, $this->source); })()), "vars", array()), "data", array()), "id", array()))), "html", null, true);
            echo "\">Deletar</a></td>
                                         </td>
                                     </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                                 </tbody>
                             </table>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <input class=\"btn btn-primary\" type=\"submit\" value=\"Enviar\" />
                         </div>
                     </div>
                 </div>
           </div>
             ";
        // line 216
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 216, $this->source); })()), 'form_end');
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
        return "dai/rh/cadastro/editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 216,  431 => 207,  421 => 203,  414 => 199,  410 => 198,  406 => 196,  402 => 195,  385 => 181,  373 => 172,  367 => 169,  361 => 166,  352 => 160,  346 => 157,  340 => 154,  330 => 147,  324 => 144,  318 => 141,  312 => 138,  306 => 135,  300 => 132,  294 => 129,  288 => 126,  282 => 123,  276 => 120,  270 => 117,  264 => 114,  258 => 111,  252 => 108,  246 => 105,  240 => 102,  234 => 99,  226 => 94,  220 => 91,  214 => 88,  208 => 85,  202 => 82,  196 => 79,  190 => 76,  184 => 73,  178 => 70,  172 => 67,  166 => 64,  160 => 61,  154 => 58,  148 => 55,  142 => 52,  136 => 49,  116 => 32,  110 => 29,  104 => 26,  98 => 23,  90 => 18,  85 => 15,  76 => 14,  57 => 4,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block header %}

    <a href=\"{{ path('index_geral') }}\" class=\"navbar-brand\" title=\"Home\">
        <i class=\"glyphicon glyphicon-home\"></i>
    </a>

    <div class=\"fundo-topo-menu\">
        Editar Cadastro de Pessoal
    </div>

{% endblock %}

{% block content %}
<br>
<div class=\"container\">
     <div class=\"row\">
         {{ form_start(form) }}
         <div class=\"col-md-12 col-xs-12\">
             <div class=\"row\">
                 <div class=\"container-topo\">
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.classificacao, {'label':'Tipo de Servidor'}) }}
                     </div>
                     <div class=\"col-md-4 col-xs-12\">
                         {{ form_row(form.departamento, {'label':'Lotação'}) }}
                     </div>
                     <div class=\"col-md-2 col-xs-12\">
                         {{ form_row(form.cedido, {'label':'Cedido?'}) }}
                     </div>
                     <div class=\"col-md-4 col-xs-12\">
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
                         <div class=\"col-md-5 col-xs-12\">
                         {{ form_row(form.nome, {'label':'Nome'}) }}
                         </div>
                         <div class=\"col-md-5 col-xs-12\">
                         {{ form_row(form.endereco, {'label':'Endereço'}) }}
                         </div>
                         <div class=\"col-md-2 col-xs-12\">
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
                             <h4>Arquivos anexados</h4>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
                             <table class=\"table table-striped\">
                                 <thead>
                                 <tr>
                                     <th>Arquivo</th>
                                     <th>#</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 {% for file in form.vars.data.files %}
                                     <tr>
                                         <td>
                                             <a href=\"{{ path('dai_rh_documento_download', {'filename':file.path}) }}\">
                                                 {{ file.name }}
                                             </a>
                                         </td>
                                         <td>
                                         <td><a href=\"{{ path('dai_rh_documento_deletar', {'id':file.id, 'idemp':form.vars.data.id}) }}\">Deletar</a></td>
                                         </td>
                                     </tr>
                                 {% endfor %}
                                 </tbody>
                             </table>
                         </div>
                         <div class=\"col-md-12 col-xs-12\">
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
", "dai/rh/cadastro/editar.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\dai\\rh\\cadastro\\editar.html.twig");
    }
}
