<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 17/05/2018
 * Time: 12:25
 */

namespace App\Controller\esp\produtividade;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class ProcessoController
 * @package App\Controller\esp\produtividade
 */
class ProcessoController extends Controller
{

    /**
     * @Route("/esp/produtividade/processo/novo", name="esp_produtividade_processo_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        return $this->render("esp/produtividade/processo/novo.html.twig", array(
            'form' => null,
        ));
    }
}