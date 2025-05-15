<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function HomeFunction() { 

        return view('welcome');
    }


    public function contact_us() { 

        return view('contact_us');
    }

    public function send_email(Request $request) { 
     

$contact_mail= [
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'description' => $request->input('description'),
];

Mail::to('noReplay@Fortnite-Blog.com')->send(new AdminMail($contact_mail));

return redirect()->back()->with('message', "L'iscrizione è avvenuta con successo");

    }


    public function privacyFunction() { 

        return view('privacy');
    }


    
    public function PaginaChiSiamoFunction() { 

        return view('ChiSiamo');
    }

}
