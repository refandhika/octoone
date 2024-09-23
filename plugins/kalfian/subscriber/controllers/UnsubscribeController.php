<?php

namespace Kalfian\Subscriber\Controllers;

use \Backend\Classes\Controller;
use Carbon\Carbon;
use Kalfian\Subscriber\Models\Subscriber;
use \Request;
use \Response;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UnsubscribeController extends Controller
{
  public function __invoke()
  { 
        $inputString   = Request::getRequestUri();
        $data          = parse_str ( parse_url ( $inputString , PHP_URL_QUERY ) , $params );
        $cmsController = new \Cms\Classes\Controller;
       
        if(!$params)
           return Response::make( $cmsController->render("/404"), 404);

        $email         = $params['email'];
       
        try {
            $id        = Crypt::decrypt($params['data']);
        }
        catch (DecryptException $ex) {
            return Response::make( $cmsController->render("/404"), 404);
        }
        
        $subs          = Subscriber::where(['id'=>$id,'email'=>$email])->first();
       
        if(!$subs)
           return Response::make( $cmsController->render("/404"), 404);     
        
        $subs->unsubscribe_date = Carbon::now();
        $subs->forceDelete();
        
        return redirect()->to(url('/unsubscribe-page'))->with('data', 'true');
  }
}
