<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class VicePresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::orderBy('created_at', 'DESC')->paginate(20);
        $users = DB::table('users')->whereIn('member_type', ['Vice President'])->get();
        return view('admin.pages.vice_president.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.pages.vice_president.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vice_president =new User();

        $vice_president->member_type = $request->input('member_type');
        $vice_president->name = $request->input('name');
        $vice_president->edu = $request->input('edu');
        $vice_president->m_designation = $request->input('m_designation');
        $vice_president->at_location = $request->input('at_location');
        $vice_president->status = $request->input('status');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/user';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $vice_president['image']= $path.'/'. $file_name;
        }
    
        
        $vice_president->save();
        session()->flash('success', 'President Created Successfully');
        return redirect()->route('admin.vice-president.index');
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
        $vice_president = User::findOrFail($id);
        return view('admin.pages.vice_president.edit',compact('vice_president'));
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
        $vice_president = User::findOrFail($id);
        $vice_president->member_type = $request->input('member_type');
        $vice_president->edu = $request->input('edu');
        $vice_president->m_designation = $request->input('m_designation');
        $vice_president->at_location = $request->input('at_location');
        $vice_president->status = $request->input('status');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/user';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $vice_president['image']= $path.'/'. $file_name;
        }
        session()->flash('success', 'user Updated Successfully');
        return redirect()->route('admin.vice-president.index');
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
