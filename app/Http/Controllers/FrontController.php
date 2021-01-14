<?php

namespace App\Http\Controllers;

use App\Models\BOARDCC;
use App\Models\CREDRISKCC;
use App\Models\DECCC;
use App\Models\Department;
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
use App\Models\SubmittedMeeting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class FrontController extends Controller
{
    public function __invoke($page)
    {
        $data = [];
        $title = "";
        if($page == "information-technology"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Information Technology";
                $data = ITDEVCC::query()->first();
            }else{
                abort(403);
            }
        }
        else if($page == "credit-risk"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Credit Risk";
                $data = CREDRISKCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "board"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Board";
                $data = BOARDCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "operations"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Operations";
                $data = OPSCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "financial-crime"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Financial Risk";
                $data = FINCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "fraud"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Fraud";
                $data = FRAUDCC::query()->orderBy('id', 'asc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "risk-acceptance"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Risk Acceptance";
                $data = RISKACC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "decisions"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Decisions";
                $data = DECCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
            //dd($data);
        }
        else if($page == "end-of-month"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "End of Month";
                $data = MONENDCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "on-boarding"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "On Boarding";
                $data = ONBOARDCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "marketing"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Marketing";
                $data = MARKETCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "finance"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Finance";
                $data = FINCC::query()->orderBy('id', 'desc')->first();
            }else{
                abort(403);
            }
        }
        else if($page == "idea"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Idea";
                return view('pages.' . $page, compact('title'));
            }else{
                abort(403);
            }
        }
        else if($page == "how-it-works"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "How It Works";
                return view('pages.' . $page, compact('title'));
            }else{
                abort(403);
            }
        }
        else if($page == "contact-us"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Contact Us";
                return view('pages.' . $page, compact('title'));
            }else{
                abort(403);
            }
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
        $departments = Department::all();
        return view('home',compact('news','departments'));
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
    public function test(){
        $user = User::where('id',1)->first();
        $pdf = Pdf::loadView('pdf', compact('user'));
        $filname = time().'.'.'pdf';
        $filepath = public_path('pdf/'.$filname);
        $pdf->save($filepath);
        return $pdf->stream($filname);
    }
    public function pdf(){
        $user = User::where('id',1)->first();
        return view('pdf',compact('user'));
    }
    public function submitForReview(Request $request, $id){
        $model = $request->meeting;
        if($model == "DECCC"){
            $deccc = DECCC::where('id',$id)->first();
            $deccc->submit_for_review = Carbon::now();
            $meeting = $deccc;
            $pdf = Pdf::loadView('pdf',compact('meeting'));
            $filname = time().'.'.'pdf';
            $filepath = public_path('pdf/'.$filname);
            $pdf->save($filepath);
            $deccc->pdf = $filname;
            if($deccc->save()){
                return redirect()->back()->with('success','Message has been successfully submitted for review');
            }
            return redirect()->back()->with('error','Failed to submit your message');
        }
    }
    public function submitMessage(Request $request, $id){
        $model = $request->meeting;
        if($model == "DECCC"){
            $deccc = DECCC::where('id',$id)->first();
            $deccc->submitted_at = Carbon::now();
            if($deccc->save()){
                return redirect()->back()->with('success','Message has been successfully submitted.');
            }
            return redirect()->back()->with('success','Failed to submit your message');
        }
    }
    public function discardMessage($id,$model){
        if($model == "DECCC"){
            $deccc = DECCC::where('id',$id)->first();
            $deccc->discarded = 1;
            if($deccc->save()){
                return redirect()->back()->with('success','Message has been successfully submitted.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
    }
    public function addMessage($model){
        $title = "Add Message";
        return view("pages.add-message",compact('title','model'));
    }
    public function saveMessage(Request $request,$model){
        $data = $request->except('_token');
        $data['present'] = implode(",",$request->present);
        $data['user_id'] = Auth::user()->id;
        if($model == "decisions"){
            $data['meeting'] = "DECCC";
            DECCC::create($data);
            return redirect(route('page',"decisions"))->with('success','Message has been saved successfully');
        }
        if($model == "Credit Risk"){
            $data['meeting'] = "CREDRISKCC";
            CREDRISKCC::create($data);
            return redirect(route('page',"credit-risk"))->with('success','Message has been saved successfully');
        }

        dd($present);
    }
    public function incident(){
        return view('pages.incident');
    }
    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
}
