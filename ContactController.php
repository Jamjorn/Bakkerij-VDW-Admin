<?php
namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\UpdateClinicDescriptionFormRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class ContactController extends BaseController {

 // This function will show the view
 public function showForm()
 {
  return view('contact');
 }

 public function handleFormPost()
 {
  $input = Input::only('name','subject', 'email', 'message');

  $validation = Validator::make($input,
      array(
          'name' => 'required',
          'subject' => 'required',
          'email' => 'required|email',
          'message' => 'required',
      )
  );

   if ($validation->fails())
  {		
  		$messages = $validation ->messages();
  		$returnedMsg ="";
  		foreach($messages->all() as $message){

  			$returnedMsg = $returnedMsg + " - " + $message;
  		}
      return redirect()-> back()->withErrors($validation);
  }else { // the validation has not failed, it has passed


   // Send the email with the contactemail view, the user input
   Mail::send('contactemail', $input, function($message)
   {
       $message->from('n.rademakers@gmail.com', 'Nick R');

       $message->to('n.rademakers@gmail.com');
   });

   // Specify a route to go to after the message is sent to provide the user feedback
   return Redirect::to('thanks');
  }


 }

}