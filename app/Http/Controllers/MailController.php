<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Sewa(Ovariz)',
            'body' => 'Ceci est pour tester le courrier électronique en utilisant SMTP avec la plateforme Gmail et les mails pro',
            'files' => [
                public_path('attachements/file-one.pdf'),
                public_path('attachements/file-two.png'),
            ]
        ];
        
        $mails = ['kobenandjao20@gmail.com', 'djaokhalil@gmail.com',];   

        Mail::to($mails)->send(new DemoMail($mailData));  

        dd("L'e-mail a été envoyé avec succès.");
    }
}
