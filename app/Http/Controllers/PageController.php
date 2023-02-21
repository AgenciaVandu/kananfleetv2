<?php

namespace App\Http\Controllers;

use App\Mail\NewClient;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        $aliados = Section::where('name','aliados')->where('page','index')->first();
        $header = Section::where('name','header')->where('page','index')->first();
        return view('index',compact('aliados','header'));
    }

    public function aliados(){
        $aliados = Section::where('name','aliados')->where('page','index')->first();
        return view('aliados',compact('aliados'));
    }

    public function empresas(){
        $clientes = Section::where('name','clientes')->where('page','index')->first();
        return view('empresa',compact('clientes'));
    }

    public function sap(){
        $clientes = Section::where('name','clientes')->where('page','index')->first();
        return view('sap',compact('clientes'));
    }

    public function sendmail(Request $request){

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'bussines' => 'required',
            'city' => 'required',
            'option' => 'required',
            'policy' => 'required',
        ]);
        if ($request->policy == 'on') {
            Mail::to('recheverria@etecno.com.mx')->send(new NewClient($request));
            Mail::to('info@administraflotilla.com')->send(new NewClient($request));
            Mail::to('alianzas@etecno.com.mx')->send(new NewClient($request));
            Mail::to('jestefani@etecno.com.mx')->send(new NewClient($request));

            /* Mail::to('marencocode@gmail.com')->send(new NewClient($request));
            Mail::to('alvarbu@gmail.com')->send(new NewClient($request)); */
        }
        /* Mail::to('ripmarenko@gmail.com')->send(new NewClient($request)); */
        return back();
    }
}
