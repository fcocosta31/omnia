<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 10/04/2018
 * Time: 12:06
 */

namespace App\Entity;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class)
            ->add('email', EmailType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Senha'),
                'second_options' => array('label' => 'Repita a Senha'),
            ))
            ->add('roles', ChoiceType::class, array(
                'placeholder' => 'Selecione...',
                'choices' => array(
                    'Procurador' => 'ROLE_ESP',
                    'Adm.Interna' => 'ROLE_DAI',
                    'Financeiro' => 'ROLE_DFI',
                    'Tec.Informação' => 'ROLE_DTI',
                    'Administrador' => 'ROLE_ADMIN',
                ),
                'multiple' => true,
                'expanded' => true,
            ))
            ->add('lotacao_id', EntityType::class, array(
                    'placeholder' => 'Selecione...',
                    'class' => Lotacao::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.descricao', 'ASC');
                    },
                    'choice_label' => 'descricao',
                    'required' => true,
                    'expanded' => false,
                    'multiple' => false,
                    'empty_data' => null
                )
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}