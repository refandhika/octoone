<?php

namespace Leverate\Ramadan\Http\Controllers;

use \Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Backend\Classes\Controller;
use GuzzleHttp\Client;
use Leverate\Ramadan\Models\User as User;
use Leverate\Ramadan\Models\SkmMart as SkmMart;
use Leverate\Ramadan\Models\RtdMart as RtdMart;
use Leverate\Ramadan\Models\SkmMidi as SkmMidi;
use Leverate\Ramadan\Models\RtdMidi as RtdMidi;
use Carbon\Carbon as Carbon;
use Redirect;
use Session;
use Mail;
use Cookie;

class RamadanController extends Controller
{
	
    public function storeRedeem(Request $request)
    {    
        //validate the request
         $validator = Validator::make(
          $request->all(), [
           'email' => 'email',
           'phone' => 'required|regex:/^(08)/|digits_between:9,12'
           
         ],
         [
            'email.email'             => 'wrong',
            'phone.digits_between'    => 'wrong', 
            'phone.regex'             => 'wrong' 
         ]
     );
        //check if validate fail 
        if ($validator->fails()) {
            
            return redirect()->back()->with('data', $validator->messages());
        }

        if($request->all()){

            $name       = $request->name;
        	$product    = $request->product_category;
        	$market     = $request->market_place;
        	$email 	 	= $request->email;
            $date       = $request->date;
            $phone      = $request->phone;
            $gender     = $request->gender;
            
            if($market == 1 && $product == 1)
            {	 //check the cookie
                 if(Cookie::get('promo-1'))
                    {
                         return redirect()->back()->with('data', ['cookie'=>'Maaf Anda sudah memakai promo ini.']);
                    }
                  //check user if exists   
                  if(User::where('product_category_id',1)->where('market_place_id',1)->where(function($query) use($email,$phone){
                    $query->where('email','=',$email)
                   ->orWhere('phone','=',$phone);
               })->first())
                    {

                         return redirect()->back()->with('data', ['message'=>'true']);
                    }
                //get the code          
                $get_code = SkmMart::where('status',null)->first();

                //check the code
                if(!$get_code){
                         return redirect()->back()->with('data', ['message'=>'true']);
                }

                //update status into 1
                SkmMart::where('code',$get_code->code)->update(['status'=>1]);

                $promo    = 'promo-1';
                $code     = $get_code->code;
                
                $attributes = [
                'name'                => $name,
                'date'                => date('Y-m-d', strtotime($date)),
                'phone'               => $phone,
                'email'               => $email,
                'gender'              => $gender,
                'code'                => $code,
                'product_category_id' => $product,
                'market_place_id'     => $market

                ];

                User::forceCreate($attributes);

            }elseif($market == 1 && $product == 2){
              
                 $limit  = count(RtdMart::take(2000)->get());
                 $total  = count(RtdMart::where('status',1)->get());

                 //limit 2000
                 if($total >= $limit)
                 {
                   return redirect()->back()->with('data', ['message'=>'true']);
                 }

                 //check the cookie
                 if(Cookie::get('promo-2'))
                    {
                         return redirect()->back()->with('data', ['cookie'=>'Maaf Anda sudah memakai promo ini.']);
                    }
                 //check user if exists   
                 if(User::where('product_category_id',2)->where('market_place_id',1)->where(function($query) use($email,$phone){
                    $query->where('email','=',$email)
                   ->orWhere('phone','=',$phone);
               })->first())
                    {

                         return redirect()->back()->with('data', ['message'=>'true']);
                    }
                //get the code          
                $get_code = RtdMart::where('status',null)->first();

                //check the code
                 if(!$get_code){
                         return redirect()->back()->with('data', ['message'=>'true']);
                }

                //update directly status into 1
                RtdMart::where('code',$get_code->code)->update(['status'=>1]);

                $code     = $get_code->code;
                $promo    = 'promo-2';
                $attributes = [
                'name'                => $name,
                'date'                => date('Y-m-d', strtotime($date)),
                'phone'               => $phone,
                'email'               => $email,
                'gender'              => $gender,
                'code'                => $code,
                'product_category_id' => $product,
                'market_place_id'     => $market

                ];

                User::forceCreate($attributes);

            }elseif($market == 2 && $product == 1){
                //check the cookie 
                if(Cookie::get('promo-3'))
                    {
                         return redirect()->back()->with('data', ['cookie'=>'Maaf Anda sudah memakai promo ini.']);
                    }
               //check user if exists     
               if(User::where('product_category_id',1)->where('market_place_id',2)->where(function($query) use($email,$phone){
                    $query->where('email','=',$email)
                   ->orWhere('phone','=',$phone);
               })->first())
                    {

                         return redirect()->back()->with('data', ['message'=>'true']);
                    }
                //get the code                
                $get_code = SkmMidi::where('status',null)->first();

                 //check the code
                 if(!$get_code){
                         return redirect()->back()->with('data', ['message'=>'true']);
                }

                //update directly status into 1
                SkmMidi::where('code',$get_code->code)->update(['status'=>1]);

                $code     = $get_code->code;
                $promo    = 'promo-3';
                $attributes = [
                'name'                => $name,
                'date'                => date('Y-m-d', strtotime($date)),
                'phone'               => $phone,
                'email'               => $email,
                'gender'              => $gender,
                'code'                => $code,
                'product_category_id' => $product,
                'market_place_id'     => $market
                ];

                User::forceCreate($attributes);

            }else{
                //check cookies
                if(Cookie::get('promo-4'))
                    {
                         return redirect()->back()->with('data', ['cookie'=>'Maaf Anda sudah memakai promo ini.']);
                    }
               //check user if exists     
               if(User::where('product_category_id',2)->where('market_place_id',2)->where(function($query) use($email,$phone){
                    $query->where('email','=',$email)
                   ->orWhere('phone','=',$phone);
               })->first())
                    {

                         return redirect()->back()->with('data', ['message'=>'true']);
                    }       
                //get the code        
                $get_code = RtdMidi::where('status',null)->first();

                //check the code
                if(!$get_code){
                         return redirect()->back()->with('data', ['message'=>'true']);
                }
                //update status directly into 1
                RtdMidi::where('code',$get_code->code)->update(['status'=>1]);

                $code     = $get_code->code;
                $promo    = 'promo-4';
                $attributes = [
                'name'                => $name,
                'date'                => date('Y-m-d', strtotime($date)),
                'phone'               => $phone,
                'email'               => $email,
                'gender'              => $gender,
                'code'                => $code,
                'product_category_id' => $product,
                'market_place_id'     => $market
                ];

                User::forceCreate($attributes);

            }
            //define attributes by market place;
            if($market == 1){
                $market = "Alfamart";

                switch ($product) {
                    case '1':
                        $message = "Berikut adalah kode E-Voucher yang dapat anda gunakan untuk mendapatkan promo harga special potongan harga Rp. 2.000,- Frisian Flag Kental Manis kemasan kaleng 370gr di Alfamart seluruh Indonesia.";
                        $product = "SKM";
                        break;
                    case '2':
                        $message = "Berikut adalah kode E-Voucher yang dapat anda gunakan untuk mendapatkan promo harga spesial Rp. 9.900,- Frisian Flag Susu UHT 900ml di Alfamart di seluruh Indonesia.";
                        $product = "RTD";
                        break;
                }
            }else{
                $market = "Alfamidi";

                switch ($product) {
                    case '1':
                        $message = "Berikut adalah kode E-Voucher yang dapat anda gunakan untuk mendapatkan promo harga special potongan harga Rp. 2.000,- Frisian Flag Kental Manis kemasan kaleng 370gr di Alfamidi seluruh Indonesia.";
                        $product = "SKM";
                        break;
                    case '2':
                        $message = "Berikut adalah kode E-Voucher yang dapat anda gunakan untuk mendapatkan promo harga spesial Rp. 9.900,- Frisian Flag Susu UHT 900ml di Alfamidi di seluruh Indonesia.";
                        $product = "RTD";
                        break;
                }
            }

            $data = [
            	'product' => $product,
            	'market'  => $market,
                'messages'=> $message,
                'code'    => $code
            ];
            
            //send mail
            Mail::queue('leverate.ramadan::mail.active', $data, function ($message) use($email) {
                $message->to($email);
            });

           return redirect()->to(url('/aktivitas-kami/ramadan-istimewa/thank-you'))->with('data', $data)->withCookie(cookie()->forever($promo, $code));

        }
    }

}
