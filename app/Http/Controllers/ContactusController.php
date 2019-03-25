<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactusController extends Controller
{
    //
    public function sendMail(Request $request){


      $request->validate([
            'email' => 'required|email',
            'firstName' => 'required|max:30',
            'lastName' => 'required|max:50',
            'telephone' => 'required|numeric|phone',
            'company' => 'required',
            'province' => 'required',
            'country' => 'required',
            // 'product' => 'required',
            'information' => 'required'
        ]);


        $data = array(
          'sender'         => 'sales@wintechmfc.com',
          'receiver'       => ['kkomjaturut@gmail.com','sales@wintechmfc.com'],
          'subject'        => 'คำถามจากลูกค้า (ระบบอัติโนมัติ)',
          'receivedTime'   => date("d-m-Y H:i:s",time() + 25200) ,
          'firstName'      => $request['firstName'],
          'lastName'       => $request['lastName'],
          'email'          => $request['email'],
          'telephone'      => $request['telephone'],
          'company'        => $request['company'],
          'province'       => $request['province'],
          'country'        => $request['country'],
          'product'        => $request['product'],
          'information'    => $request['information'],
          );

        // send a copy to customer
        Mail::send('template.mailtosales', $data, function ($m) use ($data) {

             $m->from($data['sender'],'automated system');
             $m->to($data['receiver']);
             $m->subject($data['subject']);

        });

        $mailSent = 0;
        // return back()->with('mailSent',$mailSent);


        return view('pages/contactus')->with('mailSent',$mailSent);

    }
}
