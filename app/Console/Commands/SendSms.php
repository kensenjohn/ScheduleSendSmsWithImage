<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use DB;
use Services_Twilio;

class SendSms extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'send_scheduled_sms';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Send out SMS as per schedule.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()  
	{
		$currentDateTime = date('Y-m-d H:i:s'); //This returns time in GMT. The query will pick up records with Schedule Time in current GMT time.
		$endDateTime = date('Y-m-d H:i:s', strtotime('+2 minutes', strtotime($thcurrentDateTime) )); // select two minutes from current time as end time of range.
		$resultStatus = DB::select('SELECT * FROM sms_scheduler WHERE SCHEDULE_TIME>=? AND SCHEDULE_TIME<? AND SENT = ?', array($currentDateTime,$endDateTime ,0) );
	 
	 	// set your AccountSid and AuthToken from www.twilio.com/user/account
		$AccountSid = "ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
		$AuthToken = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
		 
		$client = new Services_Twilio($AccountSid, $AuthToken);

	    foreach ($resultStatus as $scheduleRecords) {

	    	// twilio API to send SMS -> sendMessage( FromNum, ToNum, TextMessageBody, ArrayOfHttpImages )
		    $message = $client->account->messages->sendMessage(
		        "xxx-xxx-xxxx",
		 		$scheduleRecords->PHONE_NUMBER , 
		        "Please publish to Instagram-Thank You Tail Wind",
		        array("http://www.tailwindapp.com/img/tailwind-logo.png")
	    	); // include multiple images in the array above. s()

		    // Marking all rows to Sent so that they will not be picked up again.
	    	DB::update('UPDATE sms_scheduler SET SENT = 1 WHERE SCHEDULER_ID=?', array( $scheduleRecords->SCHEDULER_ID )  );

		 	// Display a confirmation message on the screen
			print_r( array_values( (array)$scheduleRecords ));
	    }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['example', InputArgument::OPTIONAL, 'An example argument.'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['example', null, InputOption::VALUE_NONE, 'An example option.', null],
		];
	}

}
