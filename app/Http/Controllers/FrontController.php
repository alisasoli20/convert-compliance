<?php

namespace App\Http\Controllers;

use App\Models\BOARDCC;
use App\Models\CREDRISKCC;
use App\Models\DECCC;
use App\Models\FINCC;
use App\Models\FRAUDCC;
use App\Models\ITDEVCC;
use App\Models\MARKETCC;
use App\Models\MONENDCC;
use App\Models\Name;
use App\Models\news;
use App\Models\ONBOARDCC;
use App\Models\OPSCC;
use App\Models\RISKACC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function __invoke($page)
    {
        $data = [];
        $title = "";
        if($page == "information-technology"){
            $title = "Information Technology";
            $data = ITDEVCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "credit-risk"){
            $title = "Credit Risk";
            $data = CREDRISKCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "board"){
            $title = "Board";
            $data = BOARDCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "operations"){
            $title = "Operations";
            $data = OPSCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "financial-risk"){
            $title = "Financial Risk";
            $data = FINCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "fraud"){
            $title = "Fraud";
            $data = FRAUDCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "risk-acceptance"){
            $title = "Risk Acceptance";
            $data = RISKACC::query()->orderBy('id','desc')->first();
        }
        else if($page == "decisions"){
            $title = "Decisions";
            $data = DECCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "end-of-month"){
            $title = "End of Month";
            $data = MONENDCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "on-boarding"){
            $title = "On Boarding";
            $data = ONBOARDCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "marketing"){
            $title = "Marketing";
            $data = MARKETCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "finance"){
            $title = "Finance";
            $data = FINCC::query()->orderBy('id','desc')->first();
        }
        else if($page == "idea"){
            $title = "Idea";
            return view('pages.'.$page,compact('title'));
        }
        else if($page == "how-it-works"){
            $title = "How It Works";
            return view('pages.'.$page,compact('title'));
        }
        else if($page == "contact-us"){
            $title = "Contact Us";
            return view('pages.'.$page,compact('title'));
        }
        if($data != []) {
            $data->actions = $this->convert_to_array($data->actions);
            $data->key_decisions = $this->convert_to_array($data->key_decisions);
            $data->notes = $this->convert_to_array($data->notes);
            $data->link = $this->convert_to_array($data->link);
            $data->present = $this->getNames($data->present);
            $data->not_present = $this->getNames($data->not_present);
        }

        // TODO: Implement __invoke() method.
        return view('pages.message-page',compact('data','title'));
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
    private function getNames($data){
        $present = str_replace(' ','',$data);
        $present = rtrim($present,", ");
        $presents = explode(',',$present);
        $present_names =[];
        foreach ($presents as $present){
            $name = Name::where('key',$present)->first();
            $present_names[$name->key] = $name->value;
        }
        return $present_names;
    }
    private function convert_to_array($data){
        $actions = rtrim($data,", ");
        $actions = explode(',', $actions);
        return $actions;
    }
}
