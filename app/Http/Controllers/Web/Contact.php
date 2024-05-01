<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contact as ContactMail;

class Contact extends Controller
{
    public function sendContact(Request $request)
    {

        $rules = [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, [
            'required' => 'Campo obligatorio',
            'email' => 'Email Invalido',
            'numeric' => 'Telefono no válido'
        ]);

        if($validator->fails()) {
            return redirect()->route('home.index')
                ->withErrors($validator)
                ->withInput();
        }

        $messageC = $request->get('message');
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'messageC' => $messageC
        ];
        $sendMail = Mail::to(config('mail.from.to'))->send(new ContactMail($data));

        if($sendMail){
            $request->session()->flash('success', 'Enviado correctamente. Resolveremos su duda lo antes posible');
        } else {
            $request->session()->flash('error', 'Se ha producido un error, intentelo más tarde.');
        }

        return redirect()->back();
    }
}
