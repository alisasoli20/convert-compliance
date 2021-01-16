<?php

namespace App\Http\Controllers;

use App\Mail\MeetingMail;
use App\Models\BOARDCC;
use App\Models\CREDRISKCC;
use App\Models\DECCC;
use App\Models\Department;
use App\Models\FCCC;
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
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class FrontController extends Controller
{
    public function __invoke($page)
    {
        $data = [];
        $approved_data = [];
        $title = "";
        if($page == "information-technology"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Information Technology";
                $approved_data = ITDEVCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = ITDEVCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "credit-risk"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Credit Risk";
                $approved_data = CREDRISKCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = CREDRISKCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "board"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Board";
                $approved_data = BOARDCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = BOARDCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "operations"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Operations";
                $approved_data = OPSCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = OPSCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "financial-crime"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Financial Risk";
                $approved_data = FCCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = CREDRISKCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "fraud"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Fraud";
                $approved_data = FRAUDCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = FRAUDCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "risk-acceptance"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Risk Acceptance";
                $approved_data = RISKACC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = RISKACC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "decisions"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Decisions";
                $approved_data = DECCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = DECCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%s');
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
                $approved_data = MONENDCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = MONENDCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "on-boarding"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "On Boarding";
                $approved_data = ONBOARDCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = ONBOARDCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "marketing"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Marketing";
                $approved_data = MARKETCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = MARKETCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
            }else{
                abort(403);
            }
        }
        else if($page == "finance"){
            if(Auth::user()->hasPermissionTo($page) || Auth::user()->hasRole('Admin')) {
                $title = "Finance";
                $approved_data = FINCC::query()->where('discarded','=',0)->where('submitted_at','!=',null)->get();
                $data = FINCC::query()->where('discarded', '=', 0)->where('submitted_at', '=', null)->first();
                if (isset($data->submit_for_review)) {
                    $submit_for_review = new \DateTime($data->submit_for_review);
                    $submit_for_review = $submit_for_review->diff(Carbon::now())->format('%d');
                    $data->submit_for_review = $submit_for_review;
                }
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
        return view('pages.message-page')->with(['data' => $data, 'title' => $title, 'approved_data' => $approved_data]);
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
        if(Auth::user()->hasPermissionTo('can-submit-for-review') || Auth::user()->hasRole('Admin')) {
            $model = $request->meeting;
            if ($model == "DECCC") {
                $deccc = DECCC::where('id', $id)->first();
                $deccc->submit_for_review = Carbon::now();
                $deccc->slug = Str::slug($request->slug);
                $names = $this->getNames($deccc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($deccc));
                }
                if ($deccc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
        }else{
            abort(403);
        }
    }
    public function submitMessage(Request $request, $id){
        if(Auth::user()->hasPermissionTo('can-submit-for-review') || Auth::user()->hasRole('Admin')){
            $model = $request->meeting;
            if($model == "ITDEVCC"){
                $itdevcc = ITDEVCC::where('id',$id)->first();
                $meeting = $itdevcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $itdevcc->pdf = $filname;
                $itdevcc->user_id = Auth::user()->id;
                $itdevcc->submitted_at = Carbon::now();
                if($itdevcc->save()){
                    return redirect()->back()->with('success','Message has been successfully submitted.');
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "CREDRISKCC"){
                $credriskcc = CREDRISKCC::where('id',$id)->first();
                $meeting = $credriskcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $credriskcc->pdf = $filname;
                $credriskcc->user_id = Auth::user()->id;
                $credriskcc->submitted_at = Carbon::now();
                if($credriskcc->save()){
                    return redirect()->back()->with('success','Message has been successfully submitted.');
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "BOARDCC"){
                $boardcc= BOARDCC::where('id',$id)->first();
                $meeting = $boardcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $boardcc->pdf = $filname;
                $boardcc->user_id = Auth::user()->id;
                $boardcc->submitted_at = Carbon::now();
                if($boardcc->save()){
                    return redirect()->back()->with('success','Message has been successfully submitted.');
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "OPSCC"){
                $opscc= OPSCC::where('id',$id)->first();
                $meeting = $opscc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $opscc->pdf = $filname;
                $opscc->user_id = Auth::user()->id;
                $opscc->submitted_at = Carbon::now();
                if($opscc->save()){
                    return redirect()->back()->with('success','Message has been successfully submitted.');
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "FCCC"){
                $opscc= OPSCC::where('id',$id)->first();
                $meeting = $opscc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $opscc->pdf = $filname;
                $opscc->user_id = Auth::user()->id;
                $opscc->submitted_at = Carbon::now();
                if($opscc->save()){
                    return redirect()->back()->with('success','Message has been successfully submitted.');
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }

            else if($model == "DECCC"){
                $deccc = DECCC::where('id',$id)->first();
                $meeting = $deccc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $deccc->pdf = $filname;
                $deccc->user_id = Auth::user()->id;
                $deccc->submitted_at = Carbon::now();
                if($deccc->save()){
                    return redirect()->back()->with('success','Message has been successfully submitted.');
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
        }else{
            abort(403);
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

        return redirect()->back();
    }
    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
    public function downloadPDF($pdf){
        $file = public_path('pdf/').$pdf;
        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'policy.pdf', $headers);
    }

}
