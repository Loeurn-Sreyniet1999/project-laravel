<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Auth;
use App\User;
use Image;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = User::find(Auth::id());
        $student = new Student;
        $student->firstName = $request->get('firstname');
        $student->lastName = $request->get('lastname');
        $student->class = $request->get('class');
        $student->description = $request->get('description');
        
        
        $img = $request->file('picture');
        $filename = time() . '.' . $img->getClientOriginalExtension();
        $location = public_path('image/'.$filename);
        Image::make($img)->resize(100,100)->save($location);
        $student->picture = $filename;

        $student->user_id = $user->id;
        $student->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student= Student::find($id);
        return view('student.editForm',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = User::find(Auth::id());
        $student = Student::find($id);
        $student->firstName = $request->get('firstname');
        $student->lastName = $request->get('lastname');
        $student->class = $request->get('class');
        $student->description = $request->get('description');

        // $img = $request->file('picture');
        // $filename = time() . '.' . $img->getClientOriginalExtension();
        // $location = public_path('image/'.$filename);
        // Image::make($img)->resize(100,100)->save($location);
        // $student->picture = $filename;
        
        $student->user_id = $user->id;
        $student->save();
        return redirect('home');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }

    public function detail($id)
    {
         $student= Student::find($id);
         return view('student.detailStudent',compact('student'));
    }

   
}
