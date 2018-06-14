<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 17/03/2018
 * Time: 00:19
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends Controller
{
    /**
     * @Route("/home", name="index_geral")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(){

        // Get list of roles for current user
        $rolesTab = $this->getUser()->getRoles();

        if (in_array('ROLE_ADMIN', $rolesTab, true))
            return $this->render("/index.html.twig", array(
                'index' => null,
            ));
        elseif (in_array('ROLE_DAI', $rolesTab, true))
            return $this->redirectToRoute('dai_rh_cadastro_listar');
        elseif (in_array('ROLE_ESP', $rolesTab, true))
            return $this->redirectToRoute('esp_produtividade_ato_index');
        elseif (in_array('ROLE_DTI', $rolesTab, true))
            return $this->redirectToRoute('dti_printers_status');
        else
            return $this->redirectToRoute('login');

    }
}