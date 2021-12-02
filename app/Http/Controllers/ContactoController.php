<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
class ContactoController extends Controller
{
    public function index() {
        return view('contacto.index');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'coreo'=>'required|email',
            'mensaje'=> 'required'
        ]);
        $correo = new ContactanosMailable($request->all());

        Mail::to('denisenriquebaca13@gmail.com')->send($correo);
        return redirect()->route('contacto.index')->with('info', 'puto');
    }
}
