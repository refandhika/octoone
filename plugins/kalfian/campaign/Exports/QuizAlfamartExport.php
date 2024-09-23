<?php

namespace kalfian\campaign\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use RainLab\User\Models\User;

//load models
use kalfian\campaign\Models\AlfamartQuiz;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class QuizAlfamartExport implements FromCollection, WithHeadings
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

            $users[] = [
                'FullName' 			=> ($user) ? $user->name.' '.$user->surname : '',
                'Email'				=> ($user) ? $user->email : '',
                'JenisKelamin'		=> ($user) ? $user->jk : '',
                'TglLahir'			=> ($user) ? $user->tgl_lahir : '',
                'Telphone'			=> ($user) ? $user->telp : '',
                'Province'			=> ($user) ? $user->prof : '',
                'City'				=> ($user) ? $user->kota : '',
                'NomorPonta'	=> $row->no_ponta,
                'RasaDanAlasan'		=> $row->alasan,
                'TanggalSubmit'		=> $row->created_at,
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
            'Nomor Ponta',
            'Rasa dan Alasan',
            'Tanggal Submit'
        ];
    }

    private function getResult()
    {
    	$email = !empty($this->email) ? $this->email : '';

    	$quiz = AlfamartQuiz::with('user')->whereHas('user', function($user) use ($email) {
            if ($email) $user->where('email', $email);
        });

        if (!empty($this->start_date) && !empty($this->end_date)) {
            $quiz = $quiz->whereBetween('created_at',[$this->start_date, $this->end_date]);
        }

        $users = [];
        $quiz = $quiz->get();

        return $quiz;
    }
}