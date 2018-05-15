<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 07:49
 */

namespace App\Entity\esp\produtividade;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Especializada
 * @package App\Entity\esp\produtividade
 * @ORM\Entity
 * @ORM\Table(name="especializada")
 */
class Especializada
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="descricao", type="string", nullable=false)
     */
    protected $descricao;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Processo", mappedBy="especializada_id")
     */
    protected $processos;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Ato", mappedBy="especializada_id")
     */
    protected $atos;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Procurador", mappedBy="especializada_id")
     */
    protected $procuradores;

}