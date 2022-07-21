<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\FacaDes\DB;
use Illuminate\Http\Request;
class StudentController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{   $students = student::all()->where('status',1);
return view('admin.view',compact('students'))->with('no',1);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('admin.ragister');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request){

if($request->hasFile('image')) {
$studentImageName = time().'.'.$request->image->extension();
$test = $request->image->move(public_path('student'), $studentImageName);
}else{
$studentImageName = 'none.png';
}
$student = new student();
$student->name = $request->input('name');
$student->cource = $request->input('cource');
$student->section = $request->input('section');
$student->gender = $request->input('gender');
$student->image= $studentImageName;
$student->save();
return redirect('/view')->with('status','Student added success');
}

/**
* Display the specified resource.
*
* @param  \App\Models\Student  $student
* @return \Illuminate\Http\Response
*/
public function show(Student $student)
{
//
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Models\Student  $student
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$student = student::find($id);
return view('admin.edit',compact('student'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Models\Student  $student
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$student =Student::find($id);
$student->status=0;
$student->delete();
return redirect('/view')->with('status','delete added success');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Models\Student  $student
* @return \Illuminate\Http\Response
*/
public function destroy(Student $student)
{
//
}
public function update_student(Request $request){
    $validator=$request->validate([
            'name' => 'required',
            'section' => 'required',
            'cource' => 'required',
            'gender' => 'required',
            'image' => 'required',
        ]);
$id = $request->id;
if($request->hasFile('image')) {
$studentImageName = time().'.'.$request->image->extension();
$test = $request->image->move(public_path('student'), $studentImageName);
}
else{
$studentImageName ='none.png';
}
//   $student->stu_id = $request->input('stu_id');
                        $student=Student::find($id);
                        $student->name = $request->input('name');
                        $student->section = $request->input('section');
                        $student->cource = $request->input('cource');
                        $student->gender = $request->input('gender');
                        $student->image= $studentImageName;
                        $student->update();
return redirect('/view')->with('status','update added success');
}
public function profile($id){
    $student = DB::table('students')->where('id',$id)->where('status',1)->first();
    return view('admin.profile',compact('student'))->with('no',1);
}

}