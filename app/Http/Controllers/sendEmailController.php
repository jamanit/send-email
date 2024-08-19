<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;

class sendEmailController extends Controller
{
    public function index()
    {
        return view('email.email');
    }

    public function send_email()
    {
        $data = [
            'text' => 'Ini text email...',
        ];

        $email_target = 'rikidavidtra.2310@gmail.com';

        Mail::to($email_target)->send(new sendEmail($data));

        return redirect()->route('email')->with('pesan', 'Email behasil terkirim.');
    }
}
