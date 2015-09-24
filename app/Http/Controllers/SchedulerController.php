<?php namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Response;
use Validator;

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
	}
}