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
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(){

        $user = $this->getUser();

        $entityManager = $this->getDoctrine()->getManager();

        $atos = $entityManager->getRepository(Ato::class)
            ->findBy(array('user' => $user->getId()));

        return $this->render("esp/produtividade/ato/index.html.twig", array(
            'atos' => $atos,
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
                ->add('tipodeato', ChoiceType::class, array(
                    'placeholder' => 'Selecione...',
                    'choices' => $user->getLotacao()->getTiposdeato(),
                    'choice_label' => 'descricao',
                    'required' => true,
                    'empty_data' => null
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
            $ato->setUser($user);
            $ato->setLotacao($user->getLotacao());
            $entityManager->persist($ato);
            $entityManager->flush();
            return $this->redirectToRoute('esp_produtividade_ato_index');
        }

        return $this->render("esp/produtividade/ato/novo.html.twig", array(
            'form' => $form->createView(),
        ));
    }
}