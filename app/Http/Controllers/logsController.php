<?php

namespace App\Http\Controllers;
use View;
use App\Logs;

class logsController extends Controller
{
    
    public function __construct()
    {
        
    }

    public function getLogs()
    {
		
        $logs = Logs::all()->toArray();
		$logsModel = New Logs();
		$arrErrosBytype = $logsModel->GetLogs();
		
        $data = array(
                'logs'  => $logs,
                'arrErrosBytype'   => $arrErrosBytype
);
        return View::make('index')->with($data);
    }
}


?>