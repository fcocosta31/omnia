<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 17/05/2018
 * Time: 12:24
 */

namespace App\Controller\esp\produtividade;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AtoController
 * @package App\Controller\esp\produtividade
 */
class AtoController extends Controller
{
    /**
     * @Route("/esp/produtividade/ato/novo", name="esp_produtividade_ato_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        return $this->render("esp/produtividade/ato/novo.html.twig", array(
            'form' => null,
        ));
    }
}