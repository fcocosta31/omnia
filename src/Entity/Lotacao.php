<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 07:49
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
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
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\esp\produtividade\Ato", mappedBy="lotacao_id")
     */
    protected $atos;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="User", mappedBy="lotacao_id")
     */
    protected $users;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="App\Entity\esp\produtividade\TipoDeAto", mappedBy="lotacoes")
     * @ORM\JoinTable(name="lotacao_tiposdeato",
     *      joinColumns={@ORM\JoinColumn(name="tipodeato_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="lotacao_id", referencedColumnName="id")}
     *      )
     */
    protected $tiposdeato;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="App\Entity\esp\produtividade\TipoDeProcesso", mappedBy="lotacoes")
     * @ORM\JoinTable(name="lotacao_tiposdeprocesso",
     *      joinColumns={@ORM\JoinColumn(name="tipodeprocesso_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="lotacao_id", referencedColumnName="id")}
     *      )
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
     * @return ArrayCollection
     */
    public function getAtos(): ArrayCollection
    {
        return $this->atos;
    }

    /**
     * @param ArrayCollection $atos
     */
    public function setAtos(ArrayCollection $atos)
    {
        $this->atos = $atos;
    }

    /**
     * @return ArrayCollection
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param ArrayCollection $users
     */
    public function setUsers(ArrayCollection $users)
    {
        $this->users = $users;
    }

    /**
     * @return ArrayCollection
     */
    public function getTiposdeato(): ArrayCollection
    {
        return $this->tiposdeato;
    }

    /**
     * @param ArrayCollection $tiposdeato
     */
    public function setTiposdeato(ArrayCollection $tiposdeato)
    {
        $this->tiposdeato = $tiposdeato;
    }

    /**
     * @return ArrayCollection
     */
    public function getTiposdeprocesso(): ArrayCollection
    {
        return $this->tiposdeprocesso;
    }

    /**
     * @param ArrayCollection $tiposdeprocesso
     */
    public function setTiposdeprocesso(ArrayCollection $tiposdeprocesso)
    {
        $this->tiposdeprocesso = $tiposdeprocesso;
    }
}