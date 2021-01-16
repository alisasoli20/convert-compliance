<?php

namespace App\Http\Controllers;

use App\Mail\PolicyMail;
use App\Models\PolicyPrivacy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pending_policies = PolicyPrivacy::where('status',"pending")->get();
        $approved_policies = PolicyPrivacy::where('status',"approved")->get();
        return view('pages.privacy-policy')->with(['pending_policies' => $pending_policies, 'approved_policies' => $approved_policies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('pages.add-policy')->with(['users' => $users]);
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
            Mail::to($distribution_list)->send(new PolicyMail($data));
        }
        $data['distribution_list'] = implode(' ',$request->distribution_list);
        $data['status'] = "pending";
        PolicyPrivacy::insert($data);
        return redirect(route('page','privacy-policy'))->with('success','Privacy Policy has been registered successfully');
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
        $policy = PolicyPrivacy::where('id',$id)->first();
        $users = User::all();
        return view('pages.edit-policy',compact('policy','users'));
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
        PolicyPrivacy::where('id',$id)->update($data);
        return redirect(route('page','privacy-policy'))->with('success','Privacy Policy has been updated successfully');
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