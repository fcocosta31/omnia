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
     * @ORM\Column(name="emissao", type="date", nullable=false)
     */
    protected $emissao;

    /**
     * @ORM\Column(name="assunto", type="string", nullable=false)
     */
    protected $assunto;

    /**
     * @ORM\ManyToOne(targetEntity="TipoDeAto", inversedBy="atos")
     * @ORM\JoinColumn(name="tipodeato_id", referencedColumnName="id")
     */
    protected $tipodeato_id;

    /**
     * @ORM\ManyToOne(targetEntity="TipoDeProcesso", inversedBy="atos")
     * @ORM\JoinColumn(name="tipodeprocesso_id", referencedColumnName="id")
     */
    protected $tipodeprocesso_id;

    /**
     * @ORM\Column(name="numerodoprocesso", type="string", nullable=true)
     */
    protected $numerodoprocesso;


    /**
     * @ORM\ManyToOne(targetEntity="Lotacao", inversedBy="atos")
     * @ORM\JoinColumn(name="lotacao_id", referencedColumnName="id")
     */
    protected $lotacao_id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="atos")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user_id;


}
