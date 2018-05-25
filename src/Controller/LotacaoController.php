<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 23/05/2018
 * Time: 09:40
 */

namespace App\Controller;


use App\Entity\Lotacao;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
        $lotacoes = $this->getDoctrine()
            ->getRepository(Lotacao::class)
            ->findAll();

        return $this->render("lotacao/index.html.twig", array(
            'lots' => $lotacoes,
        ));
    }

    /**
     * @Route("/lotacao/novo", name="lotacao_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        $lotacao = new Lotacao();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($lotacao)
            ->add('descricao', TextType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $lotacao = $form->getData();
            $entityManager->persist($lotacao);
            $entityManager->flush();
            return $this->redirectToRoute('lotacao_index');
        }

        return $this->render("lotacao/novo.html.twig", array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/lotacao/editar/{id}", name="lotacao_editar")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function editar(Request $request, $id)
    {

    }

    /**
     * @Route("/lotacao/deletar/{id}", name="lotacao_deletar")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function deletar($id)
    {

    }

}