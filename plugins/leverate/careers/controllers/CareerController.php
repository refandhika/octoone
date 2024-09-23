<?php

namespace Leverate\Careers\Controllers;

use \Response;
use \Request;
use \Db;
use \Backend\Classes\Controller;
use GuzzleHttp\Client;
use Leverate\Careers\Models\CareerCenter as CareersCenter;
use Leverate\Careers\Models\Article as CareerArticle;
use Carbon\Carbon as Carbon;

class CareerController extends Controller
{
	protected $headers;

    public function __construct() 
    {
        // Fetch the Site Settings object
       return $this->headers = array(
						 'Content-Type' => 'application/json',
				         'Access-Control-Allow-Credentials' => 'true',
				         'Access-Control-Allow-Origin' => 'https://www.frisianflag.com',
				         'AMP-Access-Control-Allow-Source-Origin' => 'https://www.frisianflag.com',
				         'Access-Control-Expose-Headers' => 'AMP-Access-Control-Allow-Source-Origin',
					);

    }

    
     public function getArticle()
    {
    
        $amount = get('page');
       

        if(empty($amount))
            {
                return response()->json(['message'=>'Resources Not Found','status'=> 404]);
            }

        $data = CareerArticle::where('is_enabled', 1)->orderBy('created_at','DESC')->paginate(5);                
        return response()
        ->json(['data'=>$data,'status'=>200])
        ->withHeaders($this->headers);
    }

}
