<?php

namespace kalfian\campaign\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;
use DB;
use Carbon\Carbon;
use Mail;
use Excel;
use Illuminate\Support\Facades\Validator;
use Auth;
use Storage;
use Intervention\Image\ImageManagerStatic as Image;

//load models
use kalfian\campaign\Models\IndomaretQuiz;
use kalfian\campaign\Models\IndomaretQuizStruk;
use kalfian\campaign\Models\AlfamartQuiz;

class FormController extends Controller
{
    public function __construct()
    {
    }

    public function indomaret(Request $request, Validator $validator)
    {	
    	$validator = Validator::make($request->all(), [
            'jumlah'            => 'required|numeric',
            'alasan'            => 'required'
        ]);

    	if ($validator->fails()) {
            return response()->json([
                'errors'    => $validator->errors()->all(),
                'status'    => 'failed'
            ]);
        } else {
	        $quiz = new IndomaretQuiz;
	    	$quiz->user_id = Auth::getUser()->id;
	    	$quiz->jumlah = $request->input('jumlah');
	    	$quiz->alasan = $request->input('alasan');
	    	$quiz->save();
	    	
	    	if ($request->hasFile('struk_upload')) {
	    		$struk_upload = $request->file('struk_upload');
	    		foreach ($struk_upload as $struk) {
	    			$random = rand();
					$image_struk = $random . '-' . time() . '-struk-indomaret.' . $struk->getClientOriginalExtension();

	    			if (filesize($struk) > 200000) {
	    				$img = Image::make($struk->getRealPath());
			            $img->resize(360, 403, function ($constraint) {
			                $constraint->aspectRatio();                 
			            });

			            $img->stream();

			            Storage::disk('local')->put('media/struk_indomaret/' . $image_struk, $img, 'public');
	    			} else {
	    				Storage::disk('local')->put('media/struk_indomaret/' . $image_struk, file_get_contents($struk->getRealPath()),'public');
	    			}

					$struk = new IndomaretQuizStruk;
					$struk->user_id = $quiz->user_id;
			    	$struk->quiz_id = $quiz->id;
			    	$struk->file_name = $image_struk;
			    	$struk->save();
	    		}
			}

			return response()->json([
				'status'	=> 'success'
			]);
		}
    }

    public function alfamart(Request $request, Validator $validator)
    {
    	$validator = Validator::make($request->all(), [
            'nomor_ponta'       => 'required',
            'alasan'            => 'required'
        ]);

    	if ($validator->fails()) {
            return response()->json([
                'errors'    => $validator->errors()->all(),
                'status'    => 'failed'
            ]);
        } else {
	    	$quiz = new AlfamartQuiz;
	    	$quiz->user_id = Auth::getUser()->id;
	    	$quiz->no_ponta = $request->input('nomor_ponta');
	    	$quiz->alasan = $request->input('alasan');
	    	$quiz->save();

	    	return response()->json([
				'status'	=> 'success'
			]);
	    }
    }
}