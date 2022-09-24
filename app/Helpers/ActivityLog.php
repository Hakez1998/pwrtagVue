<?php

namespace App\Helpers;
use App\Models\ActivityLog as LogActivityModel;
use App\Models\CustomerService;
use App\Models\User;
use App\Models\Workshop;
use Exception;
use Request;
use Illuminate\Support\Facades\Auth;

class ActivityLog {

	public static function addToLog($subject) {
        
		$log = [];
		$log['subject'] = $subject;
		try {
			$log['user_type'] = User::find(Auth::id())->name;
		}
		catch (Exception $e) {
			$log['user_type'] = 'visitor';
		}
		$log['url'] = Request::url();
		$log['ipv4'] = Request::ip();
		$log['device'] = Request::header('user-agent');
		LogActivityModel::create($log);
	}

	public static function logActivityLists($type) {
		if($type == 'visitor')
			return LogActivityModel::where('user_type', $type)->latest()->get();
		else 
			return LogActivityModel::where('user_type', '!=', 'visitor')->latest()->get();
	}

}