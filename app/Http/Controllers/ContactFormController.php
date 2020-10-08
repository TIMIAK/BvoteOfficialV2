<?php

namespace App\Http\Controllers;

use App\contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contact.create');
    }
    public function store(ContactRequest $request){
        // dd($request->all());
        $data = $request->all();
        Mail::to('akiodetimothy2017@gmail.com')->send(new ContactFormMail($data));

        contact::create($request->all());
        return redirect()->back()->with('success','Thank you for your response,Our team will come back to you within a matter of hours to help you.');
    }
}
