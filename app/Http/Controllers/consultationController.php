<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class consultationController extends Controller
{
    // public function consultationindex()
    // {
    //     $consultation = consultation::all(); 
    //         return view('Consultation')->with([
    //             'consultation' => $consultation
    //         ]);           
    // }
    public function consultationpatient()
    {
        $consultation  =  Auth::guard('patient')->user()->id;
        $test = DB::table('consultation')
        ->whereIn('id_patient', [$consultation])
        ->get();
        return view('patient')->with([
            'test' => $test,
            
        ]);                 
    }
    public function consu(){
        $test =  Auth::guard('patient')->user()->id;
        $test1 =  Auth::guard('patient')->user()->name;
        $test2 =  Auth::guard('patient')->user()->num_dossier;

        return view('Consultationadd')->with([
            'test' => $test,
            'test1'=>$test1,
            'test2'=>$test2,
        ]); 

    }
        public function consultationindex() {
            $consu=consultation::all();
            return view('Consultation')->with([
                'consu'=>$consu
            ]);
        }


    public function addcon(Request $request){

        $ordonence = new consultation();
        $ordonence->nom = $request->nom;
        $ordonence->num_dossier = $request->num_dossier;
        $ordonence->heure = $request->heure;
        $ordonence->date = $request->date;
        $ordonence->id_patient= $request->id_patient;


        $ordonence->stauts='in Progress';


        $ordonence->save();

        return redirect('/patient')->with([
            'success' => 'ordonence ajoute'
        ]);
    }
    // public function consultationindex() {
    //     $consultation  =  Auth::guard('patient')->user()->id;
    //     $test = DB::table('consultation')
    //     ->whereIn('id_patient', [$consultation])
    //     ->get();
    //     return redirect('Consultation')->with([
    //         'consultation' => $consultation,
            
    //     ]); 

    // }
    public function approvedin($id){

        $ordonence = consultation::find($id);
        $ordonence->stauts='Approved';
        $ordonence->save();

        return redirect()->back()->with([
            'success1' => 'consultation approved'
        ]);
    
    }
    public function notapprovedin($id){

        $ordonence = consultation::find($id);
        $ordonence->stauts='Refuse';
        $ordonence->save();

        return redirect()->back()->with([
            'success2' => 'consultation not-approved'
        ]);
    
    }
  
    
        

       
    
}
