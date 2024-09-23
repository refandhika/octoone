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
use DateTime;
use RainLab\User\Models\User;
use Backend\Facades\BackendAuth;
use kalfian\campaign\Exports\QuizExport;
use kalfian\campaign\Exports\QuizAlfamartExport;

//load models
use kalfian\campaign\Models\IndomaretQuiz;
use kalfian\campaign\Models\IndomaretQuizStruk;

class ExportController extends Controller
{
    public function __construct()
    {
    }

    public function indomaret(Request $request, Validator $validator)
    {
        $email = $request->get('email');
        $startDate = !empty($request->get('start')) ? DateTime::createFromFormat('d/m/Y H:i:s', $request->get('start'))->format('Y-m-d H:i:s') : '';

        $endDate = !empty($request->get('end')) ? DateTime::createFromFormat('d/m/Y H:i:s', $request->get('end'))->format('Y-m-d H:i:s') : '';

        if ($request->get('end') == '∞ 23:59:59') {
            $endDate = date("Y-m-d H:i:s");
        }

        $code = $request->get('code');

        if (!empty($code) && $code = '1LWrUKJiUi99' && BackendAuth::check()) {

            if (!empty($startDate) && !empty($endDate)) {
                return (new QuizExport)->forDate($startDate, $endDate)->download('ReportQuiz.xlsx');
            } elseif (!empty($email)) {
                return (new QuizExport)->forDate('', '', $email)->download('ReportQuiz.xlsx');
            } else {
                return (new QuizExport)->download('ReportQuiz.xlsx');
            }
        }
    }

    public function alfamart(Request $request, Validator $validator)
    {
        $email = $request->get('email');
        $startDate = !empty($request->get('start')) ? DateTime::createFromFormat('d/m/Y H:i:s', $request->get('start'))->format('Y-m-d H:i:s') : '';

        $endDate = !empty($request->get('end')) ? DateTime::createFromFormat('d/m/Y H:i:s', $request->get('end'))->format('Y-m-d H:i:s') : '';

        if ($request->get('end') == '∞ 23:59:59') {
            $endDate = date("Y-m-d H:i:s");
        }

        $code = $request->get('code');

        if (BackendAuth::check()) {

            if (!empty($startDate) && !empty($endDate)) {
                return (new QuizAlfamartExport)->forDate($startDate, $endDate)->download('ReportQuiz.xlsx');
            } elseif (!empty($email)) {
                return (new QuizAlfamartExport)->forDate('', '', $email)->download('ReportQuiz.xlsx');
            } else {
                return (new QuizAlfamartExport)->download('ReportQuizAlfamart.xlsx');
            }
        }
    }
}