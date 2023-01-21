<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function showForm(Request $request) {
        return view('contact/contact');
    }

    public function storeForm(Request $request) {
        $request->validate( [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'subject'=>'required',
          'msg' => 'required'
       ]);

       ContactUs::create($request->all());

       Mail::send('email', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'subject' => $request->get('subject'),
        'msg' => $request->get('msg'),
    ), function($msg) use ($request){
        $msg->from($request->email);
        $msg->to('harold@staghorn-labs.com', 'Hello Admin')->subject($request->get('subject'));
    });

    return back()->with('success', 'Thanks for contacting us.');
  }
}
