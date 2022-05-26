<?php

namespace App\Http\Controllers;

use App\Models\traitement;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class traitementController extends Controller
{

        public function indextr()
        {
            $traitement = Traitement::all(); 
            return view('traitement')->with([
                'Traitement' => $traitement
            ]);            
        }
     
    
    public function addtr(Request $request){

        $traitement = new Traitement();
        $traitement->name_medicament = $request->name_medicament;
        $traitement->save();
        return redirect('/ajouter')->with([
            'success1' => 'Jointure ajoute'
        ]);
    }
    public function deletetr(Request $request ,$id){
        $traitement= traitement::where('id',$id)->first();
        $traitement->delete();
        return redirect('/ajouter')->with([
            'success2' => 'traitement delete'
        ]);

    }
}

