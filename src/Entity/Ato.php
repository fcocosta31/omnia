<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 07:55
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Ato
 * @package App\Entity
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
     * @ORM\Column(name="numero", type="string", nullable=true)
     */
    protected $numero;

    /**
     * @ORM\Column(name="interessado", type="string", nullable=true)
     */
    protected $interessado;

    /**
     * @ORM\Column(name="favoravel", type="boolean", nullable=true)
     */
    protected $favoravel;

    /**
     * @ORM\Column(name="emissao", type="date", nullable=false)
     */
    protected $emissao;

    /**
     * @ORM\Column(name="assunto", type="string", nullable=false)
     */
    protected $assunto;

    /**
     * @ORM\Column(name="descricao", type="string", nullable=true)
     */
    protected $descricao;

    /**
     * @ORM\ManyToOne(targetEntity="TipoDeAto", inversedBy="atos")
     * @ORM\JoinColumn(name="tipodeato_id", referencedColumnName="id")
     */
    protected $tipodeato;

    /**
     * @ORM\ManyToOne(targetEntity="TipoDeProcesso", inversedBy="atos")
     * @ORM\JoinColumn(name="tipodeprocesso_id", referencedColumnName="id")
     */
    protected $tipodeprocesso;

    /**
     * @ORM\Column(name="numerodoprocesso", type="string", nullable=true)
     */
    protected $numerodoprocesso;


    /**
     * @ORM\ManyToOne(targetEntity="Lotacao", inversedBy="atos")
     * @ORM\JoinColumn(name="lotacao_id", referencedColumnName="id")
     */
    protected $lotacao;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="atos")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(name="datacadastro", type="date", nullable=true)
     */
    protected $datacadastro;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\dai\rh\Documento", mappedBy="ato", cascade={"persist","remove"})
     */
    protected $files;


    public function __construct()
    {
        $this->emissao = new \DateTime();
        $this->datacadastro = new \DateTime();
    }

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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


    /**
     * @return mixed
     */
    public function getTipodeato()
    {
        return $this->tipodeato;
    }

    /**
     * @param mixed $tipodeato
     */
    public function setTipodeato($tipodeato)
    {
        $this->tipodeato = $tipodeato;
    }

    /**
     * @return mixed
     */
    public function getTipodeprocesso()
    {
        return $this->tipodeprocesso;
    }

    /**
     * @param mixed $tipodeprocesso
     */
    public function setTipodeprocesso($tipodeprocesso)
    {
        $this->tipodeprocesso = $tipodeprocesso;
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
    public function getLotacao()
    {
        return $this->lotacao;
    }

    /**
     * @param mixed $lotacao
     */
    public function setLotacao($lotacao)
    {
        $this->lotacao = $lotacao;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getInteressado()
    {
        return $this->interessado;
    }

    /**
     * @param mixed $interessado
     */
    public function setInteressado($interessado)
    {
        $this->interessado = $interessado;
    }

    /**
     * @return mixed
     */
    public function getFavoravel()
    {
        return $this->favoravel;
    }

    /**
     * @param mixed $favoravel
     */
    public function setFavoravel($favoravel)
    {
        $this->favoravel = $favoravel;
    }

    /**
     * @return mixed
     */
    public function getDatacadastro()
    {
        return $this->datacadastro;
    }

    /**
     * @param mixed $datacadastro
     */
    public function setDatacadastro($datacadastro)
    {
        $this->datacadastro = $datacadastro;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param mixed $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

}
