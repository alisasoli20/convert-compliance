<?php

namespace App\Http\Controllers;

use App\Models\DECCC;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function __invoke($page)
    {
        $data = [];
        if($page == "information-technology"){
            echo "Information tech";
        }
        else if($page == "decisions"){
            $data = DECCC::query()->first();
            $decc = str_replace(' ','',$data->present);
            $decc = rtrim($decc,", ");
            dd(explode(',',$decc));
        }

        // TODO: Implement __invoke() method.
        return view('pages.'.$page,compact('data'));
    }
    public function home(){
        $news = news::all();
        return view('home',compact('news'));
    }
    public function login(){
        if(Auth::check()){
           return redirect('/home');
        }
        return view('login');
    }
    private function getName($key){
        $data = array([
           "SH" => "Simon Hall"
        ]);
    }
}
