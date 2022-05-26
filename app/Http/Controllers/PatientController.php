<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\patient;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{

 
    public function index()
    {
        $id =  Auth::guard('admin')->user()->id;

        $user = DB::table('patients')
        ->whereIn('admins_id', [$id])
        ->get();

        return view('listpatient',compact('user'));
    }
 

    public function showname()
    {
        $te =  Auth::guard('admin')->user()->id;
        return view('ajouter1')->with([
            'te' => $te
        ]);           
    }

      public function show($id)
    {
        $patient = patient::findOrFail($id);
        return view('showpatient')->with([
            'patient' => $patient
        ]);
    }
   
    public function patientadd(){
        return view('ajouter1');
    }
    
    public function addp(Request $request){

        $patient = new patient;
        $patient->name = $request->name;
        $patient->prenom = $request->prenom;
        $patient->tell = $request->tell;
        $patient->adress = $request->adress;
        $patient->date_ne = $request->date_ne;
        $patient->num_dossier = $request->num_dossier;
        $patient->Age =$request->Age;
        $patient->Gender = $request->Gender;
        $patient->Family_Status = $request->Family_Status;
        $patient->Job = $request->Job;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $patient->created_at = time(); 
        $patient->updated_at = time();
        $patient->save();

        return redirect('admin')->with([
            'success1' => 'patient ajoute'
        ]);
    }
    public function delete(Request $request ,$id){
        $patient= patient::where('id',$id)->first();
        $patient->delete();
        return redirect('/admin')->with([
            'success2' => 'patient delete'
        ]);

    }
  
    public function voir(){
        $id = request('id');
        $util = patient::where('id',$id)->first();
        dump($util);
        return view('test' , [
            'util'  => $util,
        ]);
    }

    public function indextest()
    {    $users =Auth::user();  
         $user = dump($users);
        return view('patient',compact('user'));
    }
    
}
 