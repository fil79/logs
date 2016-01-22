<?php

namespace Wadsys;
use Illuminate\Database\Eloquent\Model;
use DB;
class Logs extends Model
{
    
	protected $table = 'logs';
   
    public function GetLogs(){
		$logs = DB::table('logs')
		                 ->select('error_type', DB::raw('count(*) as total'))
		                 ->groupBy('error_type')
		                 ->get();
        return $logs;          
    }
}