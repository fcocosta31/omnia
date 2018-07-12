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
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ComboChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\TableChart;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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
    public function espReports(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Ato::class);

        $type_filter = "Todos: ";
        $value_filter = "Todos";

        $datefim = date("Y-m-d");
        $dateini = date("Y-m-d", strtotime("-6 months"));

        $query = $repository->createQueryBuilder('u')
            ->select('MONTH(u.emissao) as mes, b.descricao, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
            ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
            ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
            ->where('u.emissao between :dateini and :datefim')
            ->setParameters(array(
                'dateini' => $dateini,
                'datefim' => $datefim,
            ))
            ->groupBy('mes, b')
            ->orderBy('mes, b.descricao');

        $lotacoes = $repository->createQueryBuilder('u')
            ->select('distinct b.descricao')
            ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
            ->orderBy('b.descricao')
            ->getQuery()->getResult();


        /** GRÁFICO EM FORMA DE LINHAS **/
        $chart = $this->getLineChart($query, $lotacoes, $dateini, $datefim, $type_filter, $value_filter);


        /* GRÁFICO EM FORMA DE TABELA VAZIO */
        $table = new TableChart();
        $table->getData()->setArrayToDataTable(array(["..."]));


        return $this->render('esp/produtividade/reports/index.html.twig', array(
            'typefilter' => $type_filter,
            'valuefilter' => $value_filter,
            'chart' => $chart,
            'table' => $table,
            'dateini' => $dateini,
            'datefim' => $datefim
        ));

    }

    /**
     * @Route("/esp/produtividade/esp-filter-reports", name="esp_produtividade_esp-filter-reports")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function espFiltersReports(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Ato::class);

        $dateini = $request->get('_dateini');
        $datefim = $request->get('_datefim');

        $type = $request->get('_filterType');
        $value = $request->get('_filterValue');


        $value_filter = "Todos";


        if($type == '1'){

            $type_filter = "Especializada: ";

            if($value == '0'){

                $query = $repository->createQueryBuilder('u')
                    ->select('b.descricao, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
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
                $chart = $this->getPierChart($query, $dateini, $datefim, $type_filter, $value_filter, 0);
                /* GRÁFICO EM FORMA DE TABELA */
                $table = $this->getTabChart($query);


            }else{

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
                    ->select('c.nome as descricao, SUM(d.peso) as pontos, COUNT(d.peso) as atos')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.user', 'c', 'WITH', 'c.id = u.user')
                    ->innerJoin('u.tipodeato', 'd', 'WITH', 'd.id = u.tipodeato')
                    ->where('b.id = :lotacao and u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'lotacao' => $value,
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('c')
                    ->orderBy('c.nome');

                /* GRÁFICO EM FORMA DE BARRAS */
                $chart = $this->getBarHorChart($query, $dateini, $datefim, $type_filter, $value_filter);
                /* GRÁFICO EM FORMA DE TABELA */
                $table = $this->getTabChart($query);

            }



        }elseif($type == '2'){

            $type_filter = "Procurador: ";

            if($value == '0'){

                $query = $repository->createQueryBuilder('u')
                    ->select('b.nome as descricao, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                    ->innerJoin('u.user', 'b', 'WITH', 'b.id = u.user')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->where('u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('b')
                    ->orderBy('b.nome');

                /* GRÁFICO EM FORMA COMBO CHART BARRAS VERTICAIS */
                $chart = $this->getComboChart($query, $dateini, $datefim, $type_filter, $value_filter);
                /* GRÁFICO EM FORMA DE TABELA */
                $table = $this->getTabChart($query);


            }else{

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
                    ->select('c.descricao, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->where('u.user = :usuario and u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'usuario' => $value,
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('c')
                    ->orderBy('c.descricao');

                /* GRÁFICO EM FORMA DE BARRAS HORIZONTAIS */
                $chart = $this->getBarHorChart($query, $dateini, $datefim, $type_filter, $value_filter);
                /* GRÁFICO EM FORMA DE TABELA */
                $table = $this->getTabChart($query);

            }

        }elseif($type == '3'){

            $type_filter = "Tipo de Ato: ";

            if($value == '0'){

                $query = $repository->createQueryBuilder('u')
                    ->select('c.descricao, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                    ->where('u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('c')
                    ->orderBy('c.descricao');

                /* GRÁFICO EM FORMA DE PIZZA */
                $chart = $this->getPierChart($query, $dateini, $datefim, $type_filter, $value_filter, 0.4);
                /* GRÁFICO EM FORMA DE TABELA */
                $table = $this->getTabChart($query);


            }else{

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
                    ->select('c.nome as descricao, SUM(d.peso) as pontos, COUNT(d.peso) as atos')
                    ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                    ->innerJoin('u.user', 'c', 'WITH', 'c.id = u.user')
                    ->innerJoin('u.tipodeato', 'd', 'WITH', 'd.id = u.tipodeato')
                    ->where('d.id = :ato and u.emissao between :dateini and :datefim')
                    ->setParameters(array(
                        'ato' => $value,
                        'dateini' => $dateini,
                        'datefim' => $datefim,
                    ))
                    ->groupBy('c')
                    ->orderBy('c.nome');

                /* GRÁFICO EM FORMA DE BARRAS */
                $chart = $this->getBarHorChart($query, $dateini, $datefim, $type_filter, $value_filter);

                /* GRÁFICO EM FORMA DE TABELA */
                $table = $this->getTabChart($query);

            }

        }else{

            $type_filter = "Todos: ";

            $value_filter = "Todos";

            $query = $repository->createQueryBuilder('u')
                ->select('MONTH(u.emissao) as mes, b.descricao, SUM(c.peso) as pontos, COUNT(c.peso) as atos')
                ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                ->innerJoin('u.tipodeato', 'c', 'WITH', 'c.id = u.tipodeato')
                ->where('u.emissao between :dateini and :datefim')
                ->setParameters(array(
                    'dateini' => $dateini,
                    'datefim' => $datefim,
                ))
                ->groupBy('mes, b')
                ->orderBy('mes, b.descricao');

            $lotacoes = $repository->createQueryBuilder('u')
                ->select('distinct b.descricao')
                ->innerJoin('u.lotacao', 'b', 'WITH', 'b.id = u.lotacao')
                ->orderBy('b.descricao')
                ->getQuery()->getResult();


            /* GRÁFICO EM FORMA DE LINHAS */
            $chart = $this->getLineChart($query, $lotacoes, $dateini, $datefim, $type_filter, $value_filter);

            /* GRÁFICO EM FORMA DE TABELA VAZIO */
            $table = new TableChart();
            $table->getData()->setArrayToDataTable(array(["..."]));
        }

        $template = $this->render('esp/produtividade/reports/esp_partial.html.twig',
            array(
                'typefilter' => $type_filter,
                'valuefilter' => $value_filter,
                'filtertype' => $type,
                'filtervalue' => $value,
                'chart' => $chart,
                'table' => $table,
                'dateini' => $dateini,
                'datefim' => $datefim

            ))->getContent();

        return new JsonResponse($template);

    }


    /**
     * @Route("/esp/produtividade/export-image-chart", name="esp_produtividade_export-image-chart")
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function exportImageChart(Request $request)
    {
        $imgdata = $request->get("imageData");

        $template =  $this->render('esp/produtividade/reports/esp_img.html.twig', array(
            'imglink' => $imgdata
        ))->getContent();

        return new JsonResponse($template);
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

                $repository = $em->getRepository(Lotacao::class);
                $query = $repository->createQueryBuilder('u')
                    ->select('DISTINCT u.id, u.descricao')
                    ->innerJoin('u.tiposdeato', 't')
                    ->orderBy('u.descricao');
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


    function getPierChart($query, $dateini, $datefim, $type, $value, $piehole){

        $chart = new PieChart();

        if($query->getQuery()->getResult()) {
            $result = array();
            array_push($result, ['Descrição', 'Produtividade']);
            $qry = $query->getQuery()->getResult();
            foreach ($qry as $k => $v) {
                array_push($result, [$v['descricao'], floatval($v['pontos'])]);
            }

            $chart->getData()->setArrayToDataTable(
                $result
            );
            $chart->getOptions()->setPieHole($piehole);
            $chart->getOptions()->setFontSize(11);
            $chart->getOptions()->setTitle($type . ": " . $value . " - período: " . date("d/m/Y", strtotime($dateini)) . " a " . date("d/m/Y", strtotime($datefim)));
            $chart->getOptions()->setHeight(500);
            $chart->getOptions()->setWidth(900);
            $chart->getOptions()->getLegend()->setPosition('right');
        }else{
            $chart->getData()->setArrayToDataTable(array(["..."]));
        }
        return $chart;
    }

    function getTabChart($query){

        $table = new TableChart();

        if($query->getQuery()->getResult()) {
            $result = array();
            array_push($result, ['Descrição', 'Nº de Atos', 'Produtividade']);
            $qry = $query->getQuery()->getResult();
            $totpts = 0;
            $totats = 0;
            foreach ($qry as $k => $v) {
                array_push($result, [
                    $v['descricao'],
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

            $table->getData()->setArrayToDataTable(
                $result
            );
            $table->getOptions()->setAllowHtml(true);
            $table->getOptions()->setShowRowNumber(true);
            $table->getOptions()->setHeight('auto');
            $table->getOptions()->setWidth('80%');
        }else{
            $table->getData()->setArrayToDataTable(array(["..."]));
        }

        return $table;
    }

    function getBarHorChart($query, $dateini, $datefim, $type, $value){
        $chart = new BarChart();
        if($query->getQuery()->getResult()) {
            $result = array();
            array_push($result, ['Descrição', 'Produtividade']);
            $qry = $query->getQuery()->getResult();
            foreach ($qry as $k => $v) {
                array_push($result, [$v['descricao'], floatval($v['pontos'])]);
            }

            $chart->getData()->setArrayToDataTable(
                $result
            );
            $chart->getOptions()->setTitle($type . ": " . $value . " - período: " . date("d/m/Y", strtotime($dateini)) . " a " . date("d/m/Y", strtotime($datefim)));
            $chart->getOptions()->getHAxis()->setTitle('Produtividade');
            $chart->getOptions()->getHAxis()->setMinValue(0);
            $chart->getOptions()->getLegend()->setPosition('none');
            $chart->getOptions()->setFontSize(12)
                ->setHeight(500)
                ->setWidth(900);
        }else{
            $chart->getData()->setArrayToDataTable(array(["..."]));
        }
        return $chart;
    }

    function getComboChart($query, $dateini, $datefim, $type, $value){
        $chart = new ComboChart();
        if($query->getQuery()->getResult()) {
            $result = array();
            array_push($result, ['Descrição', 'Produtividade']);
            $qry = $query->getQuery()->getResult();
            foreach ($qry as $k => $v) {
                array_push($result, [$v['descricao'], floatval($v['pontos'])]);
            }

            $chart->getData()->setArrayToDataTable(
                $result
            );
            $chart->getOptions()->setTitle($type . ": " . $value . " - período: " . date("d/m/Y", strtotime($dateini)) . " a " . date("d/m/Y", strtotime($datefim)));
            $chart->getOptions()
                ->setFontSize(11)
                ->setHeight(500)
                ->setWidth(900);
            $chart->getOptions()->getVAxis()->setTitle("Produtividade");
            $chart->getOptions()->getLegend()->setPosition('none');
            $chart->getOptions()->setSeriesType('bars');
        }else{
            $chart->getData()->setArrayToDataTable(array(["..."]));
        }
        return $chart;
    }

    function getLineChart($query, $lotacoes, $dateini, $datefim, $type, $value){

        $chart = new LineChart();

        if($query->getQuery()->getResult()){
            $esps = array("MES");
            $result = array();

            foreach ($lotacoes as $k => $v){
                array_push($esps, $v['descricao']);
            }

            array_push($result, $esps);

            $qry = $query->getQuery()->getResult();
            $mesant = intval(0);

            setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
            date_default_timezone_set( 'America/Sao_Paulo' );

            foreach ($qry as $k => $v) {

                $key = array_search($v['descricao'], $esps);

                if($mesant != intval($v['mes'])){
                    if(isset($value_array)){

                        array_push($result, $value_array);

                        $monthNum  = intval($v['mes']);
                        $dateObj   = \DateTime::createFromFormat('!m', $monthNum);
                        $monthName = strftime( '%b', $dateObj -> getTimestamp() );#$dateObj->format('M'); // March

                        $value_array = array($monthName);

                        $mesant = intval($v['mes']);

                        for($i = 1; $i < sizeof($esps); $i++){
                            if($key == $i){
                                $value_array[$i] = floatval($v['pontos']);
                            }else{
                                $value_array[$i] = floatval(0);
                            }
                        }

                    }else{
                        $monthNum  = intval($v['mes']);
                        $dateObj   = \DateTime::createFromFormat('!m', $monthNum);
                        $monthName = strftime( '%b', $dateObj -> getTimestamp() );#$dateObj->format('M'); // March

                        $value_array = array($monthName);

                        $mesant = intval($v['mes']);
                        for($i = 1; $i < sizeof($esps); $i++){
                            if($key == $i){
                                $value_array[$i] = floatval($v['pontos']);
                            }else{
                                $value_array[$i] = floatval(0);
                            }
                        }
                    }
                }else{
                    for($i = 1; $i < sizeof($esps); $i++){
                        if($key == $i){
                            $value_array[$i] = floatval($v['pontos']);
                        }
                    }
                    $mesant = intval($v['mes']);
                }
            }

            array_push($result, $value_array);

            $chart->getData()->setArrayToDataTable(
                $result
            );

            $chart->getOptions()->setTitle($type.": ".$value." - período: ".date("d/m/Y", strtotime($dateini))." a ".date("d/m/Y", strtotime($datefim)))
                ->setFontSize(11)
                ->setHeight(500)
                ->setWidth(900)
                ->setCurveType('function')
                ->setLineWidth(4)
                ->getLegend()->setPosition('right');
        }else{
            $chart->getData()->setArrayToDataTable(array(["..."]));
        }

        return $chart;
    }

}