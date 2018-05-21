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
     * @Route("/", name="index_geral")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(){
        $menusys = "Index da aplicação";
        return $this->render("index.html.twig", array(
            'menusys' => $menusys
        ));
    }
}