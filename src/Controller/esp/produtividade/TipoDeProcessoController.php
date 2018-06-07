<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 28/05/2018
 * Time: 08:25
 */

namespace App\Controller\esp\produtividade;

use App\Entity\TipoDeProcesso;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TipoDeProcessoController extends Controller
{

    /**
     * @Route("/esp/produtividade/tipo-de-processo/novo", name="esp_produtividade_tipodeprocesso_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        $tipodeprocesso = new TipoDeProcesso();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($tipodeprocesso)
            ->add('descricao', TextType::class)
            ->add('peso', NumberType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $tipodeprocesso = $form->getData();
            $entityManager->persist($tipodeprocesso);
            $entityManager->flush();
            return $this->redirectToRoute('esp_produtividade_tipodeprocesso_novo');
        }

        return $this->render("esp/produtividade/tipodeprocesso/novo.html.twig", array(
            'form' => $form->createView(),
        ));

    }

}