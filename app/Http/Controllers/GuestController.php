<?php

namespace App\Http\Controllers;
use App\contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\PollSearchRequest;
use App\Http\Requests\ResultRequest;
use App\Mail\contact as MailContact;
use App\Polls;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GuestController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('verified')->only('contact');
    // }
    public function index(){
        return view('guest.home');
    }
    public function about(){
        return view('guest.about');
    }
    public function services(){
        return view('guest.services');
    }
}
