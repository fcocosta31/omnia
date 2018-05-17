<?php

namespace App\Entity\dti\printers;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Status
 * @package App\Entity\dti\printers
 */
class Status{
    
    
    public function impressoras($imps){

        foreach ($imps as $p){

            $preuri = 'http://';
            $urlinfo = $preuri.$p->getEndereco().'/cgi-bin/dynamic/printer/config/reports/devicestatistics.html';
            $uristatus = $preuri.$p->getEndereco().'/cgi-bin/dynamic/printer/PrinterStatus.html';
            $uristatusbar = $preuri.$p->getEndereco().'/cgi-bin/dynamic/topbar.html';

            //Carregando dados das impressoras
            /*************************************************************************/
            $wc = new WebCrawler();

            $rows = $wc->dadosstatus($p->getEndereco(), $uristatus, $urlinfo);
            $p->setOnOff($rows[0]);
            if($p->getOnOff() == 'LIGADA') {

                $statusbar = $wc->getStatusBar($uristatusbar);

                $p->setModelo($rows[1]);
                $p->setSerial($rows[2]);
                $p->setStatusToner($rows[3]);
                $p->setStatusImagem($rows[4]);

                if(strlen($statusbar[2]) == 13){
                    $p->setMensagem($statusbar[1]);
                }else{
                    $p->setMensagem($statusbar[1]."[".$statusbar[2]."]");
                }

                if(sizeof($rows) > 5){
                    $troca = $rows[5];
                    if(strlen($troca) == 10){
                        $p->setUltimaTroca(date('Y-m-d',strtotime($troca)));
                    }else{
                        $p->setOnOff('ERRO');
                        $p->setUltimaTroca(null);
                        $p->setStatusToner('0%');
                        $p->setStatusImagem('0%');
                    }
                }else{
                    $p->setOnOff('ERRO');
                    $p->setUltimaTroca(null);
                    $p->setStatusToner('0%');
                    $p->setStatusImagem('0%');
                }

            }else{
                $p->setModelo('');
                $p->setSerial('');
                $p->setStatusToner('0%');
                $p->setStatusImagem('0%');
                $p->setUltimaTroca(null);
                $p->setMensagem("Sem status!");
            }

        }
    }
    
}