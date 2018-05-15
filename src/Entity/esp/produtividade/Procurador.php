<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 09:41
 */

namespace App\Entity\esp\produtividade;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Procurador
 * @package App\Entity\esp\produtividade
 * @ORM\Entity
 * @ORM\Table(name="procurador")
 */
class Procurador
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="nome", type="string", nullable=false)
     */
    protected $nome;

    /**
     * @ORM\ManyToOne(targetEntity="Especializada", inversedBy="procuradores")
     * @ORM\JoinColumn(name="especializada_id", referencedColumnName="id")
     */
    protected $especializada_id;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Processo", mappedBy="procurador_id")
     */
    protected $processos;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Ato", mappedBy="procurador_id")
     */
    protected $atos;

}