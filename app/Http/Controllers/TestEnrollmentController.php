<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Notification;

class TestEnrollmentController extends Controller
{
    //
    public function sendtestnotification(){
        $user=User::first();

        $enrollmentData=[
            'boby'=>'you have a new notification',
            'enrollment'=>'we will reply you soon',
            'url'=>url('/'),
            'thankyou'=>'thank you for contacting us'
            
        ];

        // $user->notify(new TestEnrollment($enrollmentData));
        Notification::send($user,new TestEnrollment($enrollmentData));
      
    }
}
