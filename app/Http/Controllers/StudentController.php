<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();

        //dd($students);
        return view('index', compact('students','students'));
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
        Students::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'created_at'=>now()
        ]);

        return redirect()->route('student.index')->with('success','Student has been added');
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
        $student = Students::findOrFail($id);
            return view('edit', compact('student'));
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

      /*  
        $student->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'created_at'=>now()
        ]);
    */

      $student = Students::where('id', $id)->update($request->except('_token','method'));
        return redirect()->route('student.index')->with('success','Student has been Updateddd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student = Students::where('id', $id)->delete();
        return redirect()->route('student.index')->with('success','Student has been Deletedddd');
        /*
        $student->delete();
        */
    }
}
