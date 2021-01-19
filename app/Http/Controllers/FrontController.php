<?php

namespace App\Http\Controllers;

use App\Mail\MeetingMail;
use App\Models\ActionLog;
use App\Models\BOARDCC;
use App\Models\CREDRISKCC;
use App\Models\DECCC;
use App\Models\Department;
use App\Models\FCCC;
use App\Models\FINCC;
use App\Models\FRAUDCC;
use App\Models\ITDEVCC;
use App\Models\MARKETCC;
use App\Models\MeetingLog;
use App\Models\MONENDCC;
use App\Models\Name;
use App\Models\news;
use App\Models\ONBOARDCC;
use App\Models\OPSCC;
use App\Models\RISKACC;
use App\Models\User;
use Carbon\Carbon;
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
        $departments = Department::all();
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


        if($data != []) {
            $data->actions = $this->convert_to_array($data->actions);
            $data->key_decisions = $this->convert_to_array($data->key_decisions);
            $data->notes = $this->convert_to_array($data->notes);
            $data->link = $this->convert_to_array($data->link);
            $data->present = $this->getNames($data->present);
            $data->not_present = $this->getNames($data->not_present);
        }

        // TODO: Implement __invoke() method.
        return view('pages.message-page')->with(['data' => $data, 'title' => $title, 'approved_data' => $approved_data , 'departments' => $departments]);
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
            if ($model == "ITDEVCC") {
                $itdevcc = ITDEVCC::where('id', $id)->first();
                $itdevcc->submit_for_review = Carbon::now();
                $itdevcc->slug = Str::slug($request->slug);
                $names = $this->getNames($itdevcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($itdevcc));
                }
                if ($itdevcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "CREDRISKCC") {
                $credriskcc = CREDRISKCC::where('id', $id)->first();
                $credriskcc->submit_for_review = Carbon::now();
                $credriskcc->slug = Str::slug($request->slug);
                $names = $this->getNames($credriskcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($credriskcc));
                }
                if ($credriskcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "BOARDCC") {
                $boardcc = BOARDCC::where('id', $id)->first();
                $boardcc->submit_for_review = Carbon::now();
                $boardcc->slug = Str::slug($request->slug);
                $names = $this->getNames($boardcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($boardcc));
                }
                if ($boardcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "OPSCC") {
                $opscc = OPSCC::where('id', $id)->first();
                $opscc->submit_for_review = Carbon::now();
                $opscc->slug = Str::slug($request->slug);
                $names = $this->getNames($opscc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($opscc));
                }
                if ($opscc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "FCCC") {
                $fccc = FCCC::where('id', $id)->first();
                $fccc->submit_for_review = Carbon::now();
                $fccc->slug = Str::slug($request->slug);
                $names = $this->getNames($fccc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($fccc));
                }
                if ($fccc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "FRAUDCC") {
                $fraudcc = FRAUDCC::where('id', $id)->first();
                $fraudcc->submit_for_review = Carbon::now();
                $fraudcc->slug = Str::slug($request->slug);
                $names = $this->getNames($fraudcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($fraudcc));
                }
                if ($fraudcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "RISKACC") {
                $riskacc = RISKACC::where('id', $id)->first();
                $riskacc->submit_for_review = Carbon::now();
                $riskacc->slug = Str::slug($request->slug);
                $names = $this->getNames($riskacc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($riskacc));
                }
                if ($riskacc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }

            else if ($model == "DECCC") {
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
            else if ($model == "MONENDCC") {
                $monendcc = MONENDCC::where('id', $id)->first();
                $monendcc->submit_for_review = Carbon::now();
                $monendcc->slug = Str::slug($request->slug);
                $names = $this->getNames($monendcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($monendcc));
                }
                if ($monendcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "ONBOARDCC") {
                $onboardcc = ONBOARDCC::where('id', $id)->first();
                $onboardcc->submit_for_review = Carbon::now();
                $onboardcc->slug = Str::slug($request->slug);
                $names = $this->getNames($onboardcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($onboardcc));
                }
                if ($onboardcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "ONBOARDCC") {
                $onboardcc = ONBOARDCC::where('id', $id)->first();
                $onboardcc->submit_for_review = Carbon::now();
                $onboardcc->slug = Str::slug($request->slug);
                $names = $this->getNames($onboardcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($onboardcc));
                }
                if ($onboardcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "MARKETCC") {
                $marketcc = MARKETCC::where('id', $id)->first();
                $marketcc->submit_for_review = Carbon::now();
                $marketcc->slug = Str::slug($request->slug);
                $names = $this->getNames($marketcc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($marketcc));
                }
                if ($marketcc->save()) {
                    return redirect()->back()->with('success', 'Message has been successfully submitted for review');
                }
                return redirect()->back()->with('error', 'Failed to submit your message');
            }
            else if ($model == "FINCC") {
                $fincc = FINCC::where('id', $id)->first();
                $fincc->submit_for_review = Carbon::now();
                $fincc->slug = Str::slug($request->slug);
                $names = $this->getNames($fincc->present);
                foreach ($names as $name){
                    $user = User::where('name',$name)->first();
                    Mail::to($user->email)->send(new MeetingMail($fincc));
                }
                if ($fincc->save()) {
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
                   return redirect(route('meeting.log',[$itdevcc->meeting,$itdevcc->id]));
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
                   return redirect(route('meeting.log',[$credriskcc->meeting,$credriskcc->id]));
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
                   return redirect(route('meeting.log',[$boardcc->meeting,$boardcc->id]));
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
                    return redirect(route('meeting.log',[$opscc->meeting,$opscc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "FCCC"){
                $fccc= FCCC::where('id',$id)->first();
                $meeting = $fccc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $fccc->pdf = $filname;
                $fccc->user_id = Auth::user()->id;
                $fccc->submitted_at = Carbon::now();
                if($fccc->save()){
                    return redirect(route('meeting.log',[$fccc->meeting,$fccc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "FRAUDCC"){
                $fraudcc= FRAUDCC::where('id',$id)->first();
                $meeting = $fraudcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $fraudcc->pdf = $filname;
                $fraudcc->user_id = Auth::user()->id;
                $fraudcc->submitted_at = Carbon::now();
                if($fraudcc->save()){
                    return redirect(route('meeting.log',[$fraudcc->meeting,$fraudcc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "RISKACC"){
                $riskacc= RISKACC::where('id',$id)->first();
                $meeting = $riskacc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $riskacc->pdf = $filname;
                $riskacc->user_id = Auth::user()->id;
                $riskacc->submitted_at = Carbon::now();
                if($riskacc->save()){
                    return redirect(route('meeting.log',[$riskacc->meeting,$riskacc->id]));
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
                    return redirect(route('meeting.log',[$deccc->meeting,$deccc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "MONENDCC"){
                $monendcc = MONENDCC::where('id',$id)->first();
                $meeting = $monendcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $monendcc->pdf = $filname;
                $monendcc->user_id = Auth::user()->id;
                $monendcc->submitted_at = Carbon::now();
                if($monendcc->save()){
                    return redirect(route('meeting.log',[$monendcc->meeting,$monendcc->id]));;
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "ONBOARDCC"){
                $onboardcc = ONBOARDCC::where('id',$id)->first();
                $meeting = $onboardcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $onboardcc->pdf = $filname;
                $onboardcc->user_id = Auth::user()->id;
                $onboardcc->submitted_at = Carbon::now();
                if($onboardcc->save()){
                    return redirect(route('meeting.log',[$onboardcc->meeting,$onboardcc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "MARKETCC"){
                $marketcc = MARKETCC::where('id',$id)->first();
                $meeting = $marketcc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $marketcc->pdf = $filname;
                $marketcc->user_id = Auth::user()->id;
                $marketcc->submitted_at = Carbon::now();
                if($marketcc->save()){
                   return redirect(route('meeting.log',[$marketcc->meeting,$marketcc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }
            else if($model == "FINCC"){
                $fincc = FINCC::where('id',$id)->first();
                $meeting = $fincc;
                $pdf = Pdf::loadView('pdf', compact('meeting'));
                $filname = time() . '.' . 'pdf';
                $filepath = public_path('pdf/' . $filname);
                $pdf->save($filepath);
                $fincc->pdf = $filname;
                $fincc->user_id = Auth::user()->id;
                $fincc->submitted_at = Carbon::now();
                if($fincc->save()){
                    return redirect(route('meeting.log',[$fincc->meeting,$fincc->id]));
                }
                return redirect()->back()->with('success','Failed to submit your message');
            }

        }else{
            abort(403);
        }
    }
    public function discardMessage($id,$model){
        if($model == "ITDEVCC"){
            $itdevcc = ITDEVCC::where('id',$id)->first();
            $itdevcc->discarded = 1;
            if($itdevcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "CREDRISKCC"){
            $credriskcc = CREDRISKCC::where('id',$id)->first();
            $credriskcc->discarded = 1;
            if($credriskcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "BOARDCC"){
            $boardcc = BOARDCC::where('id',$id)->first();
            $boardcc->discarded = 1;
            if($boardcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "OPSCC"){
            $opscc = OPSCC::where('id',$id)->first();
            $opscc->discarded = 1;
            if($opscc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "FCCC"){
            $fccc = FCCC::where('id',$id)->first();
            $fccc->discarded = 1;
            if($fccc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "FRAUDCC"){
            $fraudcc = FRAUDCC::where('id',$id)->first();
            $fraudcc->discarded = 1;
            if($fraudcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "RISKACC"){
            $riskacc = RISKACC::where('id',$id)->first();
            $riskacc->discarded = 1;
            if($riskacc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "DECCC"){
            $deccc = DECCC::where('id',$id)->first();
            $deccc->discarded = 1;
            if($deccc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "MONENDCC"){
            $monendcc = MONENDCC::where('id',$id)->first();
            $monendcc->discarded = 1;
            if($monendcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "ONBOARDCC"){
            $onboardcc = ONBOARDCC::where('id',$id)->first();
            $onboardcc->discarded = 1;
            if($onboardcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "MARKETCC"){
            $marketcc = MARKETCC::where('id',$id)->first();
            $marketcc->discarded = 1;
            if($marketcc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
        else if($model == "FINCC"){
            $fincc = FINCC::where('id',$id)->first();
            $fincc->discarded = 1;
            if($fincc->save()){
                return redirect()->back()->with('success','Message has been successfully discarded.');
            }
            return redirect()->back()->with('success',"Failed due to some reason");
        }
    }
    public function addMessage($model){
        $title = "Add Message";
        $departments = Department::all();
        return view("pages.add-message")->with(['title'=> $title,'model'=> $model, 'departments' => $departments]);
    }
    public function saveMessage(Request $request,$model){
        $data = $request->except('_token');
        $data['present'] = implode(",",$request->present);
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($model);
        //dd($model);
        if($model == "Information Technology"){
            $data['meeting'] = "ITDEVCC";
            ITDEVCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Credit Risk"){
            $data['meeting'] = "CREDRISKCC";
            CREDRISKCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Board"){
            $data['meeting'] = "BOARDCC";
            BOARDCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Operations"){
            $data['meeting'] = "OPSCC";
            OPSCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Financial Crime"){
            $data['meeting'] = "FCCC";
            FCCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Fraud"){
            $data['meeting'] = "FRAUDCC";
            FRAUDCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Risk Acceptance"){
            $data['meeting'] = "RISKACC";
            RISKACC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Decisions"){
            $data['meeting'] = "DECCC";
            DECCC::create($data);
            return redirect(route('page',"decisions"))->with('success','Message has been saved successfully');
        }
        else if($model == "End of Month"){
            $data['meeting'] = "MONENDCC";
            MONENDCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "On Boarding"){
            $data['meeting'] = "ONBOARDCC";
            ONBOARDCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Marketing"){
            $data['meeting'] = "MARKETCC";
            MARKETCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        else if($model == "Finance"){
            $data['meeting'] = "FINCC";
            FINCC::create($data);
            return redirect(route('page',$data['slug']))->with('success','Message has been saved successfully');
        }
        return redirect()->back()->with('error','Message not saved');
    }
    public function saveChanges($id,$model){
        $data = [];
        $title = "";
        $departments = Department::all();
        if($model == "ITDEVCC"){
            $data = ITDEVCC::where('id',$id)->first();
        }
        if($model == "CREDRISKCC"){
            $data = CREDRISKCC::where('id',$id)->first();
        }
        if($model == "BOARDCC"){
            $data = BOARDCC::where('id',$id)->first();
        }
        if($model == "OPSCC"){
            $data = OPSCC::where('id',$id)->first();
        }
        if($model == "FCCC"){
            $data = FCCC::where('id',$id)->first();
        }
        if($model == "RISKACC"){
            $data = RISKACC::where('id',$id)->first();
        }
        if($model == "DECCC"){
            $data = DECCC::where('id',$id)->first();
        }
        if($model == "MONENDCC"){
            $data = MONENDCC::where('id',$id)->first();
        }
        if($model == "ONBOARDCC"){
            $data = ONBOARDCC::where('id',$id)->first();
        }
        if($model == "MARKETCC"){
            $data = MARKETCC::where('id',$id)->first();
        }
        if($model == "FINCC"){
            $data = FINCC::where('id',$id)->first();
        }
        if($data->submitted_at != null){
            abort(403);
        }
        if($data != []) {
            $data->actions = $this->convert_to_array($data->actions);
            $data->key_decisions = $this->convert_to_array($data->key_decisions);
            $data->notes = $this->convert_to_array($data->notes);
            $data->link = $this->convert_to_array($data->link);
            $data->present = $this->getNames($data->present);
            //$data->not_present = $this->getNames($data->not_present);
        }
        return view('pages.save-changes')->with(['title' => $title, 'data' => $data, 'departments' => $departments]);
    }
    public function submitChanges(Request $request,$id,$model){
        $departments = Department::all();
        if($model == "ITDEVCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            ITDEVCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "CREDRISKCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            CREDRISKCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "BOARDCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            BOARDCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "OPSCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            OPSCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "FCCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            FCCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "FRAUDCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            FRAUDCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "RISKACC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            RISKACC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "DECCC"){
            $title = "Decisions";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            DECCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "MONENDCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            MONENDCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "ONBOARDCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            ONBOARDCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "MARKETCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            MARKETCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
        else if($model == "FINCC"){
            $title = "Information Technology";
            $data = $request->except("_token");
            $data['present'] = implode(',',$data['present']);
            $data['link'] = implode(",",$data['link']);
            FINCC::where('id',$id)->update($data);
            return redirect(route('page',Str::slug($title)))->with('success','Saved Changes successfully');
        }
    }
    public function downloadPDF($pdf){
        $file = public_path('pdf/').$pdf;
        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'policy.pdf', $headers);
    }
    public function idea(){
        $title = "IDEA";
        $departments = Department::all();
        return view('pages.idea')->with(['title' => $title, 'departments' => $departments]);
    }
    public function howItWorks(){
        $title = "How It Works";
        $departments = Department::all();
        return view('pages.how-it-works')->with(['title' => $title, 'departments' => $departments]);
    }

    public function meetingLog($model,$id){
        $title  ="Meeting Log";
        $data = [];
        $departments = \App\Models\Department::all();
        $users = User::all();
        if($model == "ITDEVCC"){
            $data = ITDEVCC::where('id',$id)->first();
        }
        if($model == "CREDRISKCC"){
            $data = CREDRISKCC::where('id',$id)->first();
        }
        if($model == "BOARDCC"){
            $data = BOARDCC::where('id',$id)->first();
        }
        if($model == "OPSCC"){
            $data = OPSCC::where('id',$id)->first();
        }
        if($model == "FCCC"){
            $data = FCCC::where('id',$id)->first();
        }
        if($model == "RISKACC"){
            $data = RISKACC::where('id',$id)->first();
        }
        if($model == "DECCC"){
            $data = DECCC::where('id',$id)->first();
        }
        if($model == "MONENDCC"){
            $data = MONENDCC::where('id',$id)->first();
        }
        if($model == "ONBOARDCC"){
            $data = ONBOARDCC::where('id',$id)->first();
        }
        if($model == "MARKETCC"){
            $data = MARKETCC::where('id',$id)->first();
        }
        if($model == "FINCC"){
            $data = FINCC::where('id',$id)->first();
        }
        return view('pages.meeting_log')->with(['title'=> $title,'departments'=>$departments, 'data' => $data, 'users' => $users]);
    }
    public function saveActionLog(Request $request,$model,$id){
        $data = $request->except('_token');
        $data['meeting'] = $model;
        $data['meeting_id'] = $id;
        ActionLog::insert($data);
        return redirect()->back()->with('success','Action Log has been saved successfully');
    }
    public function saveDecisionLog(Request $request,$model,$id){
        $data = $request->except('_token');
        $data['meeting'] = $model;
        $data['meeting_id'] = $id;
        MeetingLog::insert($data);
        return redirect()->back()->with('success','Meeting Log has been saved successfully');
    }

    public function contactUs(){
        $title = "Contact Us";
        $departments = Department::all();
        return view('pages.contact-us')->with(['title' => $title, 'departments' => $departments]);
    }

}
