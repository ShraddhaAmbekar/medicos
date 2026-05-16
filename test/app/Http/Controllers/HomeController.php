<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Imports\ImportStudent;
use App\Exports\ExportStudent;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Arr;
use Auth;
use Carbon;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // Auth::check();
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     

     public function create_student()
    {   
        return view('admin.create-student');
    }
    
    
    public function store_student(Request $request) 
    {   
        $input   = $request->all();
        $user_id  = auth()->user()->id;
        // echo '<pre>';print_r($input);exit;
        
        $data = Student::create([
                'user_id'   => $user_id,
                'name'      => $request->name,
                'father'     => $request->father,
                'mother'    => $request->mother,
                'mobile'   => $request->mobile,
                'UDID'   => $request->UDID,
                'dob'   => $request->dob,
                'description'   => $request->description,
            ]);

        if ($data) {
            return redirect()->route('students')->with('success','Student Details created successfully!');
        }
        else {
            return back()->with('error','Student Details not created!');
        }
        
    }
    
    
    public function students()
    {   
        $user_id  = auth()->user()->id;
        if(auth()->user()->type==1){
            $students     = DB::table('students')->get();
        }else{
            $students     = DB::table('students')->where('user_id', $user_id)->get();
        }
        
        
        // echo'<pre>';print_r($students);exit;
        return view('admin.students', compact('students'));
    }
    
    
    public function edit_student($id)
    {   
        $student  = DB::table('students')->Where('id', $id)->first();
        return view('admin.edit-student', compact('student'));
    }
    
    public function update_student(Request $request)
    {  
        // echo $request->dob;exit;
            
            $id = $request->input('id');
            $student = Student::find($id);
            $student->name = $request->name;
            $student->father = $request->father;
            $student->mother = $request->mother;
            $student->mobile = $request->mobile;
            $student->description = $request->description;
            $student->UDID = $request->UDID;
            $student->dob = $request->dob;
            
            $student->save();
            
        
        
        
        if($student->save()){
            return redirect()->route('students')->with('success','Student updated successfully!');
        }else{
            return back()->with('success','Student not updated successfully!');
        }
    }
    
    public function delete_student($id)
    {
        DB::table("students")->delete($id);
       return redirect()->route('students')->with('success','Student deleted successfully');
    }
    
    public function ChangePassword()
    {  
       return view('admin.change-password');
    }
    
    
    public function UpdatePassword(Request $request)
   {  
        $validated = $request->validate([
             'old_password'        =>'required',
             'new_password'         =>'required|min:8|max:30',
             'confirm_password' =>'required|same:new_password'
        ]);
    
      $user=$request->user();

      if (Hash::check($request->old_password,$user->password)) {
         $user->update([
            'password'=>Hash::make($request->new_password)
         ]);

          return back()->with('success',' password successfully updated!');
      }
      else
      {
         return back()->with('error',' password successfully not updated!');
      }
   }

   public function approve_student($id)
    {  
            $student = Student::find($id);
            $student->status = 1;
            $student->save();

        if($student->save()){
            return redirect()->route('students')->with('success','Student status updated successfully!');
        }else{
            return back()->with('success','Student not status updated successfully!');
        }
    }

    public function cancel_student($id)
    {  
            $student = Student::find($id);
            $student->status = 2;
            $student->save();

        if($student->save()){
            return redirect()->route('students')->with('success','Student status updated successfully!');
        }else{
            return back()->with('success','Student not status updated successfully!');
        }
    }

    public function pending_student($id)
    {  
            $student = Student::find($id);
            $student->status = 0;
            $student->save();

        if($student->save()){
            return redirect()->route('students')->with('success','Student status updated successfully!');
        }else{
            return back()->with('success','Student not status updated successfully!');
        }
    }


    public function all_users()
    {   
        $user_id  = auth()->user()->id;

        if(auth()->user()->type==1){
            $users     = DB::table('users')->get();
        }
        
        
        // echo'<pre>';print_r($users);exit;
        return view('admin.users', compact('users'));
    }

    public function delete_user($id)
    {
        DB::table("users")->delete($id);
       return redirect()->route('all_users')->with('success','user deleted successfully');
    }
    
    
}