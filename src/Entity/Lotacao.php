<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 07:49
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Mixed_;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Lotacao
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="lotacao")
 */
class Lotacao
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
     * @ORM\OneToMany(targetEntity="Ato", mappedBy="lotacao")
     * @ORM\OrderBy({"emissao" = "DESC"})
     */
    protected $atos;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="User", mappedBy="lotacao")
     * @ORM\OrderBy({"nome" = "ASC"})
     */
    protected $users;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="TipoDeAto", inversedBy="lotacoes")
     * @ORM\JoinTable(name="lotacao_tiposdeato")
     * @ORM\OrderBy({"descricao" = "ASC"})
     */
    protected $tiposdeato;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="TipoDeProcesso", inversedBy="lotacoes")
     * @ORM\JoinTable(name="lotacao_tiposdeprocesso")
     * @ORM\OrderBy({"descricao" = "ASC"})
     */
    protected $tiposdeprocesso;

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
    public function getAtos()
    {
        return $this->atos;
    }

    /**
     * @param mixed $atos
     */
    public function setAtos($atos)
    {
        $this->atos = $atos;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getTiposdeato()
    {
        return $this->tiposdeato;
    }

    /**
     * @param mixed $tiposdeato
     */
    public function setTiposdeato($tiposdeato)
    {
        $this->tiposdeato = $tiposdeato;
    }

    /**
     * @return mixed
     */
    public function getTiposdeprocesso()
    {
        return $this->tiposdeprocesso;
    }

    /**
     * @param mixed $tiposdeprocesso
     */
    public function setTiposdeprocesso($tiposdeprocesso)
    {
        $this->tiposdeprocesso = $tiposdeprocesso;
    }

}