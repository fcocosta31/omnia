<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 07:55
 */

namespace App\Entity\esp\produtividade;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Ato
 * @package App\Entity\esp\produtividade
 * @ORM\Entity
 * @ORM\Table(name="ato")
 */
class Ato
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
     * @ORM\Column(name="peso", type="float", nullable=false)
     */
    protected $peso;

    /**
     * @ORM\ManyToOne(targetEntity="Especializada", inversedBy="atos")
     * @ORM\JoinColumn(name="especializada_id", referencedColumnName="id")
     */
    protected $especializada_id;

    /**
     * @ORM\ManyToOne(targetEntity="Procurador", inversedBy="atos")
     * @ORM\JoinColumn(name="procurador_id", referencedColumnName="id")
     */
    protected $procurador_id;

}
