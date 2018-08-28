<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_ec79b27b08638ca5b6eadf86947296dca258e0e4eb87f43ad16d9de5c2f36d97 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"jumbotron col-md-4 col-xs-12 fundo-shadow\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                    ";
        // line 10
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" />
                    ";
        }
        // line 13
        echo "
                    <label for=\"username\" class=\"required\">Usuário:</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"user-addon\">
                            <i class=\"glyphicon glyphicon-user\"></i>
                        </span>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                    </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12\">
                    <label for=\"password\" class=\"required\">Senha:</label>
                    <div class=\"input-group\">

                        <span class=\"input-group-addon\" id=\"pwd-addon\">
                            <i class=\"glyphicon glyphicon-ok-sign\"></i>
                        </span>
                        <input type=\"password\" id=\"password\"
                               class=\"form-control\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                     </div>
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col-xs-12\">

                        <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        ";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                            <div class=\"red_color_font\" style=\"font-weight: bold\">
                                ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 48
        echo "                    </div>
                    <div class=\"row\"><br><br><br></div>
                    <div class=\"col-xs-12\">
                        <div class=\"form-group\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"form-group\">
                            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\">Cadastre-se</a><span> | </span>
                            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">Esqueceu a senha ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  112 => 56,  106 => 53,  99 => 48,  93 => 45,  90 => 44,  88 => 43,  84 => 42,  58 => 19,  50 => 13,  44 => 11,  42 => 10,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"jumbotron col-md-4 col-xs-12 fundo-shadow\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}

                    <label for=\"username\" class=\"required\">Usuário:</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"user-addon\">
                            <i class=\"glyphicon glyphicon-user\"></i>
                        </span>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                    </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12\">
                    <label for=\"password\" class=\"required\">Senha:</label>
                    <div class=\"input-group\">

                        <span class=\"input-group-addon\" id=\"pwd-addon\">
                            <i class=\"glyphicon glyphicon-ok-sign\"></i>
                        </span>
                        <input type=\"password\" id=\"password\"
                               class=\"form-control\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                     </div>
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col-xs-12\">

                        <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                        {% if error %}
                            <div class=\"red_color_font\" style=\"font-weight: bold\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"row\"><br><br><br></div>
                    <div class=\"col-xs-12\">
                        <div class=\"form-group\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                        </div>
                        <div class=\"form-group\">
                            <a href=\"{{ path('fos_user_registration_register') }}\">Cadastre-se</a><span> | </span>
                            <a href=\"{{ path('fos_user_resetting_request') }}\">Esqueceu a senha ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
", "@FOSUser/Security/login_content.html.twig", "C:\\Bitnami\\wampstack-7.0.28-0\\frameworks\\omnia\\src\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
