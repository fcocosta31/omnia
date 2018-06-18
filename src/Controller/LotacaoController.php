<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 23/05/2018
 * Time: 09:40
 */

namespace App\Controller;


use App\Entity\Lotacao;
use App\Entity\LotacaoFormType;
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
            ->findBy(array(), array('descricao' => 'ASC'));

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

        $entityManager = $this->getDoctrine()->getManager();

        $lotacao = new Lotacao();

        $form = $this->createForm(LotacaoFormType::class, $lotacao);

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
        $entityManager = $this->getDoctrine()->getManager();

        $lotacao = $entityManager->getRepository(Lotacao::class)
            ->find($id);

        $form = $this->createForm(LotacaoFormType::class, $lotacao);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $lotacao = $form->getData();
            $entityManager->persist($lotacao);
            $entityManager->flush();
            return $this->redirectToRoute('lotacao_index');
        }

        return $this->render("lotacao/editar.html.twig", array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/lotacao/deletar/{id}", name="lotacao_deletar")
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function deletar($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $lotacao = $entityManager->getRepository(Lotacao::class)
            ->find($id);
        $entityManager->remove($lotacao);
        $entityManager->flush();
        return $this->redirectToRoute('lotacao_index');
    }

}