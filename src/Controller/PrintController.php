<?php

namespace Controller;


use Manager\Request;
use Model\PrintFilter;

class PrintController extends Controller
{
    CONST RESOURCES_DIR = __DIR__."/../../resources/";
    public function indexAction(Request $request)
    {
        $printFilter = new PrintFilter();
        $forms = $this->updateModel($request, $printFilter);

        $data = (array)$printFilter;

        $this->render("Print/index.php", ['forms'=>$forms, 'data'=>$data, 'dir'=>self::RESOURCES_DIR]);
    }

    public function ToPrintAction(Request $request)
    {
        $printFilter = new PrintFilter();
        $this->updateModel($request, $printFilter);

        $pathToScan = __DIR__."/../../resources/"
            .$printFilter->getProject()."/"
            .$printFilter->getYear()."/"
            .$printFilter->getDayMonth()."/"
            .$printFilter->getTour();

        $scan = scandir($pathToScan);
        $data = [];
        if(in_array("filesMap.csv", $scan))
        {
            $jsonFile = file($pathToScan."/filesMap.csv");
            foreach ($jsonFile as $line)
            {
                $data[] = json_decode($line, 1);
            }

        }

        if(isset($_POST['print']))
        {
            //echo $_POST['index'];
            $invoicePath = __DIR__."/../../resources/".$pathToScan."/".$data[$_POST['index']]['document_number'];

            exec("lp -d ".$this->param()['subParams']['invoices']. " -o fit-to-page -o media=a4 ".$invoicePath);
        }

        $this->render("/Print/ToPrint.php", ['data'=>$data]);

    }
}