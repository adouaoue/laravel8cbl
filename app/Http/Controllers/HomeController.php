<?php

namespace App\Http\Controllers;

use App\Models\Admin;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index()
    {
        $posts =  Admin::all();
        return view('home')->with([
            'posts' => $posts
            
        ]);
        
    }
    public function show($id)
    {
        $posts = Admin::findOrFail($id);
        return view('home')->with([
            'posts' => $posts
        ]);
    }

    public function ajouter(){
       
        return view('ajouter1');
              
    }

    public function add(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'prenom' => 'required',
            'tell' => 'required',
            'adress' => 'required',
            'departement' => 'required',
            'spesialite' => 'required',
            'departement' => 'required',
            'email' => 'required',
        ]);
        $posts = new Admin();
        $posts->name = $request->name;
        $posts->prenom = $request->prenom;
        $posts->tell = $request->tell;
        $posts->adress = $request->adress;
        $posts->departement = $request->departement;
        $posts->spesialite = $request->spesialite;
        $posts->email = $request->email;
        $posts->password = Hash::make($request->password);
        $posts->save();

        return redirect('/home')->with([
            'success1' => 'Medecin ajoute'
        ]);
    }
    
    public function edit($id){
    $posts = Admin::where('id', $id)->first();
    return view('edit')->with([
        'post' => $posts
    ]); 
    }

    public function delete(Request $request ,$id){
        $posts= Admin::where('id',$id)->first();
        $posts->delete();
        return redirect('home')->with([
            'success2' => 'medecin delete'
        ]);

    }
}
