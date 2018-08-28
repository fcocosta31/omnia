<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 24/07/2018
 * Time: 13:03
 */

namespace App\Entity\dai\rh;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Cargo
 * @package App\Entity\dai\rh
 * @ORM\Entity
 * @ORM\Table(name="cargo")
 */
class Cargo
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="descricao", type="string", nullable=false)
     * @Assert\NotBlank()
     */
    protected $descricao;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="cargo")
     */
    protected $employees;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="cargo")
     */
    protected $users;

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
     * @return Collection
     */
    public function getEmployees(): Collection
    {
        return $this->employees;
    }

    /**
     * @param Collection $employees
     */
    public function setEmployees(Collection $employees)
    {
        $this->employees = $employees;
    }

    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    /**
     * @param Collection $users
     */
    public function setUsers(Collection $users)
    {
        $this->users = $users;
    }
}