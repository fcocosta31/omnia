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
use App\Entity\User;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\TableChart;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
     * @Route("/esp/produtividade/reports", name="esp_produtividade_reports_index")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        if(!empty($request->get('_dateini'))){
            $dateini = $request->get('_dateini');
            $datefim = $request->get('_datefim');
        }else{
            $datefim = date("Y-m-d");
            $dateini = date("Y-m-d", strtotime("-1 months"));
        }

        $repository = $em->getRepository(Ato::class);

        $query = $repository->createQueryBuilder('u')
            ->select('b.descricao as especializada, 
                      (SUM(COALESCE(c.peso,0))+SUM(COALESCE(d.peso,0))) as pontos,
                      SUM(COALESCE(c.peso,0)) as atos,
                      SUM(COALESCE(d.peso,0)) as processos')
            ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
            ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
            ->leftJoin('u.tipodeprocesso', 'd', 'WITH', 'd.id = u.tipodeprocesso')
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
        foreach ($qry as $k => $v){
            array_push($result, [$v['especializada'], intval($v['pontos'])]);
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
        array_push($result, ['Especializada', 'Atos', 'Processos', 'Total']);
        $qry = $query->getQuery()->getResult();
        foreach ($qry as $k => $v){
            array_push($result, [
                    $v['especializada'],
                    intval($v['atos']),
                    intval($v['processos']),
                    intval($v['pontos'])
            ]);
        }

        $table = new TableChart();
        $table->getData()->setArrayToDataTable(
            $result
        );
        $table->getOptions()->setAllowHtml(true);
        $table->getOptions()->setShowRowNumber(true);
        $table->getOptions()->setHeight('30%');
        $table->getOptions()->setWidth('50%');



        $histogram = new Histogram();
        $histogram->getData()->setArrayToDataTable([
            ['Population'],
            [12000000],
            [13000000],
            [100000000],
            [1000000000],
            [25000000],
            [600000],
            [6000000],
            [65000000],
            [210000000],
            [80000000],
        ]);
        $histogram->getOptions()->setTitle('Country Populations');
        $histogram->getOptions()->setWidth(900);
        $histogram->getOptions()->setHeight(500);
        $histogram->getOptions()->getLegend()->setPosition('none');
        $histogram->getOptions()->setColors(['#e7711c']);
        $histogram->getOptions()->getHistogram()->setLastBucketPercentile(10);
        $histogram->getOptions()->getHistogram()->setBucketSize(10000000);



        $col = new ColumnChart();
        $col->getData()->setArrayToDataTable(
            [
                ['Time of Day', 'Motivation Level', ['role' => 'annotation'], 'Energy Level', ['role' => 'annotation']],
                [['v' => [8, 0, 0], 'f' => '8 am'],  1, '1', 0.25, '0.2'],
                [['v' => [9, 0, 0], 'f' => '9 am'],  2, '2',  0.5, '0.5'],
                [['v' => [10, 0, 0], 'f' => '10 am'], 3, '3',    1,  '1'],
                [['v' => [11, 0, 0], 'f' => '11 am'], 4, '4', 2.25,  '2'],
                [['v' => [12, 0, 0], 'f' => '12 am'], 5, '5', 2.25,  '2'],
                [['v' => [13, 0, 0], 'f' => '1 pm'],  6, '6',    3,  '3'],
                [['v' => [14, 0, 0], 'f' => '2 pm'],  7, '7', 3.25,  '3'],
                [['v' => [15, 0, 0], 'f' => '3 pm'],  8, '8',    5,  '5'],
                [['v' => [16, 0, 0], 'f' => '4 pm'],  9, '9',  6.5,  '6'],
                [['v' => [17, 0, 0], 'f' => '5 pm'], 10, '10',  10, '10']
            ]
        );
        $col->getOptions()
            ->setTitle('Motivation and Energy Level Throughout the Day')
            ->setWidth(900)
            ->setHeight(500);
        $col->getOptions()
            ->getAnnotations()
            ->setAlwaysOutside(true)
            ->getTextStyle()
            ->setAuraColor('none')
            ->setFontSize(14)
            ->setColor('#000');
        $col->getOptions()
            ->getHAxis()
            ->setFormat('h:mm a')
            ->setTitle('Time of Day')
            ->getViewWindow()
            ->setMin([7, 30, 0])
            ->setMax([17, 30, 0]);
        $col->getOptions()
            ->getVAxis()
            ->setTitle('Rating (scale of 1-10)');



        $bar = new BarChart();
        $bar->getData()->setArrayToDataTable([
            ['City', '2010 Population', '2000 Population'],
            ['New York City, NY', 8175000, 8008000],
            ['Los Angeles, CA', 3792000, 3694000],
            ['Chicago, IL', 2695000, 2896000],
            ['Houston, TX', 2099000, 1953000],
            ['Philadelphia, PA', 1526000, 1517000]
        ]);
        $bar->getOptions()->setTitle('Population of Largest U.S. Cities');
        $bar->getOptions()->getHAxis()->setTitle('Population of Largest U.S. Cities');
        $bar->getOptions()->getHAxis()->setMinValue(0);
        $bar->getOptions()->getVAxis()->setTitle('City');
        $bar->getOptions()->setWidth(900);
        $bar->getOptions()->setHeight(500);


        $line = new LineChart();
        $line->getData()->setArrayToDataTable(
            [
                [['label' => 'x', 'type' => 'number'], ['label' => 'values', 'type' => 'number'],
                    ['id' =>'i0', 'type' => 'number', 'role' =>'interval'],
                    ['id' =>'i1', 'type' => 'number', 'role' =>'interval'],
                    ['id' =>'i2', 'type' => 'number', 'role' =>'interval'],
                    ['id' =>'i2', 'type' => 'number', 'role' =>'interval'],
                    ['id' =>'i2', 'type' => 'number', 'role' =>'interval'],
                    ['id' =>'i2', 'type' => 'number', 'role' =>'interval']],
                [1, 100, 90, 110, 85, 96, 104, 120],
                [2, 120, 95, 130, 90, 113, 124, 140],
                [3, 130, 105, 140, 100, 117, 133, 139],
                [4, 90, 85, 95, 85, 88, 92, 95],
                [5, 70, 74, 63, 67, 69, 70, 72],
                [6, 30, 39, 22, 21, 28, 34, 40],
                [7, 80, 77, 83, 70, 77, 85, 90],
                [8, 100, 90, 110, 85, 95, 102, 110]
            ]
        );
        $line->getOptions()->setTitle('Line intervals, default');
        $line->getOptions()->setCurveType('function');
        $line->getOptions()->setLineWidth(4);
        $line->getOptions()->getLegend()->setPosition('none');


        $chart = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\LineChart();
        $chart->getData()->setArrayToDataTable([
            ['Month', 'Average Temperature', 'Average Hours of Daylight'],
            [new \DateTime('2014-01'),  -.5,  5.7],
            [new \DateTime('2014-02'),   .4,  8.7],
            [new \DateTime('2014-03'),   .5,   12],
            [new \DateTime('2014-04'),  2.9, 15.3],
            [new \DateTime('2014-05'),  6.3, 18.6],
            [new \DateTime('2014-06'),    9, 20.9],
            [new \DateTime('2014-07'), 10.6, 19.8],
            [new \DateTime('2014-08'), 10.3, 16.6],
            [new \DateTime('2014-09'),  7.4, 13.3],
            [new \DateTime('2014-10'),  4.4,  9.9],
            [new \DateTime('2014-11'), 1.1,  6.6],
            [new \DateTime('2014-12'), -.2,  4.5]
        ]);

        $chart->getOptions()->getChart()
            ->setTitle('Average Temperatures and Daylight in Iceland Throughout the Year');
        $chart->getOptions()
            ->setHeight(400)
            ->setWidth(900)
            ->setSeries([['axis' => 'Temps'], ['axis' => 'Daylight']])
            ->setAxes(['y' => ['Temps' => ['label' => 'Temps (Celsius)'], 'Daylight' => ['label' => 'Daylight']]]);


        return $this->render('esp/produtividade/reports/index.html.twig', array(
            'piechart' => $pieChart,
            'tablechart' => $table,
            'dateini' => $dateini,
            'datefim' => $datefim
        ));

    }
}