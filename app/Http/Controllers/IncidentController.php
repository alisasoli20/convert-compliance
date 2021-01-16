<?php

namespace App\Http\Controllers;

use App\Mail\IncidentMail;
use App\Models\Incident;
use App\Models\Name;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $open_incidents = Incident::where('status',0)->get();
        $close_incidents = Incident::where('status',1)->get();
        return view('pages.incident')->with(['open_incidents'=> $open_incidents, 'close_incidents' => $close_incidents]);
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
        $teams = explode(',',$data['incident_lead']);
        $users = array();
        $i = 0;
        foreach ($teams as $team){
            $name = Name::where('key',$team)->first();
            $users[$i] = $name->value;
            $i++;
        }
        $data['incident_lead'] = $users;
        foreach ($users as $user){
            $user = User::where('name',$user)->first();
            Mail::to($user->email)->send(new IncidentMail($data));
        }

        $data = $request->except('_token');
        Incident::insert($data);
        return redirect()->back()->with('success','Incident has been recorded successfully and Email has been sent to every Incident Lead');
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
        $incident = Incident::where('id',$id)->first();
        return view('pages.edit-incident',compact('incident'));
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
        $data = $request->except('_token');
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
}
