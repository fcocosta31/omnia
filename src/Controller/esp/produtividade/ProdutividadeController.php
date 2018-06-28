<?php
/**
 * Created by PhpStorm.
 * User: fcoco
 * Date: 17/05/2018
 * Time: 12:27
 */

namespace App\Controller\esp\produtividade;

use App\Entity\Ato;
use App\Entity\Lotacao;
use App\Entity\TipoDeAto;
use App\Entity\User;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\TableChart;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class ProdutividadeController
 * @package App\Controller\esp\produtividade
 */
class ProdutividadeController extends Controller
{

    /**
     * @Route("/esp/produtividade/esp-reports", name="esp_produtividade_esp-reports")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function espreports(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Ato::class);

        $type_filter = "Todos: ";
        $value_filter = "Todos";

        $datefim = date("Y-m-d");
        $dateini = date("Y-m-d", strtotime("-1 months"));

        $query = $repository->createQueryBuilder('u')
            ->select('b.descricao as especializada, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
            ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
            ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
            ->where('u.emissao between :dateini and :datefim')
            ->setParameters(array(
                'dateini' => $dateini,
                'datefim' => $datefim,
            ))
            ->groupBy('b')
            ->orderBy('b.descricao');


        /* GRÁFICO EM FORMA DE PIZZA */
        $result = array();
        array_push($result, ['Especializada', 'Pontos']);
        $qry = $query->getQuery()->getResult();
        foreach ($qry as $k => $v) {
            array_push($result, [$v['especializada'], floatval($v['pontos'])]);
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            $result
        );

        $pieChart->getOptions()->setFontSize(11);
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('right');


        /* GRÁFICO EM FORMA DE TABELA */
        $result = array();
        array_push($result, ['Especializada', 'Nº de Atos', 'Produtividade']);
        $qry = $query->getQuery()->getResult();
        $totpts = 0;
        $totats = 0;
        foreach ($qry as $k => $v) {
            array_push($result, [
                $v['especializada'],
                floatval($v['atos']),
                floatval($v['pontos'])
            ]);
            $totpts += floatval($v['pontos']);
            $totats += floatval($v['atos']);
        }

        array_push($result, [
            'TOTAL GERAL',
            $totats,
            $totpts
        ]);

        $table = new TableChart();
        $table->getData()->setArrayToDataTable(
            $result
        );
        $table->getOptions()->setAllowHtml(true);
        $table->getOptions()->setShowRowNumber(true);
        $table->getOptions()->setHeight('30%');
        $table->getOptions()->setWidth('50%');


        return $this->render('esp/produtividade/reports/index.html.twig', array(
            'typefilter' => $type_filter,
            'valuefilter' => $value_filter,
            'piechart' => $pieChart,
            'tablechart' => $table,
            'dateini' => $dateini,
            'datefim' => $datefim
        ));

    }

    /**
     * @Route("/esp/produtividade/esp-filter-reports", name="esp_produtividade_esp-filter-reports")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function espfiltersreports(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Ato::class);

        $dateini = $request->get('_dateini');
        $datefim = $request->get('_datefim');

        $type = $request->get('_filterType');
        $value = $request->get('_filterValue');

        $type_filter = "Todos: ";
        $value_filter = "Todos";

        if($value == '0'){

            $query = $repository->createQueryBuilder('u')
                ->select('b.descricao as especializada, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                ->where('u.emissao between :dateini and :datefim')
                ->setParameters(array(
                    'dateini' => $dateini,
                    'datefim' => $datefim,
                ))
                ->groupBy('b')
                ->orderBy('b.descricao');

        }else{
            if($type == '1'){

                $type_filter = "Especializada: ";

                $qb = $em->getRepository(Lotacao::class)

                    ->createQueryBuilder('u')
                    ->select('u.descricao')
                    ->where('u.id = :lotaid')
                    ->setParameters(
                        array(
                            'lotaid' => $value
                        )
                    )->getQuery()->getSingleResult();

                $value_filter = $qb['descricao'];

                $query = $repository->createQueryBuilder('u')
                    ->select('b.descricao as especializada, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->where('b.id = :lotacao and u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'lotacao' => $value,
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('b')
                    ->orderBy('b.descricao');

            }elseif($type == '2'){

                $type_filter = "Procurador: ";

                $qb = $em->getRepository(User::class)

                    ->createQueryBuilder('u')
                    ->select('u.nome')
                    ->where('u.id = :userid')
                    ->setParameters(
                        array(
                            'userid' => $value
                        )
                    )->getQuery()->getSingleResult();

                $value_filter = $qb['nome'];

                $query = $repository->createQueryBuilder('u')
                    ->select('b.descricao as especializada, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->where('u.user = :usuario and u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'usuario' => $value,
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('b')
                    ->orderBy('b.descricao');

            }else{

                $type_filter = "Tipo de Ato: ";

                $qb = $em->getRepository(TipoDeAto::class)

                    ->createQueryBuilder('u')
                    ->select('u.descricao')
                    ->where('u.id = :atoid')
                    ->setParameters(
                        array(
                            'atoid' => $value
                        )
                    )->getQuery()->getSingleResult();

                $value_filter = $qb['descricao'];

                $query = $repository->createQueryBuilder('u')
                    ->select('b.descricao as especializada, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->where('c.id = :ato and u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'ato' => $value,
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('b')
                    ->orderBy('b.descricao');
            }
        }

        /* GRÁFICO EM FORMA DE PIZZA */
        $result = array();
        array_push($result, ['Especializada', 'Pontos']);
        $qry = $query->getQuery()->getResult();
        foreach ($qry as $k => $v) {
            array_push($result, [$v['especializada'], floatval($v['pontos'])]);
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            $result
        );

        $pieChart->getOptions()->setFontSize(11);
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('right');


        /* GRÁFICO EM FORMA DE TABELA */
        $result = array();
        array_push($result, ['Especializada', 'Nº de Atos', 'Produtividade']);
        $qry = $query->getQuery()->getResult();
        $totpts = 0;
        $totats = 0;
        foreach ($qry as $k => $v) {
            array_push($result, [
                $v['especializada'],
                floatval($v['atos']),
                floatval($v['pontos'])
            ]);
            $totpts += floatval($v['pontos']);
            $totats += floatval($v['atos']);
        }

        array_push($result, [
            'TOTAL GERAL',
            $totats,
            $totpts
        ]);

        $table = new TableChart();
        $table->getData()->setArrayToDataTable(
            $result
        );
        $table->getOptions()->setAllowHtml(true);
        $table->getOptions()->setShowRowNumber(true);
        $table->getOptions()->setHeight('30%');
        $table->getOptions()->setWidth('50%');

        $template = $this->render('esp/produtividade/reports/esp_partial.html.twig',
                array(
                    'typefilter' => $type_filter,
                    'valuefilter' => $value_filter,
                    'filtertype' => $type,
                    'filtervalue' => $value,
                    'piechart' => $pieChart,
                    'tablechart' => $table,
                    'dateini' => $dateini,
                    'datefim' => $datefim

                ))->getContent();

        return new JsonResponse($template);
    }

    /**
     * @Route("/esp/produtividade/proc-reports", name="esp_produtividade_proc-reports")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function procreports(Request $request)
    {

    }


    /**
     * @Route("/esp/produtividade/tpa-reports", name="esp_produtividade_tpa-reports")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function tpareports(Request $request)
    {

    }

    /**
     * @Route("/esp/produtividade/esp-filters", name="esp_produtividade_esp-filters")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function filtervalues(Request $request)
    {
        $type = $request->get('_filterType');

        $em = $this->getDoctrine()->getManager();
        $result = null;
        switch ($type){

            case '1':

                $repository = $em->getRepository(Ato::class);
                $query = $repository->createQueryBuilder('u')
                    ->select('DISTINCT b.id, b.descricao')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->groupBy('b')
                    ->orderBy('b.descricao');
                $result = $query->getQuery()->getResult();
                break;

            case '2':

                $repository = $em->getRepository(User::class);
                $query = $repository->createQueryBuilder('u')
                    ->select("u.id, u.nome as descricao")
                    ->where("u.roles like '%ROLE_ESP%'")
                    ->orderBy('u.nome');
                $result = $query->getQuery()->getResult();
                break;

            default:
                $repository = $em->getRepository(TipoDeAto::class);
                $query = $repository->createQueryBuilder('u')
                    ->select("u.id, u.descricao")
                    ->orderBy('u.descricao');
                $result = $query->getQuery()->getResult();
                break;
        }
        return new JsonResponse($result);
    }

}