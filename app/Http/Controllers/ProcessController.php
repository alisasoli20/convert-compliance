<?php

namespace App\Http\Controllers;

use App\Mail\ProcessMail;
use App\Models\Department;
use App\Models\Process;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Processes";
        $departments = Department::all();
        $pending_processes = Process::where('status',"pending")->get();
        $approved_processes = Process::where('status',"approved")->get();
        return view('pages.process')->with(['pending_processes' => $pending_processes, 'approved_processes' => $approved_processes, 'title' => $title, 'departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create Process";
        $departments = Department::all();
        $users = User::all();
        return view('pages.add-process')->with(['title' => $title, 'departments' => $departments, 'users' => $users]);
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
            'pdf' => 'required'
        ];
        $this->validate($request,$rules);
        $data = $request->except('_token');
        $filename = time().'.'.$request->pdf->extension();
        $request->pdf->move(public_path('pdf'),$filename);
        $data['pdf'] = $filename;
        foreach ($request->distribution_list as $distribution_list){
            Mail::to($distribution_list)->send(new ProcessMail($data));
        }
        $data['distribution_list'] = implode(' ',$request->distribution_list);
        $data['status'] = "pending";
        Process::insert($data);
        return redirect(route('page','process'))->with('success','Process has been registered successfully');
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
        $title = "Processes";
        $departments = Department::all();
        $process = Process::where('id',$id)->first();
        $users = User::all();
        return view('pages.edit-process')->with(['title' => $title, 'departments' => $departments, 'users' => $users, 'process' => $process]);
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
        if($request->pdf != null){
            $filename = time().'.'.$request->pdf->extension();
            $request->pdf->move(public_path('pdf'),$filename);
            $data['pdf'] = $filename;
        }
//        foreach ($request->distribution_list as $distribution_list){
//            Mail::to($distribution_list)->send(new PolicyMail($data));
//        }
        $data['distribution_list'] = implode(' ',$request->distribution_list);
        Process::where('id',$id)->update($data);
        return redirect(route('page','process'))->with('success','Process has been updated successfully');
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
