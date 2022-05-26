<?php

namespace App\Http\Controllers;

use App\Models\ordonence;
use App\Models\traitement;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;


class OrdocontrollerController extends Controller
{
    public function indexordonence()
    {
        $ordonence = ordonence::all(); 
            return view('ordonenceadd')->with([
                'ordonence' => $ordonence
            ]);
                
    }
    public function indextr2()
    {
        $traitement = traitement::all(); 
        return view('ordonenceadd')->with([
            'Traitement' => $traitement
        ]);            
    }
   
    public function ordonenceadd(){
        return view('ordonenceadd');
    }
    
    public function addordonence(Request $request){
        
        $ordonence = new ordonence();
        $ordonence->name_medicament = $request->name_medicament;
        $ordonence->dose = $request->dose;
        $ordonence->t_usage = $request->t_usage;
        $ordonence->save();

        return redirect('/ajouter')->with([
            'success1' => 'ordonence ajoute'
        ]);
    }
        

        public function deleteordonence(Request $request ,$id){
            $ordonence= ordonence::where('id',$id)->first();
            $ordonence->delete();
            return redirect('ordonenceadd')->with([
                'success1' => 'article delete'
            ]);
    
        }
        public function downloadPDF($id)
        {
          $ordonence =ordonence::findOrFail($id);

          $pdf = PDF::loadView('pdf', ['ordonence'=>$ordonence]);

          return $pdf->stream('document.pdf');
        }
      
        public function Dordonence(Request $request ,$id){
            $ordonence= ordonence::where('id',$id)->first();
            $ordonence->delete();
            return redirect('/showordonence')->with([
                'success2' => 'ordonence delete'
            ]);
    
        }

       
}
