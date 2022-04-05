<?php

namespace App\Http\Controllers;

use App\Models\Admin;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
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
        $posts = Admin::all(); 
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
        return view('ajouter');
    }

    public function add(Request $request){

        // $this->validate($request, [
        //     'name' => 'required|min:3|max:100',
        //     'email' => 'required|min:10|max:100',
        // ]);
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

        return redirect('home')->with([
            'success' => 'article ajoute'
        ]);
    }
    
    public function edit($id){
    $posts = Admin::where('id', $id)->first();
    return view('edit')->with([
        'post' => $posts
    ]); 
    }
    public function update(Request $request ,$id){
        $posts= Admin::where('id',$id)->first();
        $posts->update([
            "name"=>$request->name,
            "prenom"=> $request->prenom,
            "tell "=> $request->tell,
            "adress"=>$request->adress,
            "departement"=> $request->departement,
            "spesialite "=> $request->spesialite,
            "email"=> $request->email,
            "Password "=> $request->Password,
        ]);
        return redirect('home')->with([
            'success' => 'article update'
        ]);

    }
    public function delete(Request $request ,$id){
        $posts= Admin::where('id',$id)->first();
        $posts->delete();
        return redirect('home')->with([
            'success' => 'article delete'
        ]);

    }
}
