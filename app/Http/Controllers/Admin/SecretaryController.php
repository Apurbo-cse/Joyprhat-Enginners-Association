<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::orderBy('created_at', 'DESC')->paginate(20);
        $users = DB::table('users')->whereIn('member_type', ['General Secretary' , 'Asst. General Secretary', 'Joint General Secretary', 'Organizing Secretary','Finance Secretary','Assit. Finance Secretary'])->get();
        return view('admin.pages.secretary.index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.secretary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $member =new User();

        $member->member_type = $request->input('member_type');
        $member->name = $request->input('name');
        $member->edu = $request->input('edu');
        $member->m_designation = $request->input('m_designation');
        $member->at_location = $request->input('at_location');
        $member->status = $request->input('status');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/user';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $member['image']= $path.'/'. $file_name;
        }
    
        
        $member->save();
        session()->flash('success', 'secretary Created Successfully');
        return redirect()->route('admin.secretary.index');
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
        $secretary = User::findOrFail($id);
        return view('admin.pages.secretary.edit',compact('secretary'));
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
        $secretary = User::findOrFail($id);
        $secretary->member_type = $request->input('member_type');
        $secretary->edu = $request->input('edu');
        $secretary->m_designation = $request->input('m_designation');
        $secretary->at_location = $request->input('at_location');
        $secretary->status = $request->input('status');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/user';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $secretary['image']= $path.'/'. $file_name;
        }
        
        $secretary->save();
        session()->flash('success', 'user Updated Successfully');
        return redirect()->route('admin.secretary.index');
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
