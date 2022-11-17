<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeC extends Controller
{
    public function index(){
        return'ini halaman home';
    }
    public function about(){
        $user =  ['name' => 'ZAHRA', 'role' => 'admin'];
    return view('pages.about',$user);

    }
    public function contact(){
        $data =[
            "person"=> ["Rizky", "Gavin", "Dzaky","Iqbal"]
        ];
        return view('pages.contact', $data);
       
    }
}
