<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\Jointure;
use Illuminate\Http\Request;

class JointureController extends Controller
{
    public function indexJointure()
    {
        $Jointur = Jointure::all(); 
            return view('Jointureadd')->with([
                'Jointur' => $Jointur
            ]);
                
    }
   
    public function Jointureadd(){
        return view('Jointureadd');
    }
    
    public function addJointure(Request $request){
        
        $Jointur = new Jointure;
        $Jointur->date_consultation = $request->date_consultation;
        $Jointur->Description = $request->Description;

        if($request->hasfile('Jointure'))
        {
            $file = $request->file('Jointure');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/Jointure/', $filename);
            $Jointur->Jointure = $filename;
        }

        $Jointur->save();


        return redirect('/showJointure')->with([
            'success' => 'Jointure ajoute'
        ]);
    }
        
    public function editJointure($id){
        $Jointur = Jointure::where('id', $id)->first();
        return view('editJointur')->with([
            'Jointur' => $Jointur
        ]); 
        }
        public function updateJointure(Request $request ,$id){
            $Jointur= Jointure::where('id',$id)->first();
            $Jointur->update([
                "name"=>$request->name,
                "prenom"=> $request->prenom,
                "tell "=> $request->tell,
                "adress"=>$request->adress,   
            ]);
            return redirect('home')->with([
                'success' => 'article update'
            ]);
    
        }
        public function deleteJointure(Request $request ,$id){
            $Jointur= Jointure::where('id',$id)->first();
            $Jointur->delete();
            return redirect('dossier/show/{id}')->with([
                'success' => 'article delete'
            ]);
    
        }
  
}
