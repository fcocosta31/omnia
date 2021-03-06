<?php
/**
 * Created by PhpStorm.
 * User: francisco
 * Date: 12/11/18
 * Time: 09:18
 */

namespace App\Services;


use App\Entity\dai\rh\Employee;
use App\Entity\NotifyParams;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Array_;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class NotifyCommand extends Command
{

    private $mailer;
    private $entityManager;
    private $logger;
    private $container;


    public function __construct(\Swift_Mailer $mailer, EntityManagerInterface $entityManager, LoggerInterface $logger, ContainerInterface $container)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
        $this->container = $container;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName("app:notify-all")
            ->setDescription("Send e-mails according records in parameter")
            ->setHelp("This command allows you to notify users according parameters configurations");
        parent::configure(); // TODO: Change the autogenerated stub
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->notifyCadastro());
        //parent::execute($input, $output); // TODO: Change the autogenerated stub
    }

    public function notifyCadastro(){

        $datenow = new \DateTime();

        $itemsnotify = array();

        $repository = $this->entityManager->getRepository(Employee::class);

        $employees = $repository->createQueryBuilder('e')
            ->select('e.matricula, e.nome, c.descricao as cargo, e.datatermino, b.descricao as lotacao')
            ->innerJoin('e.departamento', 'b', 'WITH', 'b.id = e.departamento')
            ->innerJoin('e.cargo', 'c', 'WITH', 'c.id = e.cargo')
            ->where("not e.datatermino is NULL")
            ->orderBy('e.datatermino', 'ASC')
            ->getQuery()->getResult();

        $repository = $this->entityManager->getRepository(NotifyParams::class);

        $params = $repository->findBy(array('descricao' => 'Estagio'))[0];

        $periodicidade = $params->getPeriodicidade();

        $qtdedias = "";

        $mensagemdias = "Dias no array de estagiários: ";

        foreach ($employees as $e){
            $diff = $this->dateDifference($datenow, $e['datatermino']); //date_diff($datenow, $e['datatermino']);
            if( in_array($diff, $periodicidade, true) ){
                $qtdedias = $qtdedias."[".$diff."] ";
                array_push($itemsnotify, $e);
            }
        }

        $mensagem = "Não há notificações de estágio a serem enviadas!";

        if(!empty($itemsnotify)){

            $mensagem = "Notificação de estágio enviada com sucesso!";

            $mailFrom = $this->container->getParameter("mailer_user");

            $message = (new \Swift_Message("PGM-Estágios a vencer em ".$qtdedias."dias"));

            $imagem = $message->embed(\Swift_Image::fromPath($this->container->getParameter("images_directory")."water-mark2.jpg"));

            $addresses = explode(";", $params->getEmails());

            $message->setFrom($mailFrom)
                ->setBody(
                    $this->container->get("twig")->render(
                        'emails/termino-estagio.html.twig',
                        array(
                            "estagiarios" => $itemsnotify,
                            "prazo" => $qtdedias,
                            "img_src" => $imagem
                        )
                    ),
                    "text/html"
                );
            foreach ($addresses as $a){
                $enderecos[$a] = $a;
            }
            $message->setTo($enderecos);
            $this->mailer->send($message);
        }

        return $mensagem;
    }

    function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
    {
        if(strtotime($date_1) > strtotime($date_2)){
            return 0;
        }

        $datetime1 = $date_1;
        $datetime2 = $date_2;

        $interval = date_diff($datetime1, $datetime2);

        return $interval->format($differenceFormat) + 1;

    }

}