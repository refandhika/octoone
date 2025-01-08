<?php

namespace kalfian\campaign\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use RainLab\User\Models\User;

//load models
use kalfian\campaign\Models\IndomaretQuiz;
use kalfian\campaign\Models\IndomaretQuizStruk;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class QuizExport implements FromCollection, WithHeadings, WithEvents
{
	use Exportable;

    public function forDate(string $startDate = null, string $endDate = null, string $email = null)
    {
        $this->start_date = $startDate;
        $this->end_date = $endDate;
        $this->email = $email;
        
        return $this;
    }

    public function collection()
    {
    	$quiz = $this->getResult();
    	$users = [];

        foreach ($quiz as $row) {
    		$user = User::find($row->user_id);
    		$list_struk = IndomaretQuizStruk::where('quiz_id', $row->id)->get();

            $users[] = [
                'FullName' 			=> ($user) ? $user->name.' '.$user->surname : '',
                'Email'				=> ($user) ? $user->email : '',
                'JenisKelamin'		=> ($user) ? $user->jk : '',
                'TglLahir'			=> ($user) ? $user->tgl_lahir : '',
                'Telphone'			=> ($user) ? $user->telp : '',
                'Province'			=> ($user) ? $user->prof : '',
                'City'				=> ($user) ? $user->kota : '',
                'Alamat'			=> ($user) ? $user->alamat : '',
                'JumlahPurefarm'	=> $row->jumlah,
                'RasaDanAlasan'		=> $row->alasan,
                'TanggalSubmit'		=> $row->created_at,
                'Struk1'			=> isset($list_struk[0]) ? asset("storage/app/media/struk_indomaret/".$list_struk[0]->file_name) : '',
                'Struk2'			=> isset($list_struk[1]) ? asset("storage/app/media/struk_indomaret/".$list_struk[1]->file_name) : '',
                'Struk3'			=> isset($list_struk[2]) ? asset("storage/app/media/struk_indomaret/".$list_struk[2]->file_name) : '',
                'Struk4'			=> isset($list_struk[3]) ? asset("storage/app/media/struk_indomaret/".$list_struk[3]->file_name) : '',
                'Struk5'			=> isset($list_struk[4]) ? asset("storage/app/media/struk_indomaret/".$list_struk[4]->file_name) : '',
            ];
        }

        return collect($users);
    }

    public function headings(): array
    {
        return [
            'Full Name',
            'Email',
            'Jenis Kelamin',
            'Tgl Lahir',
            'Telphone',
            'Province',
            'City',
            'Alamat',
            'Jumlah Purefarm',
            'Rasa dan Alasan',
            'Tanggal Submit',
            'Struk 1',
            'Struk 2',
            'Struk 3',
            'Struk 4',
            'Struk 5'
        ];
    }

    private function getResult()
    {
    	$email = !empty($this->email) ? $this->email : '';

    	$quiz = IndomaretQuiz::with('user')->whereHas('user', function($user) use ($email) {
            if ($email) $user->where('email', $email);
        });

        if (!empty($this->start_date) && !empty($this->end_date)) {
            $quiz = $quiz->whereBetween('created_at',[$this->start_date, $this->end_date]);
        }

        $users = [];
        $quiz = $quiz->get();

        return $quiz;
    }

    public function registerEvents(): array
    {
    	$quiz = $this->getResult();

        return [
            AfterSheet::class    => function(AfterSheet $event) use ($quiz) {
            	$startRow = 2;
            	
            	foreach ($quiz as $row) {
                	$user = User::find($row->user_id);
	                if ($user) { 
	                    $list_struk = IndomaretQuizStruk::where('quiz_id', $row->id)->get();

	                	if (isset($list_struk[0])) $event->sheet->getCell('K'.$startRow)->getHyperlink()->setUrl(asset("storage/app/media/struk_indomaret/".$list_struk[0]->file_name));
	                	if (isset($list_struk[1])) $event->sheet->getCell('L'.$startRow)->getHyperlink()->setUrl(asset("storage/app/media/struk_indomaret/".$list_struk[1]->file_name));
	                	if (isset($list_struk[2])) $event->sheet->getCell('M'.$startRow)->getHyperlink()->setUrl(asset("storage/app/media/struk_indomaret/".$list_struk[2]->file_name));
	                	if (isset($list_struk[3])) $event->sheet->getCell('N'.$startRow)->getHyperlink()->setUrl(asset("storage/app/media/struk_indomaret/".$list_struk[3]->file_name));
	                	if (isset($list_struk[4])) $event->sheet->getCell('O'.$startRow)->getHyperlink()->setUrl(asset("storage/app/media/struk_indomaret/".$list_struk[4]->file_name));

	                	$startRow++;
	                }
                }
            },
        ];
    }
}