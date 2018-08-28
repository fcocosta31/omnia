<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'index_geral' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\IndexController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index_geral_root' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\IndexController::indexRoot',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lotacao_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\LotacaoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lotacao',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lotacao_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\LotacaoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lotacao/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lotacao_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\LotacaoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/lotacao/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lotacao_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\LotacaoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/lotacao/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user-profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user-profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_ausencia_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/ausencia/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_ausencia_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/ausencia/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_ausencia_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/ausencia/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_ausencia_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\AusenciaController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/ausencia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_classificacao_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/classificacao/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_classificacao_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/classificacao/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_classificacao_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/classificacao/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_classificacao_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\ClassificacaoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/classificacao',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_departamento_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/departamento/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_departamento_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/departamento/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_departamento_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/departamento/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_listar_departamentos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DepartamentoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/departamento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_documento_listar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DocumentoController::listar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/documento/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_documento_download' => array (  0 =>   array (    0 => 'filename',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DocumentoController::download',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'filename',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/documento/download',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_documento_deletar' => array (  0 =>   array (    0 => 'id',    1 => 'idemp',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\DocumentoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idemp',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/dai/rh/documento/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_cadastro_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/cadastro/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_cadastro_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/cadastro/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_cadastro_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/cadastro/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_get-cidades-por-estado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::listCidadesOfUfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/get-cidades-por-estado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_cadastro_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EmployeeController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/cadastro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_escolaridade_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/escolaridade/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_escolaridade_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/escolaridade/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_escolaridade_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/escolaridade/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_listar_escolaridades' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EscolaridadeController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/escolaridade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_estadocivil_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/estadocivil/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_estadocivil_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/estadocivil/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_estadocivil_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/estadocivil/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_listar_estadocivis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\EstadocivilController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/estadocivil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_orgao_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/orgao/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_orgao_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/orgao/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_orgao_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/orgao/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_listar_orgaos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\OrgaoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/orgao',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_tipoausencia_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/tipoausencia/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_tipoausencia_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/tipoausencia/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_tipoausencia_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dai/rh/tipoausencia/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dai_rh_listar_tipoausencias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dai\\rh\\TipoausenciaController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dai/rh/tipoausencia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dti_printers_status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::printers',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dti/printers/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dti_printers_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dti/printers/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dti_printers_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dti/printers/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dti_printers_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\dti\\printers\\PrinterController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dti/printers/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_ato_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/ato',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_ato_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/ato/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_ato_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/ato/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_ato_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\AtoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/ato/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_esp-reports' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::espReports',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/esp-reports',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_esp-filter-reports' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::espFiltersReports',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/esp-filter-reports',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_export-image-chart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::exportImageChart',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/export-image-chart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_list-acts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::listarAtos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/list-acts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_visualizar-ato' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::visualizarAto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/visualizar-ato',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_esp-filters' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::filterValues',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/esp-filters',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_esp-criticas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::setRelatorioDeCriticas',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/criticas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_esp-criticas-detalhe' => array (  0 =>   array (    0 => 'dini',    1 => 'dfim',    2 => 'idesp',    3 => 'idproc',    4 => 'nproc',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::getDetalhesDeCriticas',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nproc',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idproc',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idesp',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dfim',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dini',    ),    5 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/criticas-detalhe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_esp-criticas-report' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\ProdutividadeController::getRelatorioDeCriticas',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/rels/criticas-report',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-ato_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-ato',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-ato_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-ato/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-ato_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-ato/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-ato_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeAtoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-ato/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-processo_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-processo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-processo_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::novo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-processo/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-processo_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-processo/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esp_produtividade_tipo-de-processo_deletar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\esp\\produtividade\\TipoDeProcessoController::deletar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/esp/produtividade/tipo-de-processo/deletar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show_id' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App:UserController:show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user-profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit_id' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App:UserController:edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user-profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
