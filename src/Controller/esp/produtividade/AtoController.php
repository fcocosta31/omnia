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

        $er = $em->getRepository(Ato::class);

        if(!empty($request->get('_dateini'))){
            $dateini = $request->get('_dateini');
            $datefim = $request->get('_datefim');
        }else{
            $datefim = date("Y-m-d");
            $dateini = date("Y-m-d", strtotime("-1 months"));
        }

        $qb = $er->createQueryBuilder('e')
            ->where('e.user = :userid and e.emissao between :dateini and :datefim')
            ->setParameter('userid', $user->getId())
            ->setParameter('dateini', $dateini)
            ->setParameter('datefim', $datefim);

        $atos = $qb->getQuery()->getResult();

        return $this->render("esp/produtividade/ato/index.html.twig", array(
            'atos' => $atos,
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
            ->add('tipodeato', ChoiceType::class, array(
                'placeholder' => 'Selecione...',
                'choices' => $ato->getLotacao()->getTiposdeato(),
                'choice_label' => 'descricao',
                'required' => true,
                'empty_data' => null
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
            $entityManager->persist($ato);
            $entityManager->flush();
            return $this->redirectToRoute('esp_produtividade_ato_index');
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