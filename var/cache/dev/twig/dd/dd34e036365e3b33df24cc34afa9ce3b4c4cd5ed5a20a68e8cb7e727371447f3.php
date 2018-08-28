<?php

/* base.html.twig */
class __TwigTemplate_133dddd8519b932d75e22152da1f4a57adc4a73b680002dcc4435e08591d3165 extends Twig_Template
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
        // line 54
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
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_geral");
        echo "\" class=\"navbar-brand\" title=\"Home\">
                        <i class=\"glyphicon glyphicon-home\"></i>
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-navbar-collapse-1\">
                    <ul class=\"nav navbar navbar-nav\">
                        ";
        // line 72
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->source); })()), "user", array()))) {
            // line 73
            echo "                            ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->source); })()), "user", array()), "roles", array()))) {
                // line 74
                echo "                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 80
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-reports");
                echo "\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 82
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
                // line 91
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_index");
                echo "\">Usuários</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 93
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-ato_index");
                echo "\">Tipos de Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 95
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_index");
                echo "\">Tipos de Processos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 97
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
                // line 106
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_ausencia_index");
                echo "\">Cadastro de Ausência</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 108
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_index");
                echo "\">Cadastro de Pessoal</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Impressoras
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 117
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_printers_status");
                echo "\">Status</a></li>
                                    </ul>
                                </li>
                            ";
            } elseif (twig_in_filter("ROLE_CGR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 120, $this->source); })()), "user", array()), "roles", array()))) {
                // line 121
                echo "                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 127
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-reports");
                echo "\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 129
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
                // line 138
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_index");
                echo "\">Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 140
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-ato_index");
                echo "\">Tipos de Atos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 142
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_tipo-de-processo_index");
                echo "\">Tipos de Processos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 144
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lotacao_index");
                echo "\">Especializadas (Lotações)</a></li>
                                    </ul>
                                </li>

                            ";
            } elseif (twig_in_filter("ROLE_CHESP", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 148
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 148, $this->source); })()), "user", array()), "roles", array()))) {
                // line 149
                echo "
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Relatórios
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 156
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_esp-reports");
                echo "\">Gráficos</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 158
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
                // line 167
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("esp_produtividade_ato_index");
                echo "\">Atos</a></li>
                                    </ul>
                                </li>

                            ";
            } elseif (twig_in_filter("ROLE_DAI", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 171
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 171, $this->source); })()), "user", array()), "roles", array()))) {
                // line 172
                echo "                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastro
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 178
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_ausencia_index");
                echo "\">Ausência</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 180
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_cadastro_index");
                echo "\">Pessoal</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Impressoras
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 189
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dti_printers_status");
                echo "\">Status</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 193
            echo "
                        ";
        }
        // line 195
        echo "                    </ul>

                        ";
        // line 197
        $this->displayBlock('header', $context, $blocks);
        // line 199
        echo "

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li role=\"presentation\">
                            ";
        // line 203
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 203, $this->source); })()), "user", array()))) {
            // line 204
            echo "                                <p class=\"navbar-text\" style=\"color: white\">
                                    <a href=\"";
            // line 205
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\" class=\"navbar-link\">
                                        ";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 206, $this->source); })()), "user", array()), "nome", array()), "html", null, true);
            echo "
                                    </a>
                                </p>
                            ";
        }
        // line 210
        echo "                        </li>
                        <li role=\"presentation\">
                            ";
        // line 212
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 213
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\" class=\"navbar-brand\"
                                   title=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-log-out\"></i>
                                </a>
                            ";
        } else {
            // line 218
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\"
                                   class=\"navbar-brand\"  title=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-user\"></i>
                                </a>
                            ";
        }
        // line 223
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
        // line 233
        $this->displayBlock('content', $context, $blocks);
        // line 235
        echo "            </div>
            </div>
         </div>
        </main>

        <footer class=\"navbar-default\">
        ";
        // line 241
        $this->displayBlock('footer', $context, $blocks);
        // line 253
        echo "        </footer>

        ";
        // line 255
        $this->displayBlock('javascripts', $context, $blocks);
        // line 273
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
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/app.css"), "html", null, true);
        echo "\">

            <style>
                .watermark{
                    background-image: url(";
        // line 33
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

    // line 197
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 198
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 234
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 242
        echo "            <div class=\"container-fluid\">
                <div class=\"container-fluid\" id=\"footer-container-img\" style=\"color: white\">
                <img alt=\"\" id=\"topo-img\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/logopgm.jpg"), "html", null, true);
        echo "\"
                     class=\"img-responsive\" float=\"left\">
                    <span class=\"pull-right footer-text-gray\">
                        © 2018 - PGM, Todos os direitos reservados<br>
                        Desenvolvido por Francisco Costa.
                    </span>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 256
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
            <script type=\"text/javascript\">
                var routeCidadesPorEstado = \"";
        // line 268
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dai_rh_get-cidades-por-estado");
        echo "\";
            </script>
            <script src=\"";
        // line 270
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
        return array (  581 => 270,  576 => 268,  562 => 256,  553 => 255,  534 => 244,  530 => 242,  521 => 241,  511 => 234,  502 => 233,  492 => 198,  483 => 197,  452 => 33,  445 => 29,  437 => 23,  428 => 22,  410 => 21,  386 => 5,  377 => 4,  365 => 273,  363 => 255,  359 => 253,  357 => 241,  349 => 235,  347 => 233,  335 => 223,  328 => 219,  323 => 218,  316 => 214,  311 => 213,  309 => 212,  305 => 210,  298 => 206,  294 => 205,  291 => 204,  289 => 203,  283 => 199,  281 => 197,  277 => 195,  273 => 193,  266 => 189,  254 => 180,  249 => 178,  241 => 172,  239 => 171,  232 => 167,  220 => 158,  215 => 156,  206 => 149,  204 => 148,  197 => 144,  192 => 142,  187 => 140,  182 => 138,  170 => 129,  165 => 127,  157 => 121,  155 => 120,  149 => 117,  137 => 108,  132 => 106,  120 => 97,  115 => 95,  110 => 93,  105 => 91,  93 => 82,  88 => 80,  80 => 74,  77 => 73,  75 => 72,  66 => 66,  52 => 54,  50 => 22,  46 => 21,  43 => 20,  41 => 4,  36 => 1,);
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
                                        <li><a href=\"{{ path('dai_rh_ausencia_index') }}\">Cadastro de Ausência</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path(\"dai_rh_cadastro_index\") }}\">Cadastro de Pessoal</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Impressoras
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('dti_printers_status') }}\">Status</a></li>
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

                            {% elseif 'ROLE_DAI' in app.user.roles %}
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Cadastro
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('dai_rh_ausencia_index') }}\">Ausência</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path(\"dai_rh_cadastro_index\") }}\">Pessoal</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Impressoras
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('dti_printers_status') }}\">Status</a></li>
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
                                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"navbar-brand\"
                                   title=\"{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}\">
                                    <i class=\"glyphicon glyphicon-log-out\"></i>
                                </a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\"
                                   class=\"navbar-brand\"  title=\"{{ 'layout.login'|trans({}, 'FOSUserBundle') }}\">
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

        <footer class=\"navbar-default\">
        {% block footer %}
            <div class=\"container-fluid\">
                <div class=\"container-fluid\" id=\"footer-container-img\" style=\"color: white\">
                <img alt=\"\" id=\"topo-img\" src=\"{{ asset('uploads/images/logopgm.jpg')}}\"
                     class=\"img-responsive\" float=\"left\">
                    <span class=\"pull-right footer-text-gray\">
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
            <script type=\"text/javascript\">
                var routeCidadesPorEstado = \"{{ path(\"dai_rh_get-cidades-por-estado\") }}\";
            </script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\templates\\base.html.twig");
    }
}
