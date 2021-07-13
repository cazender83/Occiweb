<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::get()->all();
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utilisateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $username = $request ->input('username');
        $password = $request ->input('password');
        $email = $request ->input('email');
        $numero = $request ->input('numero');



        $utilisateur = new Utilisateur;
        $utilisateur->username = $username;
        $utilisateur->password = $password;
        $utilisateur->email = $email;
        $utilisateur->numero = $numero;
        $utilisateur->admin = 0;
        $utilisateur->save();
        return redirect()->route('utilisateurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateurs.edit', compact('utilisateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $username = $request ->input('username');
        $password = $request ->input('password');
        $email = $request ->input('email');
        $numero = $request ->input('numero');
        $type = $request ->input('type');

        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->username = $username;
        $utilisateur->password = $password;
        $utilisateur->email = $email;
        $utilisateur->numero = $numero;
        $utilisateur->admin = $type;
        $utilisateur->update();
        return redirect()->route('utilisateurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        //
    }

    public function connection(Request $request)
    {
        $username = $request ->input('username');
        $password = $request ->input('password');

        $account = Utilisateur::where('username','=',$username)->Where('password', '=', $password)->get();
        return view('utilisateurs.connected', compact('account'));
    }

    public function connect()
    {
        return view('utilisateurs.connexion');
    }

    public function deconnect()
    {
        return view('utilisateurs.deconnect');
    }
}
