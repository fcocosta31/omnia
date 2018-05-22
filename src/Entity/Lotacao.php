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
     * @var Collection
     * @ORM\OneToMany(targetEntity="Ato", mappedBy="lotacao_id")
     */
    protected $atos;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="User", mappedBy="lotacao_id")
     */
    protected $users;

}