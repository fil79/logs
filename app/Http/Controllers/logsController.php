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
		return View::make('index')->with('logs', $logs);
    }
}


?>