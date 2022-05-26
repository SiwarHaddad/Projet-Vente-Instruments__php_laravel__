<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpRequest;
use App\Http\Requests\UserInRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('User.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'nomUser' => $request->nomUser,
            'prenomUser' => $request->prenomUser,
            'email' => $request->email,
            'telUser' => $request->telUser,
            'adresseUser' => $request->adresseUser
        ]);

        return redirect()->route('Instrument.index')->with('info','compte modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        Auth::logout();
        $user->delete();

        return redirect()->route('Instrument.index')->with('info','compte supprimé');
    }

    public function getSignIn()
    {
        return view('User.signIn');
    }

    public function SignIn(UserInRequest $request)
    {
        // $this->validate($request, [
        //     'email' => 'email|required|unique:users',
        //     'password' => 'required|min:4'
        // ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
            return redirect()->route('Instrument.index')->with('info','connecté');
        else
            return redirect()->back();
    }


    public function getSignUp()
    {
        return view('User.signUp');
    }

    public function SignUp(UserUpRequest $request)
    {
        // $this->validate($request, [
            //     'email' => 'email|required|unique:users',
            //     'password' => 'required|min:4'
            // ]);

        $user = User::create([
            'nomUser' => $request->nomUser,
            'prenomUser' => $request->prenomUser,
            'email' => $request->email,
            'telUser' => $request->telUser,
            'password' => bcrypt($request->password),
            'adresseUser' => $request->adresseUser
        ]);

        Auth::login($user);
        return redirect()->route('Instrument.index')->with('info','inscris');
    }

    public function Logout()
    {
        Auth::logout();

        return redirect()->back()->with('info','déconnecté');
    }

    public function setMdp()
    {
        return('User.setMdp');
    }

    // public function setMdp_(Request $request)
    // {
    //     return  redirect()->route('Instrument.index')->with('info','Mot de passe modifié');
    // }
}
