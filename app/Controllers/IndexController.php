<?php


namespace App\Controllers;


use App\Classes\Mail;
use App\Classes\Session;

class IndexController extends Controller
{
    public function show()
    {
        echo "This is index controller show";
        $mail = new Mail();
        $data = [
            'to' => 'hafsa.sathi2@gmail.com',
            'subject' => 'Welcome to my framework',
            'view' => 'welcome',
            'name' => 'Khalid Ahmed',
            'body' => 'Testing email template'
        ];
        if($mail->send($data)){
            print "Email sent successfully";
        }
        else{
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }

    public function info()
    {
        Session::add('admin', 'I m admin');
        if(Session::has('admin')){
            $msg = Session::get('admin');
        }

        return view('dashboard', ['admin'=>$msg]);
    }
}