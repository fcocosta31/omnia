<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 17/05/2018
 * Time: 12:24
 */

namespace App\Controller\esp\produtividade;

use App\Entity\Ato;
use App\Entity\Lotacao;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
     * @Route("/esp/produtividade/ato", name="esp_produtividade_ato_index")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request){

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $session = $this->get('session');

        if(!empty($request->get('_dateini'))){
            $dateini = $request->get('_dateini');
            $datefim = $request->get('_datefim');
            $session->set('_dateini', $dateini);
            $session->set('_datefim', $datefim);
        }else{

            if(empty($session->get('_dateini'))){
                $datefim = date("Y-m-d");
                $dateini = date("Y-m-d", strtotime("-1 months"));
            }else{
                $dateini = $session->get('_dateini');
                $datefim = $session->get('_datefim');
            }
        }

        $query = $em->createQueryBuilder()
            ->select('u')
            ->from(Ato::class, 'u')
            ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
            ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
            ->leftJoin('u.tipodeprocesso', 'd', 'WITH', 'd.id = u.tipodeprocesso')
            ->where('u.user = :userid and u.emissao between :dateini and :datefim')
            ->setParameters(array(
                'userid' => $user->getId(),
                'dateini' => $dateini,
                'datefim' => $datefim,
            ))
            ->orderBy('u.emissao', 'DESC');


        /**
         * @var $paginator Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');

        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render("esp/produtividade/ato/index.html.twig", array(
            'atos' => $result,
            'dateini' => $dateini,
            'datefim' => $datefim,
        ));
    }

    /**
     * @Route("/esp/produtividade/ato/novo", name="esp_produtividade_ato_novo")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function novo(Request $request){

        $ato = new Ato();

        $user = $this->getUser();

        $entityManager = $this->getDoctrine()->getManager();

        $user = $entityManager->getRepository(User::class)
            ->find($user->getId());


        $form = $this->createFormBuilder($ato)
                ->add('emissao', DateType::class, array(
                    'widget' => 'single_text',
                    'html5' => false,
                    'format' => 'dd/MM/yyyy',
                    'attr' => ['class' => 'js-datepicker',
                        'data-mask' => '00/00/0000',
                        'placeholder' => '00/00/0000']
                ))
                ->add('numero', TextType::class, array(
                    'required' => true
                ))
                ->add('tipodeato', ChoiceType::class, array(
                    'placeholder' => 'Selecione...',
                    'choices' => $user->getLotacao()->getTiposdeato(),
                    'choice_label' => 'descricao',
                    'required' => true,
                    'empty_data' => null
                ))
            ->add('favoravel', ChoiceType::class, array(
                'placeholder' => 'Selecione...',
                'choices' => array(
                    'Sim' => true,
                    'Nâo' => false,
                ),
                'multiple' => false,
                'expanded' => false,
                'required' => false,
                'empty_data' => null
            ))
            ->add('interessado', TextType::class, array(
                    'required' => false
                ))
                ->add('tipodeprocesso', ChoiceType::class, array(
                    'placeholder' => 'Selecione...',
                    'choices' => $user->getLotacao()->getTiposdeprocesso(),
                    'choice_label' => 'descricao',
                    'required' => false,
                    'empty_data' => null
                    ))
                ->add('numerodoprocesso', TextType::class, array(
                    'required' => false
                ))
                ->add('assunto', TextType::class, array(
                    'required' => true
                ))
                ->add('descricao', TextareaType::class, array(
                    'required' => false,
                ))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $ato = $form->getData();
            if($ato->verificaAto(5)){
                $ato->setUser($user);
                $ato->setLotacao($user->getLotacao());
                $entityManager->persist($ato);
                $entityManager->flush();
                return $this->redirectToRoute('esp_produtividade_ato_novo');
            }else{
                return $this->render("error.html.twig", array(
                    'errormessage' => "Data de emissão do Ato não permitida. Prazo de registro encerrado!",
                ));
            }
        }

        return $this->render("esp/produtividade/ato/novo.html.twig", array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/esp/produtividade/ato/editar/{id}", name="esp_produtividade_ato_editar")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function editar(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $ato = $entityManager->getRepository(Ato::class)
            ->find($id);

        $form = $this->createFormBuilder($ato)
            ->add('emissao', DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => ['class' => 'js-datepicker',
                    'data-mask' => '00/00/0000',
                    'placeholder' => '00/00/0000']
            ))
            ->add('numero', TextType::class, array(
                'required' => true
            ))
            ->add('tipodeato', ChoiceType::class, array(
                'placeholder' => 'Selecione...',
                'choices' => $ato->getLotacao()->getTiposdeato(),
                'choice_label' => 'descricao',
                'required' => true,
                'empty_data' => null
            ))
            ->add('favoravel', ChoiceType::class, array(
                'placeholder' => 'Selecione...',
                'choices' => array(
                    'Sim' => true,
                    'Nâo' => false,
                ),
                'multiple' => false,
                'expanded' => false,
                'required' => false,
                'empty_data' => null
            ))
            ->add('interessado', TextType::class, array(
                'required' => false
            ))
            ->add('tipodeprocesso', ChoiceType::class, array(
                'placeholder' => 'Selecione...',
                'choices' => $ato->getLotacao()->getTiposdeprocesso(),
                'choice_label' => 'descricao',
                'required' => false,
                'empty_data' => null
            ))
            ->add('numerodoprocesso', TextType::class, array(
                'required' => false
            ))
            ->add('assunto', TextType::class, array(
                'required' => true
            ))
            ->add('descricao', TextareaType::class, array(
                'required' => false,
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $ato = $form->getData();
            if($ato->verificaAto(5)) {
                $entityManager->persist($ato);
                $entityManager->flush();
                return $this->redirectToRoute('esp_produtividade_ato_index');
            }else{
                return $this->render("error.html.twig", array(
                    'errormessage' => "Data de emissão do Ato não permitida. Prazo de registro encerrado!",
                ));
            }
        }

        return $this->render("esp/produtividade/ato/editar.html.twig", array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/esp/produtividade/ato/deletar/{id}", name="esp_produtividade_ato_deletar")
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function deletar($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $ato = $entityManager->getRepository(Ato::class)
            ->find($id);
        $entityManager->remove($ato);
        $entityManager->flush();
        return $this->redirectToRoute('esp_produtividade_ato_index');
    }
}