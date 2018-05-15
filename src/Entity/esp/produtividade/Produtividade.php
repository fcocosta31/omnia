<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 26/04/2018
 * Time: 08:57
 */

namespace App\Entity\esp\produtividade;

use Symfony\Component\Validator\Constraints\Collection;
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
    protected $emissao;

    /**
     * @var Especializada
     */
    protected $especializada;

    /**
     * @var Procurador
     */
    protected $procurador;

    /**
     * @var Collection
     */
    protected $processos;

    /**
     * @var Collection
     */
    protected $atos;

}