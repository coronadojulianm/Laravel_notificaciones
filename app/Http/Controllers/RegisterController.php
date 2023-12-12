<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('auth.register');
    }

    public function listar(){
        
        $users = User::all();
        return view('welcome', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'name'=>'required | max:30',
            'username'=>'required | unique:users|min:3|max:30',
            'email'=>'required',
            'password'=>'required',
            'passwordconfirmation'=>'required',
        ]);

        $user = User::create([
            'name'=> $request->name,
            'username' => $request->username,
            'email' => $request -> email,
            'password' => bcrypt($request ->password),
            'passwordconfirmation' => bcrypt($request->passwordconfirmation)
        ]);


        //20/10/2023 AUTENTICACIONES
        //autenticar
        auth()-> attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ]);
        //20/10/2023 AUTENTICACIONES

        //redireccionar
        // return redirect('/');
        return redirect()->route('loginDireccion');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
