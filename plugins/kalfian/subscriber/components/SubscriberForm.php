<?php namespace Kalfian\Subscriber\Components;

use CMS\Classes\ComponentBase;

use Input;
use Validator;
use Redirect;
use Flash;
use ValidationException;

use Kalfian\Subscriber\Models\Subscriber;


class SubscriberForm extends ComponentBase{
	public function componentDetails(){

		return [
			'name' => 'Subscriber Form',
			'description' => 'Simple Subscriber Form'
		];
	}

	public function onSaveKalfian(){
		$data = post();
		$rules = ['email' => 'required|email|unique:kalfian_subscriber_,email'];
		
		$validasi = Validator::make($data,$rules);

		if($validasi->fails()){
			throw new ValidationException($validasi);
		}else{
			$subscriber = new Subscriber();
			$subscriber->email = Input::get('email');
			$subscriber->save();
			Flash::success('Thankyou for Subscribe!');
		}
	}
}