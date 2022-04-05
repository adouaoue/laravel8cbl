<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function index()
    {
        $patient = patient::all(); 
            return view('admin')->with([
                'patient' => $patient
            ]);
    }
    public function patientadd(){
        return view('ajouter1');
    }
    
    public function addp(Request $request){

        patient::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'tell' => $request->tell,
            'adress' => $request->adress,
            'date_naissance' => $request->date_naissance,
            'num_dossier' => $request->num_dossier,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin')->with([
            'success' => 'article ajoute'
        ]);
    }
    public function showpatient($id)
    {
        $posts = patient::findOrFail($id);
        return view('show')->with([
            'posts' => $posts
        ]);
    }
}
