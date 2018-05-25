<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 08:57
 */

namespace App\Entity\esp\produtividade;

use App\Entity\Lotacao;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Produtividade
 * @package App\Entity\esp\produtividade
 */
class Produtividade
{

    /**
     * @var Date
     */
    protected $dataini;

    /**
     * @var Date
     */
    protected $datafim;

    /**
     * @var Lotacao
     */
    protected $especializada;

    /**
     * @var User
     */
    protected $procurador;

    /**
     * @var ArrayCollection
     */
    protected $atos;

}