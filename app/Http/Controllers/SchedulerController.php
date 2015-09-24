<?php namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Response;
use Validator;
use DateTime;
use DB;

class SchedulerController extends Controller {
	public function save( ) {

		 $validator = Validator::make(
            Input::all(),
            [
                'schedule_date'  => 'required',
                'schedule_time'      => 'required',
                'phone_num'     => 'required',
                'uploaded_filename'    => 'required',
            ]
        );

		$resultStatus = false;
		$message = '';
		if ( $validator->fails() ) {
			$message = $validator->messages()->first();
            
        } else {
	        $scheduleDate =  Input::get('schedule_date');
			 $scheduleTime =  Input::get('schedule_time');
			 $formatTimeStamp = $scheduleDate." ".$scheduleTime;
			 $scheduleTimeStamp = DateTime::createFromFormat("j F, Y H:i A", $formatTimeStamp )->format("Y-m-d H:i:s"); //23 September, 2015 3:00 PM
			 
			 $phoneNum = Input::get('phone_num');
			 $uploadedFileName = Input::get('uploaded_filename');

			 $resultStatus = DB::insert('insert into SMS_SCHEDULER (SCHEDULE_TIME, IMAGE_NAME, PHONE_NUMBER, SENT) values (?, ?, ?, ?)', [ $scheduleTimeStamp , $uploadedFileName, $phoneNum, 0 ]);

			 if($resultStatus == true ) {
			 	$message = 'Schedule Successfully Saved.';
			 } else {
			 	$message = 'Oops!! There was an error saving your request. Please try again';
			 }
			 	
        }
		 
		 

        return  $arrayName = array('result' => $resultStatus, 'message' => $message );
	}
}