<?php
/**
 * Created by PhpStorm.
 * User: toor
 * Date: 21.08.18
 * Time: 12:51
 */

namespace Controller;

use Manager\MainManager;
use Manager\Request;
use Model\PrintFilter;

class Controller extends MainManager
{
    public function render($view, $var)
    {
        //foreach ($var as $key=>$item)
            //var_dump($item);
            //eval("$".$key." = ".$item.";");

        //var_dump($req->request());
        require __DIR__."/../Templates/".$view;
    }

    public function updateModel(Request $request, PrintFilter $printFilter)
    {
        $forms = [];
        if (isset($request->request()[2])) {
            $printFilter->setProject($request->request()[2]);
            $forms[1] = true;
        }
        if (isset($request->request()[3])) {
            $printFilter->setYear($request->request()[3]);
            $forms[2] = true;
        }
        if(isset($request->request()[4])) {
            $printFilter->setDayMonth($request->request()[4]);
            $forms[3] = true;
        }
        if(isset($request->request()[5])) {
            $printFilter->setTour($request->request()[5]);
            $forms[4] = true;
        }
        return $forms;
    }



}