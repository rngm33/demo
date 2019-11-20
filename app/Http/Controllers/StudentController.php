<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }

    public function index(){
        // $student = DB::table('student')->select('id','name','address','dob','phone','email','gender')->get();
        // $student= Student::all();
        $std= Student::orderby('name','asc')->get();
        // dd($std);
        return view('student.index')->with('students', $std);

    }

    public function edit($id){
        $students= Student::where('id',$id) -> first();
        // dd($students->name);
        return view('student.edit',compact('students',$students));
    }

    public function save(Request $request){
     
        // if(!$request){
        $students = new Student;
        $students->name = $request->name; 
        $students->address = $request->address;
        $students->dob = $request->dob;
        $students->email = $request->email;
        $students->gender = $request->gender;
        $students->phone = $request->phone;

        $customMessages = [
            'name.required'  => 'The title field is required to be filled',
            'address.required' => 'The amount field should be completely filled'
          ];
          $this->validate($request,[
                  'name'=> 'required',
                  'address' => 'required',
              ], $customMessages);

       $students->save();
       Session::flash('msg', 'New student added successfully');

        // }
        // else{
            // Session::flash('msg', 'Sorry! Something Went Wrong :(');

        // }
       return redirect()->route('student.index');

    }

    public function update(Request $req, $id){
        $students =Student::find($id);
       
        if($students->name == $req->name && 
            $students->address == $req->address
             && $students->dob == $req->dob && $students->email == $req->email
             && $students->gender == $req->gender && $students->phone == $req->phone){
                 
                Session::flash('msg', 'No Changes has been seen :P');

        }
        else{
       
        // dd($students->name);
        $students->name = $req->name; 
        $students->address = $req->address;
        $students->dob = $req->dob;
        $students->email = $req->email;
        $students->gender = $req->gender;
        $students->phone = $req->phone;
        
        $students->save();
        Session::flash('msg', 'Student updated successfully');

        }
       
        return redirect()-> route('student.index');
    }

    public function view(Request $req, $id){
        $student= Student::find($id);
        return view('student.view',compact('student'));
    }

    public function delete($id){
        $students= Student::find($id);
        $students->delete();
        Session::flash('msg','Student deleted successfully :)');
        return redirect()->back();
    }
}
