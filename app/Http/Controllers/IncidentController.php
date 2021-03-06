<?php

namespace App\Http\Controllers;

use App\Mail\IncidentMail;
use App\Models\Department;
use App\Models\Incident;
use App\Models\Name;
use App\Models\User;
use GrofGraf\LaravelPDFMerger\PDFMerger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Incident";
        $open_incidents = Incident::where('status',0)->get();
        $close_incidents = Incident::where('status',1)->get();
        $departments = Department::all();
        return view('pages.incident')->with(['open_incidents'=> $open_incidents, 'close_incidents' => $close_incidents, 'title' => $title ,'departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'status' => 'required',
            'incident_lead' => 'required',
        ];
        $this->validate($request,$rules);
        $data = $request->except('_token');
        $users = $this->getNames($data['incident_lead']);
        $data['incident_lead'] = $users;
        $data['incident_team'] = $this->getNames($data['incident_team']);
        foreach ($users as $user){
            $user = User::where('name',$user)->first();
            Mail::to($user->email)->send(new IncidentMail($data));
        }

        $users = $data['incident_team'];
        foreach ($users as $user){
            $user = User::where('name',$user)->first();
            Mail::to($user->email)->send(new IncidentMail($data));
        }


        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id;
        Incident::insert($data);
        return redirect()->back()->with('success','Incident has been recorded successfully and Email has been sent to every Incident Lead and Incident Team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Incident";
        $departments = Department::all();
        $incident = Incident::where('id',$id)->first();
        return view('pages.edit-incident')->with(['title'=> $title, 'incident'=> $incident,'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $incident = Incident::where('id',$id)->first();
        $data = $request->except('_token');
        if($incident->pdf == null) {
            $pdf = Pdf::loadView('incident-pdf', compact('data'));
            $filename = time() . '.' . 'pdf';
            $filepath = public_path('pdf/' . $filename);
            $pdf->save($filepath);
            $data['pdf'] = $filename;
            $users = $this->getNames($incident['incident_lead']);
            $incident['incident_lead'] = $users;
            $incident['incident_team'] = $this->getNames($incident['incident_team']);
            foreach ($users as $user){
                $user = User::where('name',$user)->first();
                Mail::to($user->email)->send(new IncidentMail($incident));
            }

            $users = $incident['incident_team'];
            foreach ($users as $user){
                $user = User::where('name',$user)->first();
                Mail::to($user->email)->send(new IncidentMail($incident));
            }
        }else{
            $merger = \PDFMerger::init();
            $pdf = Pdf::loadView('incident-pdf', compact('data'));
            $filename = time() . '.' . 'pdf';
            $filepath = public_path('pdf/' . $filename);
            $pdf->save($filepath);
            $merger->addPathToPDF(public_path('pdf/'.$incident->pdf),'all','P');
            $merger->addPathToPDF(public_path('pdf/'.$filename),'all','P');
            $merger->merge();
            $merger->save(public_path('pdf/'.$filename));
            $data['pdf'] = $filename;
            unlink(public_path('pdf/'.$incident->pdf));
            $users = $this->getNames($incident['incident_lead']);
            $incident['incident_lead'] = $users;
            $incident['incident_team'] = $this->getNames($incident['incident_team']);
            foreach ($users as $user){
                $user = User::where('name',$user)->first();
                Mail::to($user->email)->send(new IncidentMail($incident));
            }

            $users = $incident['incident_team'];
            foreach ($users as $user){
                $user = User::where('name',$user)->first();
                Mail::to($user->email)->send(new IncidentMail($incident));
            }
        }
        $data['user_id'] = Auth::user()->id;
        Incident::where('id',$id)->update($data);
        return redirect(route('page','incident'))->with('success','Incident has been changed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
