<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Students::paginate(5);//add pagination 
      //  $data=Students::all();
        return view('welcome',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required | email',
            'phoneno'=> 'required'
        ]);

        $students= new Students;
        $students->first_name = $request->firstname;
        $students->last_name = $request->lastname;
        $students->email 	= $request->email;
        $students->phone 	= $request->phoneno;
        $students->save();
      // return redirect(route('home'))->with('successMsg','Student Added !'); 	
        Session::flash('successMsg','Added !');
        return redirect()->route('home');
        //return redirect()->back();
        
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
       $result = Students::find($id);

       return view('edit',compact('result'));
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
        $this->validate($request,[
            'firstname'=> 'required',
             'lastname'=>'required',
             'email'=> 'required |email',
             'phoneno'=> 'required',

        ]);

        $update_student=Students::find($id);
        $update_student->first_name=$request->firstname;
        $update_student->last_name =$request->lastname;
        $update_student->email =$request->email;
        $update_student->phone =$request->phoneno;
        $update_student->save();
        Session::flash('successMsg','Student Details Updated !');
        return redirect()->route('home');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_student=Students::find($id);
        $delete_student->delete();
        Session::flash('successMsg','Student Recorde Deleted !');
        return redirect()->back();
    }
}
