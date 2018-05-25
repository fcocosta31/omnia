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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmissao()
    {
        return $this->emissao;
    }

    /**
     * @param mixed $emissao
     */
    public function setEmissao($emissao)
    {
        $this->emissao = $emissao;
    }

    /**
     * @return mixed
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * @param mixed $assunto
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
    }

    /**
     * @return mixed
     */
    public function getTipodeatoId()
    {
        return $this->tipodeato_id;
    }

    /**
     * @param mixed $tipodeato_id
     */
    public function setTipodeatoId($tipodeato_id)
    {
        $this->tipodeato_id = $tipodeato_id;
    }

    /**
     * @return mixed
     */
    public function getTipodeprocessoId()
    {
        return $this->tipodeprocesso_id;
    }

    /**
     * @param mixed $tipodeprocesso_id
     */
    public function setTipodeprocessoId($tipodeprocesso_id)
    {
        $this->tipodeprocesso_id = $tipodeprocesso_id;
    }

    /**
     * @return mixed
     */
    public function getNumerodoprocesso()
    {
        return $this->numerodoprocesso;
    }

    /**
     * @param mixed $numerodoprocesso
     */
    public function setNumerodoprocesso($numerodoprocesso)
    {
        $this->numerodoprocesso = $numerodoprocesso;
    }

    /**
     * @return mixed
     */
    public function getLotacaoId()
    {
        return $this->lotacao_id;
    }

    /**
     * @param mixed $lotacao_id
     */
    public function setLotacaoId($lotacao_id)
    {
        $this->lotacao_id = $lotacao_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
