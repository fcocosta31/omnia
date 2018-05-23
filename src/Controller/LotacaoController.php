<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 23/05/2018
 * Time: 09:40
 */

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class LotacaoController
 * @package App\Controller
 */
class LotacaoController extends Controller
{
    /**
     * @Route("/lotacao", name="lotacao_index")
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(){

        return $this->render("lotacao/index.html.twig", array(
            'form' => null,
        ));
    }

    /**
     * @Route("/lotacao/novo", name="lotacao_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        return $this->render("lotacao/novo.html.twig", array(
            'form' => null,
        ));
    }
}