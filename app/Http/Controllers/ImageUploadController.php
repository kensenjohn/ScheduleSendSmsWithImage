<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class ImageUploadController extends Controller {
	public function upload( Request $request ) {

		$file = array('image' => $request->file('image'));
		$fileName = '';
		$validator = Validator::make(
            $file, array('image'  => 'required')
        );
        if ( $validator->fails() ) {

        } else {

			if ($request->file('image')->isValid()) {
				$destinationPath =  public_path() . '/uploads/'; // upload path -> /public/uploads/
      			$extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
      			$fileName = rand(11111,99999).'.'.$extension; // renameing image to a random number. Ideally should use GUID to prevent overwriting duplicate images.

      			$request->file('image')->move($destinationPath, $fileName); // uploading file to given path

			}
        }
        //return Response::json(array('filename' => $fileName));
        return $arrayName = array('filename' => $fileName );
	}
}