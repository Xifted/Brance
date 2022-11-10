<?php

namespace App\Http\Controllers;

use App\Http\Repository\GetDataRepository;
use Illuminate\Http\Request;
use App\Mail\BranceEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $repo = new GetDataRepository();
        $data = $repo->getData('homepage');
        //dd($data);
        return view('index', [
            'data' => $data,
        ]);
    }
    public function email(request $request){
        $data = [
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'pesan'=>$request->input('pesan')
        ];
        
        Mail::to("oneisfirst01@gmail.com")->send(new BranceEmail($data));
        return redirect('/#contact');
    }
}
