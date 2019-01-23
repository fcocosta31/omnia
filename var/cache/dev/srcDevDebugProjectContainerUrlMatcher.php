<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // index_geral
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\IndexController::index',  '_route' => 'index_geral',);
        }

        // index_geral_root
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\IndexController::indexRoot',  '_route' => 'index_geral_root',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index_geral_root;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index_geral_root'));
            }

            return $ret;
        }
        not_index_geral_root:

        if (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/lotacao')) {
                // lotacao_index
                if ('/lotacao' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\LotacaoController::index',  '_route' => 'lotacao_index',);
                }

                // lotacao_novo
                if ('/lotacao/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\LotacaoController::novo',  '_route' => 'lotacao_novo',);
                }

                // lotacao_editar
                if (0 === strpos($pathinfo, '/lotacao/editar') && preg_match('#^/lotacao/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lotacao_editar')), array (  '_controller' => 'App\\Controller\\LotacaoController::editar',));
                }

                // lotacao_deletar
                if (0 === strpos($pathinfo, '/lotacao/deletar') && preg_match('#^/lotacao/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lotacao_deletar')), array (  '_controller' => 'App\\Controller\\LotacaoController::deletar',));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/params')) {
            // params_index
            if ('/params' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\NotifyParamsController::index',  '_route' => 'params_index',);
            }

            // params_novo
            if ('/params/novo' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\NotifyParamsController::novo',  '_route' => 'params_novo',);
            }

            // params_editar
            if (0 === strpos($pathinfo, '/params/editar') && preg_match('#^/params/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'params_editar')), array (  '_controller' => 'App\\Controller\\NotifyParamsController::editar',));
            }

            // params_deletar
            if (0 === strpos($pathinfo, '/params/deletar') && preg_match('#^/params/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'params_deletar')), array (  '_controller' => 'App\\Controller\\NotifyParamsController::deletar',));
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        // users_index
        if ('/users' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'users_index',);
        }

        if (0 === strpos($pathinfo, '/user-profile')) {
            // app_user_show
            if (preg_match('#^/user\\-profile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_show')), array (  '_controller' => 'App\\Controller\\UserController::show',));
            }

            // app_user_edit
            if (0 === strpos($pathinfo, '/user-profile/edit') && preg_match('#^/user\\-profile/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_edit')), array (  '_controller' => 'App\\Controller\\UserController::edit',));
            }

            // fos_user_profile_show_id
            if (preg_match('#^/user\\-profile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show_id')), array (  '_controller' => 'App:UserController:show',));
            }

            // fos_user_profile_edit_id
            if (0 === strpos($pathinfo, '/user-profile/edit') && preg_match('#^/user\\-profile/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit_id')), array (  '_controller' => 'App:UserController:edit',));
            }

        }

        elseif (0 === strpos($pathinfo, '/dai/rh')) {
            if (0 === strpos($pathinfo, '/dai/rh/ausencia')) {
                // dai_rh_ausencia_novo
                if ('/dai/rh/ausencia/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::novo',  '_route' => 'dai_rh_ausencia_novo',);
                }

                // dai_rh_ausencia_editar
                if (0 === strpos($pathinfo, '/dai/rh/ausencia/editar') && preg_match('#^/dai/rh/ausencia/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_ausencia_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::editar',));
                }

                // dai_rh_ausencia_deletar
                if (0 === strpos($pathinfo, '/dai/rh/ausencia/deletar') && preg_match('#^/dai/rh/ausencia/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_ausencia_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::deletar',));
                }

                // dai_rh_ausencia_index
                if ('/dai/rh/ausencia' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::index',  '_route' => 'dai_rh_ausencia_index',);
                }

            }

            elseif (0 === strpos($pathinfo, '/dai/rh/c')) {
                if (0 === strpos($pathinfo, '/dai/rh/cargo')) {
                    // dai_rh_cargo_novo
                    if ('/dai/rh/cargo/novo' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\dai\\rh\\CargoController::novo',  '_route' => 'dai_rh_cargo_novo',);
                    }

                    // dai_rh_cargo_editar
                    if (0 === strpos($pathinfo, '/dai/rh/cargo/editar') && preg_match('#^/dai/rh/cargo/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_cargo_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\CargoController::editar',));
                    }

                    // dai_rh_cargo_deletar
                    if (0 === strpos($pathinfo, '/dai/rh/cargo/deletar') && preg_match('#^/dai/rh/cargo/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_cargo_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\CargoController::deletar',));
                    }

                    // dai_rh_listar_cargos
                    if ('/dai/rh/cargo' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\dai\\rh\\CargoController::index',  '_route' => 'dai_rh_listar_cargos',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/dai/rh/cadastro')) {
                    // dai_rh_cadastro_novo
                    if ('/dai/rh/cadastro/novo' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::novo',  '_route' => 'dai_rh_cadastro_novo',);
                    }

                    // dai_rh_cadastro_editar
                    if (0 === strpos($pathinfo, '/dai/rh/cadastro/editar') && preg_match('#^/dai/rh/cadastro/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_cadastro_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::editar',));
                    }

                    // dai_rh_cadastro_deletar
                    if (0 === strpos($pathinfo, '/dai/rh/cadastro/deletar') && preg_match('#^/dai/rh/cadastro/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_cadastro_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::deletar',));
                    }

                    // dai_rh_cadastro_index
                    if ('/dai/rh/cadastro' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::index',  '_route' => 'dai_rh_cadastro_index',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/dai/rh/classificacao')) {
                    // dai_rh_classificacao_novo
                    if ('/dai/rh/classificacao/novo' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::novo',  '_route' => 'dai_rh_classificacao_novo',);
                    }

                    // dai_rh_classificacao_editar
                    if (0 === strpos($pathinfo, '/dai/rh/classificacao/editar') && preg_match('#^/dai/rh/classificacao/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_classificacao_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::editar',));
                    }

                    // dai_rh_classificacao_deletar
                    if (0 === strpos($pathinfo, '/dai/rh/classificacao/deletar') && preg_match('#^/dai/rh/classificacao/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_classificacao_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::deletar',));
                    }

                    // dai_rh_classificacao_index
                    if ('/dai/rh/classificacao' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::index',  '_route' => 'dai_rh_classificacao_index',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/dai/rh/departamento')) {
                // dai_rh_departamento_novo
                if ('/dai/rh/departamento/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::novo',  '_route' => 'dai_rh_departamento_novo',);
                }

                // dai_rh_departamento_editar
                if (0 === strpos($pathinfo, '/dai/rh/departamento/editar') && preg_match('#^/dai/rh/departamento/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_departamento_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::editar',));
                }

                // dai_rh_departamento_deletar
                if (0 === strpos($pathinfo, '/dai/rh/departamento/deletar') && preg_match('#^/dai/rh/departamento/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_departamento_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::deletar',));
                }

                // dai_rh_listar_departamentos
                if ('/dai/rh/departamento' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::index',  '_route' => 'dai_rh_listar_departamentos',);
                }

            }

            elseif (0 === strpos($pathinfo, '/dai/rh/documento')) {
                // dai_rh_documento_listar
                if (0 === strpos($pathinfo, '/dai/rh/documento/listar') && preg_match('#^/dai/rh/documento/listar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_documento_listar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\DocumentoController::listar',));
                }

                // dai_rh_documento_download
                if (0 === strpos($pathinfo, '/dai/rh/documento/download') && preg_match('#^/dai/rh/documento/download/(?P<filename>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_documento_download')), array (  '_controller' => 'App\\Controller\\dai\\rh\\DocumentoController::download',));
                }

                // dai_rh_documento_deletar
                if (0 === strpos($pathinfo, '/dai/rh/documento/deletar') && preg_match('#^/dai/rh/documento/deletar/(?P<id>[^/]++)/(?P<idemp>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_documento_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\DocumentoController::deletar',));
                }

            }

            // dai_rh_get-cidades-por-estado
            if ('/dai/rh/get-cidades-por-estado' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::listCidadesOfUfAction',  '_route' => 'dai_rh_get-cidades-por-estado',);
            }

            if (0 === strpos($pathinfo, '/dai/rh/escolaridade')) {
                // dai_rh_escolaridade_novo
                if ('/dai/rh/escolaridade/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::novo',  '_route' => 'dai_rh_escolaridade_novo',);
                }

                // dai_rh_escolaridade_editar
                if (0 === strpos($pathinfo, '/dai/rh/escolaridade/editar') && preg_match('#^/dai/rh/escolaridade/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_escolaridade_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::editar',));
                }

                // dai_rh_escolaridade_deletar
                if (0 === strpos($pathinfo, '/dai/rh/escolaridade/deletar') && preg_match('#^/dai/rh/escolaridade/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_escolaridade_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::deletar',));
                }

                // dai_rh_listar_escolaridades
                if ('/dai/rh/escolaridade' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::index',  '_route' => 'dai_rh_listar_escolaridades',);
                }

            }

            elseif (0 === strpos($pathinfo, '/dai/rh/estadocivil')) {
                // dai_rh_estadocivil_novo
                if ('/dai/rh/estadocivil/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::novo',  '_route' => 'dai_rh_estadocivil_novo',);
                }

                // dai_rh_estadocivil_editar
                if (0 === strpos($pathinfo, '/dai/rh/estadocivil/editar') && preg_match('#^/dai/rh/estadocivil/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_estadocivil_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::editar',));
                }

                // dai_rh_estadocivil_deletar
                if (0 === strpos($pathinfo, '/dai/rh/estadocivil/deletar') && preg_match('#^/dai/rh/estadocivil/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_estadocivil_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::deletar',));
                }

                // dai_rh_listar_estadocivis
                if ('/dai/rh/estadocivil' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::index',  '_route' => 'dai_rh_listar_estadocivis',);
                }

            }

            elseif (0 === strpos($pathinfo, '/dai/rh/orgao')) {
                // dai_rh_orgao_novo
                if ('/dai/rh/orgao/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::novo',  '_route' => 'dai_rh_orgao_novo',);
                }

                // dai_rh_orgao_editar
                if (0 === strpos($pathinfo, '/dai/rh/orgao/editar') && preg_match('#^/dai/rh/orgao/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_orgao_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::editar',));
                }

                // dai_rh_orgao_deletar
                if (0 === strpos($pathinfo, '/dai/rh/orgao/deletar') && preg_match('#^/dai/rh/orgao/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_orgao_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::deletar',));
                }

                // dai_rh_listar_orgaos
                if ('/dai/rh/orgao' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::index',  '_route' => 'dai_rh_listar_orgaos',);
                }

            }

            elseif (0 === strpos($pathinfo, '/dai/rh/tipoausencia')) {
                // dai_rh_tipoausencia_novo
                if ('/dai/rh/tipoausencia/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::novo',  '_route' => 'dai_rh_tipoausencia_novo',);
                }

                // dai_rh_tipoausencia_editar
                if (0 === strpos($pathinfo, '/dai/rh/tipoausencia/editar') && preg_match('#^/dai/rh/tipoausencia/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_tipoausencia_editar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::editar',));
                }

                // dai_rh_tipoausencia_deletar
                if (0 === strpos($pathinfo, '/dai/rh/tipoausencia/deletar') && preg_match('#^/dai/rh/tipoausencia/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dai_rh_tipoausencia_deletar')), array (  '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::deletar',));
                }

                // dai_rh_listar_tipoausencias
                if ('/dai/rh/tipoausencia' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::index',  '_route' => 'dai_rh_listar_tipoausencias',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/dti')) {
            if (0 === strpos($pathinfo, '/dti/equipamento')) {
                // dti_equipamento_index
                if ('/dti/equipamento' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dti\\equipamento\\EquipamentoController::index',  '_route' => 'dti_equipamento_index',);
                }

                // dti_equipamento_novo
                if ('/dti/equipamento/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dti\\equipamento\\EquipamentoController::novo',  '_route' => 'dti_equipamento_novo',);
                }

                // dti_equipamento_editar
                if (0 === strpos($pathinfo, '/dti/equipamento/editar') && preg_match('#^/dti/equipamento/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dti_equipamento_editar')), array (  '_controller' => 'App\\Controller\\dti\\equipamento\\EquipamentoController::editar',));
                }

                // dti_equipamento_deletar
                if (0 === strpos($pathinfo, '/dti/equipamento/deletar') && preg_match('#^/dti/equipamento/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dti_equipamento_deletar')), array (  '_controller' => 'App\\Controller\\dti\\equipamento\\EquipamentoController::deletar',));
                }

            }

            // dti_marca_novo
            if ('/dti/marca/novo' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\dti\\equipamento\\MarcaController::novo',  '_route' => 'dti_marca_novo',);
            }

            // dti_status_novo
            if ('/dti/status/novo' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\dti\\equipamento\\StatusController::novo',  '_route' => 'dti_status_novo',);
            }

            // dti_tipoequipamento_novo
            if ('/dti/tipoequipamento/novo' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\dti\\equipamento\\TipoEquipamentoController::novo',  '_route' => 'dti_tipoequipamento_novo',);
            }

            if (0 === strpos($pathinfo, '/dti/printers')) {
                // dti_printers_status
                if ('/dti/printers/status' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::printers',  '_route' => 'dti_printers_status',);
                }

                // dti_printers_novo
                if ('/dti/printers/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::novo',  '_route' => 'dti_printers_novo',);
                }

                // dti_printers_editar
                if (0 === strpos($pathinfo, '/dti/printers/editar') && preg_match('#^/dti/printers/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dti_printers_editar')), array (  '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::editar',));
                }

                // dti_printers_deletar
                if (0 === strpos($pathinfo, '/dti/printers/deletar') && preg_match('#^/dti/printers/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dti_printers_deletar')), array (  '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::deletar',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/esp/eleicao')) {
            if (0 === strpos($pathinfo, '/esp/eleicao/candidato')) {
                // esp_eleicao_candidato_index
                if (preg_match('#^/esp/eleicao/candidato/(?P<pleitoid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_candidato_index')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\CandidatoController::index',));
                }

                // esp_eleicao_candidato_novo
                if (0 === strpos($pathinfo, '/esp/eleicao/candidato/novo') && preg_match('#^/esp/eleicao/candidato/novo/(?P<eleicaoid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_candidato_novo')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\CandidatoController::novo',));
                }

                // esp_eleicao_candidato_editar
                if (0 === strpos($pathinfo, '/esp/eleicao/candidato/editar') && preg_match('#^/esp/eleicao/candidato/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_candidato_editar')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\CandidatoController::editar',));
                }

                // esp_eleicao_candidato_deletar
                if (0 === strpos($pathinfo, '/esp/eleicao/candidato/deletar') && preg_match('#^/esp/eleicao/candidato/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_candidato_deletar')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\CandidatoController::deletar',));
                }

            }

            elseif (0 === strpos($pathinfo, '/esp/eleicao/pleito')) {
                // esp_eleicao_pleito_index
                if ('/esp/eleicao/pleito' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\eleicao\\EleicaoController::index',  '_route' => 'esp_eleicao_pleito_index',);
                }

                // esp_eleicao_pleito_novo
                if ('/esp/eleicao/pleito/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\eleicao\\EleicaoController::novo',  '_route' => 'esp_eleicao_pleito_novo',);
                }

                // esp_eleicao_pleito_editar
                if (0 === strpos($pathinfo, '/esp/eleicao/pleito/editar') && preg_match('#^/esp/eleicao/pleito/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_pleito_editar')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\EleicaoController::editar',));
                }

                // esp_eleicao_pleito_deletar
                if (0 === strpos($pathinfo, '/esp/eleicao/pleito/deletar') && preg_match('#^/esp/eleicao/pleito/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_pleito_deletar')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\EleicaoController::deletar',));
                }

                // esp_eleicao_pleito_votantes
                if (0 === strpos($pathinfo, '/esp/eleicao/pleito/votantes') && preg_match('#^/esp/eleicao/pleito/votantes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_pleito_votantes')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\EleicaoController::votantes',));
                }

            }

            // esp_eleicao_voto_novo
            if (0 === strpos($pathinfo, '/esp/eleicao/voto') && preg_match('#^/esp/eleicao/voto/(?P<pleitoid>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_eleicao_voto_novo')), array (  '_controller' => 'App\\Controller\\esp\\eleicao\\VotoController::novo',));
            }

        }

        elseif (0 === strpos($pathinfo, '/esp/produtividade')) {
            if (0 === strpos($pathinfo, '/esp/produtividade/ato')) {
                // esp_produtividade_ato_index
                if ('/esp/produtividade/ato' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::index',  '_route' => 'esp_produtividade_ato_index',);
                }

                // esp_produtividade_ato_novo
                if ('/esp/produtividade/ato/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::novo',  '_route' => 'esp_produtividade_ato_novo',);
                }

                // esp_produtividade_ato_editar
                if (0 === strpos($pathinfo, '/esp/produtividade/ato/editar') && preg_match('#^/esp/produtividade/ato/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_ato_editar')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::editar',));
                }

                // esp_produtividade_ato_deletar
                if (0 === strpos($pathinfo, '/esp/produtividade/ato/deletar') && preg_match('#^/esp/produtividade/ato/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_ato_deletar')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::deletar',));
                }

            }

            elseif (0 === strpos($pathinfo, '/esp/produtividade/rels')) {
                if (0 === strpos($pathinfo, '/esp/produtividade/rels/esp-')) {
                    // esp_produtividade_esp-reports
                    if ('/esp/produtividade/rels/esp-reports' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::espReports',  '_route' => 'esp_produtividade_esp-reports',);
                    }

                    // esp_produtividade_esp-filter-reports
                    if ('/esp/produtividade/rels/esp-filter-reports' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::espFiltersReports',  '_route' => 'esp_produtividade_esp-filter-reports',);
                    }

                    // esp_produtividade_esp-filters
                    if ('/esp/produtividade/rels/esp-filters' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::filterValues',  '_route' => 'esp_produtividade_esp-filters',);
                    }

                }

                // esp_produtividade_export-image-chart
                if ('/esp/produtividade/rels/export-image-chart' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::exportImageChart',  '_route' => 'esp_produtividade_export-image-chart',);
                }

                // esp_produtividade_list-acts
                if ('/esp/produtividade/rels/list-acts' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::listarAtos',  '_route' => 'esp_produtividade_list-acts',);
                }

                // esp_produtividade_visualizar-ato
                if (0 === strpos($pathinfo, '/esp/produtividade/rels/visualizar-ato') && preg_match('#^/esp/produtividade/rels/visualizar\\-ato/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_visualizar-ato')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::visualizarAto',));
                }

                // esp_produtividade_detalhar-ato
                if (0 === strpos($pathinfo, '/esp/produtividade/rels/detalhar-ato') && preg_match('#^/esp/produtividade/rels/detalhar\\-ato/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_detalhar-ato')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::detalharAto',));
                }

                if (0 === strpos($pathinfo, '/esp/produtividade/rels/criticas')) {
                    // esp_produtividade_esp-criticas
                    if ('/esp/produtividade/rels/criticas' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::setRelatorioDeCriticas',  '_route' => 'esp_produtividade_esp-criticas',);
                    }

                    // esp_produtividade_esp-criticas-detalhe
                    if (0 === strpos($pathinfo, '/esp/produtividade/rels/criticas-detalhe') && preg_match('#^/esp/produtividade/rels/criticas\\-detalhe/(?P<dini>[^/]++)/(?P<dfim>[^/]++)/(?P<idesp>[^/]++)/(?P<idproc>[^/]++)/(?P<nproc>.+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_esp-criticas-detalhe')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::getDetalhesDeCriticas',));
                    }

                    // esp_produtividade_esp-criticas-report
                    if ('/esp/produtividade/rels/criticas-report' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::getRelatorioDeCriticas',  '_route' => 'esp_produtividade_esp-criticas-report',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/esp/produtividade/tipo-de-ato')) {
                // esp_produtividade_tipo-de-ato_index
                if ('/esp/produtividade/tipo-de-ato' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::index',  '_route' => 'esp_produtividade_tipo-de-ato_index',);
                }

                // esp_produtividade_tipo-de-ato_novo
                if ('/esp/produtividade/tipo-de-ato/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::novo',  '_route' => 'esp_produtividade_tipo-de-ato_novo',);
                }

                // esp_produtividade_tipo-de-ato_editar
                if (0 === strpos($pathinfo, '/esp/produtividade/tipo-de-ato/editar') && preg_match('#^/esp/produtividade/tipo\\-de\\-ato/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_tipo-de-ato_editar')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::editar',));
                }

                // esp_produtividade_tipo-de-ato_deletar
                if (0 === strpos($pathinfo, '/esp/produtividade/tipo-de-ato/deletar') && preg_match('#^/esp/produtividade/tipo\\-de\\-ato/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_tipo-de-ato_deletar')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::deletar',));
                }

            }

            elseif (0 === strpos($pathinfo, '/esp/produtividade/tipo-de-processo')) {
                // esp_produtividade_tipo-de-processo_index
                if ('/esp/produtividade/tipo-de-processo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::index',  '_route' => 'esp_produtividade_tipo-de-processo_index',);
                }

                // esp_produtividade_tipo-de-processo_novo
                if ('/esp/produtividade/tipo-de-processo/novo' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::novo',  '_route' => 'esp_produtividade_tipo-de-processo_novo',);
                }

                // esp_produtividade_tipo-de-processo_editar
                if (0 === strpos($pathinfo, '/esp/produtividade/tipo-de-processo/editar') && preg_match('#^/esp/produtividade/tipo\\-de\\-processo/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_tipo-de-processo_editar')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::editar',));
                }

                // esp_produtividade_tipo-de-processo_deletar
                if (0 === strpos($pathinfo, '/esp/produtividade/tipo-de-processo/deletar') && preg_match('#^/esp/produtividade/tipo\\-de\\-processo/deletar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esp_produtividade_tipo-de-processo_deletar')), array (  '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::deletar',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
