<?php 

namespace App\Library;
use Input;

class File_upload
{
	public function __construct()
	{
	}

	public function image_upload($image_name)
	{
		$destinationPath = 'image';
		$extension = Input::file($image_name)->getClientOriginalExtension(); 

	    $fileName = rand(11111,99999).'.'.$extension;

	    Input::file($image_name)->move($destinationPath, $fileName); 
	    return $fileName;
	}

	public function pdf_upload($pdf_name)
	{
		$destinationPath = 'pdf';
		$extension = Input::file($pdf_name)->getClientOriginalExtension(); 

	    $fileName = rand(11111,99999).'.'.$extension;
	    Input::file($pdf_name)->move($destinationPath, $fileName); 
	    return $fileName;
	}
}
?>