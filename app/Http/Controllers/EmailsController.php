<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\AttachementMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    //
    public function email(){
        // return new AttachementMail();
        Mail::to('ceze46321@gmail.com')->send( new AttachementMail());
    }
}
