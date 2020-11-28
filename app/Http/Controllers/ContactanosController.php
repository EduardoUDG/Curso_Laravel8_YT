<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMaliable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);


        $correo = new ContactanosMaliable($request->all());
        Mail::to('PanaderiaSantaCruz@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
