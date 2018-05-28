<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 28/05/2018
 * Time: 08:25
 */

namespace App\Controller\esp\produtividade;

use App\Entity\esp\produtividade\TipoDeAto;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TipoDeAtoController extends Controller
{

    /**
     * @Route("/esp/produtividade/tipo-de-ato/novo", name="esp_produtividade_tipodeato_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        $tipodeato = new TipoDeAto();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($tipodeato)
            ->add('descricao', TextType::class)
            ->add('peso', NumberType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $tipodeato = $form->getData();
            $entityManager->persist($tipodeato);
            $entityManager->flush();
            return $this->redirectToRoute('esp_produtividade_tipodeato_novo');
        }

        return $this->render("esp/produtividade/tipodeato/novo.html.twig", array(
            'form' => $form->createView(),
        ));

    }
}