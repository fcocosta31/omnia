<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 23/05/2018
 * Time: 10:38
 */

namespace App\Entity\esp\produtividade;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TipoDeAto
 * @package App\Entity\esp\produtividade
 * @ORM\Entity
 * @ORM\Table(name="tipodeato")
 */
class TipoDeAto
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $descricao;

    /**
     * @ORM\Column(name="peso", type="float", nullable=false)
     */
    protected $peso;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Lotacao", mappedBy="tiposdeato")
     */
    protected $lotacoes;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Ato", mappedBy="tipodeato_id")
     */
    protected $atos;

}