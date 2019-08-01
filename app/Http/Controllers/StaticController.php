<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\Career;

class StaticController extends Controller
{
    public function services()
    {
        return view('static_pages.services');
    }

    public function quality_assurance()
    {
        return view('static_pages.quality-assurance');
    }
    public function contact()
    {
        return view('static_pages.contact');
    }
    public function send_email(Request $request)
    {
        Mail::to('e@e.e')->send(new Contact($request->all()));
        return "Email sent Successfully, Thank you";
    }
    public function careers()
    {
        return view('static_pages.careers');
    }


    public function apply(Request $request)
    {
        // dd($request->all());
        // dd($request->hasFile('upload_letter'));
        // Mail::to('e@e.e')->send(new Career($request->all()));
        $data = $request->all();
        dd($request->file('upload_cv'));
        $cv = $request->file('upload_cv');
        $letter = $request->file('upload_letter');
        Mail::send('mail.application-mail', $data, function ($message) use ($data, $cv, $letter) {
            $message->from($data['email']);
            $message->to('e@e.e');
            $message->attachData($cv, 'CV');
            $message->attachData($letter, 'Lettre');
        });

        return "Email sent Successfully, Thank you";
    }
}
