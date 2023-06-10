<?php

namespace App\Console\Commands;

use App\Models\company;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendScheduledEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:check-attendance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send scheduled emails';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function company_name()
    {
        $company = company::select('company_name', 'id_company')
            ->where('id_company', auth()->user()->id_company)
            ->get();
        $company_name = $company[0]->company_name . 'test';

        return $company_name;
    }

    public function handle()
    {
        // Ganti dengan logika Anda untuk mengirim email
        // Mail::raw('Contoh pesan email', function ($message) {
        // $company = company::select('id_company', 'company_name')->first();
        // $employee = User::select('email')
        //     ->where('id_company', $company->id_company)
        //     ->where('id_role', '!=', 1)
        //     ->get();

        // foreach ($employees as $employee) {
        //     $message->to($employee->email);
        // }

        // $message->subject($company->company_name);

        //     $employee = User::select('email', 'id_company')
        //         ->where('id_role', '!=', 1)
        //         ->get();

        //     $email_company = [];
        //     foreach ($employee as $email_employee) {
        //         if ($message->to($email_employee->email)) {
        //             $company_name = company::select('companies.company_name', 'users.email')
        //                 ->join('users', 'users.id_company', '=', 'companies.id_company')
        //                 ->where('users.email', '=', $email_employee->email)
        //                 ->first();
        //             $email_company[$email_employee->email] = $company_name;

        //             $message->subject($email_company[$email_employee->email]);
        //             // array_splice($company_name, 0, count($company_name));
        //         }
        //     }
        // });
        Mail::raw('Contoh pesan email', function ($message) {
            $company = company::select('id_company', 'company_name')->first(); // Mengambil satu baris data
            $employees = User::select('email', 'name') // Menambahkan kolom 'name' untuk mendapatkan nama karyawan
                ->where('id_company', $company->id_company)
                ->where('id_role', '!=', 1)
                ->get();

            foreach ($employees as $employee) {
                $message->to($employee->email);
                $subject = 'Halo, ' . $employee->name . '! - ' . $company->company_name; // Membuat subjek dinamis dengan menggunakan nama karyawan
                $message->subject($subject);
            }
        });

        $this->info('Email terkirim!');
    }
}
