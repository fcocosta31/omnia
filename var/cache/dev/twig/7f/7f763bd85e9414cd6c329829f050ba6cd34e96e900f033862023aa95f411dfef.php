<?php

/* base.html.twig */
class __TwigTemplate_b53ea85173d80b7d575f1a44196b1d24673711f173e336e4c289ae0d9194c971 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
        <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Menu Principal</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_geral");
        echo "\" class=\"navbar-brand\" title=\"Home\">
                        <i class=\"glyphicon glyphicon-home\"></i>
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-navbar-collapse-1\">
                    <ul class=\"nav navbar navbar-nav\">
                        ";
        // line 73
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->source); })()), "user", array()))) {
            // line 74
            echo "                            ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->source); })()), "user", array()), "roles", array()))) {
                // line 75
                echo "                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 81
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-reports");
                echo "\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-criticas");
                echo "\">Críticas</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 92
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_index");
                echo "\">Usuários</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 94
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-ato_index");
                echo "\">Tipos de Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 96
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_index");
                echo "\">Tipos de Processos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 98
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lotacao_index");
                echo "\">Especializadas (Lotações)</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pessoal
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 107
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_index");
                echo "\">Cadastros</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 109
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_ausencia_index");
                echo "\">Afastamentos</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Informática
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 118
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_printers_status");
                echo "\">Impressoras</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 120
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_equipamento_index");
                echo "\">Equipamentos</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Eleições
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 129
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_eleicao_pleito_index");
                echo "\">Pleito</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Miscelânea
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 138
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("params_index");
                echo "\">Parâmetros</a></li>
                                    </ul>
                                </li>

                            ";
            } elseif (twig_in_filter("ROLE_CGR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 142
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->source); })()), "user", array()), "roles", array()))) {
                // line 143
                echo "                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 149
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-reports");
                echo "\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 151
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-criticas");
                echo "\">Críticas</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 160
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_index");
                echo "\">Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 162
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-ato_index");
                echo "\">Tipos de Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 164
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_index");
                echo "\">Tipos de Processos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 166
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lotacao_index");
                echo "\">Especializadas (Lotações)</a></li>
                                    </ul>
                                </li>

                            ";
            } elseif (twig_in_filter("ROLE_CHESP", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 170
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 170, $this->source); })()), "user", array()), "roles", array()))) {
                // line 171
                echo "
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 178
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-reports");
                echo "\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 180
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-criticas");
                echo "\">Críticas</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 189
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_index");
                echo "\">Atos</a></li>
                                    </ul>
                                </li>

                            ";
            } elseif (twig_in_filter("ROLE_ESP", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 193
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 193, $this->source); })()), "user", array()), "roles", array()))) {
                // line 194
                echo "
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 201
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_index");
                echo "\">Atos</a></li>
                                    </ul>
                                </li>

                            ";
            } elseif (twig_in_filter("ROLE_DAI", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 205
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 205, $this->source); })()), "user", array()), "roles", array()))) {
                // line 206
                echo "                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pessoal
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 212
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_index");
                echo "\">Cadastros</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 214
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_ausencia_index");
                echo "\">Afastamentos</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 218
            echo "
                        ";
        }
        // line 220
        echo "                    </ul>

                        ";
        // line 222
        $this->displayBlock('header', $context, $blocks);
        // line 224
        echo "

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li role=\"presentation\">
                            ";
        // line 228
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 228, $this->source); })()), "user", array()))) {
            // line 229
            echo "                                <p class=\"navbar-text\" style=\"color: white\">
                                    <a href=\"";
            // line 230
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\" class=\"navbar-link\">
                                        ";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 231, $this->source); })()), "user", array()), "nome", array()), "html", null, true);
            echo "
                                    </a>
                                </p>
                            ";
        }
        // line 235
        echo "                        </li>
                        <li role=\"presentation\">
                            ";
        // line 237
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 238
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\" class=\"navbar-toggler-icon\"
                                   title=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-log-out\"></i>
                                </a>
                            ";
        } else {
            // line 243
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\"
                                   class=\"navbar-toggler-icon\"  title=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-user\"></i>
                                </a>
                            ";
        }
        // line 248
        echo "                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class=\"container-fluid\">
         <div class=\"row\">
            <div class=\"watermark\"></div>
            <div class=\"watermark-over\">
             <div class=\"container-fluid\">
            ";
        // line 258
        $this->displayBlock('content', $context, $blocks);
        // line 260
        echo "            </div>
            </div>
         </div>
        </main>

        <footer class=\"navbar-custom\">
        ";
        // line 266
        $this->displayBlock('footer', $context, $blocks);
        // line 278
        echo "        </footer>

        ";
        // line 280
        $this->displayBlock('javascripts', $context, $blocks);
        // line 300
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <!-- Mobile viewport optimized -->
            <meta name=\"viewport\"
                  content=\"width=device-width, initial-scale=1, maximum-scale=1\">

            <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />

            <meta name=\"keywords\" content=\"omnia\">
            <meta name=\"keywords\" content=\"aplicativos pgm\">
            <meta name=\"keywords\" content=\"pgm\">
            <meta name=\"keywords\" content=\"procuradoria geral do municipio\">
            <meta name=\"keywords\" content=\"municipio de teresina\">

            <link href=\"http://pgm.teresina.pi.gov.br/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Procuradoria Geral do Município - PGM";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "            <!-- Imports CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
                  crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/app.css"), "html", null, true);
        echo "\">

            <style>
                .watermark{
                    background-image: url(";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/water-mark2.jpg"), "html", null, true);
        echo ");
                    background-repeat: no-repeat;
                    background-position: center;
                    position: absolute;
                    top: 60px;
                    bottom: 60px;
                    width: 100%;
                    opacity: 0.04;
                    color: white;
                }
                .watermark-over{
                    color: #000000;
                    position: relative;
                    left: 0px;
                    right: 0px;
                    top: 0px;
                    bottom: 60px;
                }
            </style>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 223
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 258
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 259
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 266
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 267
        echo "            <div class=\"container-fluid\">
                <div class=\"container-fluid\" id=\"footer-container-img\" style=\"color: white\">
                <img alt=\"\" id=\"topo-img\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/logopgm.jpg"), "html", null, true);
        echo "\"
                     class=\"img-responsive\" float=\"left\">
                    <span class=\"pull-right footer-text-white\">
                        © 2018 - PGM, Todos os direitos reservados<br>
                        Desenvolvido por Francisco Costa.
                    </span>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 281
        echo "            <!-- Imports Scripts -->
            <script
                    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
                    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                    integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js\"></script>
            <script src=\"https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js\"></script>
            <script type=\"text/javascript\">
                var routeCidadesPorEstado = \"";
        // line 295
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_get-cidades-por-estado");
        echo "\";
            </script>
            <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 297,  615 => 295,  599 => 281,  590 => 280,  571 => 269,  567 => 267,  558 => 266,  548 => 259,  539 => 258,  529 => 223,  520 => 222,  489 => 34,  482 => 30,  473 => 23,  464 => 22,  446 => 21,  422 => 5,  413 => 4,  401 => 300,  399 => 280,  395 => 278,  393 => 266,  385 => 260,  383 => 258,  371 => 248,  364 => 244,  359 => 243,  352 => 239,  347 => 238,  345 => 237,  341 => 235,  334 => 231,  330 => 230,  327 => 229,  325 => 228,  319 => 224,  317 => 222,  313 => 220,  309 => 218,  302 => 214,  297 => 212,  289 => 206,  287 => 205,  280 => 201,  271 => 194,  269 => 193,  262 => 189,  250 => 180,  245 => 178,  236 => 171,  234 => 170,  227 => 166,  222 => 164,  217 => 162,  212 => 160,  200 => 151,  195 => 149,  187 => 143,  185 => 142,  178 => 138,  166 => 129,  154 => 120,  149 => 118,  137 => 109,  132 => 107,  120 => 98,  115 => 96,  110 => 94,  105 => 92,  93 => 83,  88 => 81,  80 => 75,  77 => 74,  75 => 73,  66 => 67,  52 => 55,  50 => 22,  46 => 21,  43 => 20,  41 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <!-- Mobile viewport optimized -->
            <meta name=\"viewport\"
                  content=\"width=device-width, initial-scale=1, maximum-scale=1\">

            <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />

            <meta name=\"keywords\" content=\"omnia\">
            <meta name=\"keywords\" content=\"aplicativos pgm\">
            <meta name=\"keywords\" content=\"pgm\">
            <meta name=\"keywords\" content=\"procuradoria geral do municipio\">
            <meta name=\"keywords\" content=\"municipio de teresina\">

            <link href=\"http://pgm.teresina.pi.gov.br/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\">

        {% endblock %}

        <title>{% block title %}Procuradoria Geral do Município - PGM{% endblock %}</title>
        {% block stylesheets %}
            <!-- Imports CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
                  crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('build/js/app.css') }}\">

            <style>
                .watermark{
                    background-image: url({{ asset('uploads/images/water-mark2.jpg') }});
                    background-repeat: no-repeat;
                    background-position: center;
                    position: absolute;
                    top: 60px;
                    bottom: 60px;
                    width: 100%;
                    opacity: 0.04;
                    color: white;
                }
                .watermark-over{
                    color: #000000;
                    position: relative;
                    left: 0px;
                    right: 0px;
                    top: 0px;
                    bottom: 60px;
                }
            </style>

        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Menu Principal</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a href=\"{{ path('index_geral') }}\" class=\"navbar-brand\" title=\"Home\">
                        <i class=\"glyphicon glyphicon-home\"></i>
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-navbar-collapse-1\">
                    <ul class=\"nav navbar navbar-nav\">
                        {% if app.user is not null %}
                            {% if 'ROLE_ADMIN' in app.user.roles %}
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"esp_produtividade_esp-reports\") }}\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_esp-criticas') }}\">Críticas</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('users_index') }}\">Usuários</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_tipo-de-ato_index') }}\">Tipos de Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_tipo-de-processo_index') }}\">Tipos de Processos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('lotacao_index') }}\">Especializadas (Lotações)</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pessoal
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"dai_rh_cadastro_index\") }}\">Cadastros</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('dai_rh_ausencia_index') }}\">Afastamentos</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Informática
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('dti_printers_status') }}\">Impressoras</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('dti_equipamento_index') }}\">Equipamentos</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Eleições
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('esp_eleicao_pleito_index') }}\">Pleito</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Miscelânea
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"params_index\") }}\">Parâmetros</a></li>
                                    </ul>
                                </li>

                            {% elseif 'ROLE_CGR' in app.user.roles %}
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"esp_produtividade_esp-reports\") }}\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_esp-criticas') }}\">Críticas</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('esp_produtividade_ato_index') }}\">Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_tipo-de-ato_index') }}\">Tipos de Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_tipo-de-processo_index') }}\">Tipos de Processos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('lotacao_index') }}\">Especializadas (Lotações)</a></li>
                                    </ul>
                                </li>

                            {% elseif 'ROLE_CHESP' in app.user.roles %}

                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"esp_produtividade_esp-reports\") }}\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('esp_produtividade_esp-criticas') }}\">Críticas</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('esp_produtividade_ato_index') }}\">Atos</a></li>
                                    </ul>
                                </li>

                            {% elseif 'ROLE_ESP' in app.user.roles %}

                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastros
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('esp_produtividade_ato_index') }}\">Atos</a></li>
                                    </ul>
                                </li>

                            {% elseif 'ROLE_DAI' in app.user.roles %}
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pessoal
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"dai_rh_cadastro_index\") }}\">Cadastros</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path('dai_rh_ausencia_index') }}\">Afastamentos</a></li>
                                    </ul>
                                </li>
                            {% endif %}

                        {% endif %}
                    </ul>

                        {% block header %}
                        {% endblock %}


                    <ul class=\"nav navbar-nav navbar-right\">
                        <li role=\"presentation\">
                            {% if app.user is not null %}
                                <p class=\"navbar-text\" style=\"color: white\">
                                    <a href=\"{{ path('fos_user_profile_show') }}\" class=\"navbar-link\">
                                        {{ app.user.nome }}
                                    </a>
                                </p>
                            {% endif %}
                        </li>
                        <li role=\"presentation\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"navbar-toggler-icon\"
                                   title=\"{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}\">
                                    <i class=\"glyphicon glyphicon-log-out\"></i>
                                </a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\"
                                   class=\"navbar-toggler-icon\"  title=\"{{ 'layout.login'|trans({}, 'FOSUserBundle') }}\">
                                    <i class=\"glyphicon glyphicon-user\"></i>
                                </a>
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class=\"container-fluid\">
         <div class=\"row\">
            <div class=\"watermark\"></div>
            <div class=\"watermark-over\">
             <div class=\"container-fluid\">
            {% block content %}
            {% endblock %}
            </div>
            </div>
         </div>
        </main>

        <footer class=\"navbar-custom\">
        {% block footer %}
            <div class=\"container-fluid\">
                <div class=\"container-fluid\" id=\"footer-container-img\" style=\"color: white\">
                <img alt=\"\" id=\"topo-img\" src=\"{{ asset('uploads/images/logopgm.jpg')}}\"
                     class=\"img-responsive\" float=\"left\">
                    <span class=\"pull-right footer-text-white\">
                        © 2018 - PGM, Todos os direitos reservados<br>
                        Desenvolvido por Francisco Costa.
                    </span>
                </div>
            </div>
        {% endblock %}
        </footer>

        {% block javascripts %}
            <!-- Imports Scripts -->
            <script
                    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
                    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                    integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js\"></script>
            <script src=\"https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js\"></script>
            <script type=\"text/javascript\">
                var routeCidadesPorEstado = \"{{ path(\"dai_rh_get-cidades-por-estado\") }}\";
            </script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/francisco/Projetos/omnia/templates/base.html.twig");
    }
}
