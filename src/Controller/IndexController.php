<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 17/03/2018
 * Time: 00:19
 */

namespace App\Controller;

use App\Entity\esp\eleicao\Eleicao;
use App\Services\NotifyCommand;
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
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(){

        $rolesTab = $this->getUser()->getRoles();

        $em = $this->getDoctrine()->getManager();

        $pleitos = $em->getRepository(Eleicao::class)->findAll();

        foreach ($pleitos as $i){
            if($i->verificaPleito()){
                if($i->verificaVoto($this->getUser())){
                    return $this->redirectToRoute('esp_eleicao_voto_novo', array("pleitoid" => $i->getId()));
                }
            }
        }

        //if (in_array('ROLE_ESP', $rolesTab, true))
          //  return $this->redirectToRoute('esp_produtividade_ato_index');
        //else
            return $this->render("/index.html.twig", array(
            'index' => null,
        ));

    }

    /**
     * @Route("/", name="index_geral_root")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function indexRoot(){

        return $this->redirectToRoute('index_geral');

    }

}