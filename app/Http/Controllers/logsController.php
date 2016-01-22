<?php

namespace Wadsys\Http\Controllers;
use View;
use Wadsys\Logs;

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