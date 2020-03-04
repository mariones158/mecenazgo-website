<?php

namespace App\Http\Controllers;

use App\User;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('user.create')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $user = new User($request->all());
                $user->password = bcrypt($request->password);
                $user->save();

               // 'se ha registrado el ususario '. $user->name. ' de forma exitosa';

                 return redirect('/')->flash('Updated user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $user = User::find($id);
        return view('user.show')->with('user', $user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
    $user = User::find($id);
       $user->name = $request->name;
       $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->user_type_id = $request->user_type_id;
       $user->indenfication_number = $request->indenfication_number;
       $user->avatar = $request->avatar;
       $user->amount = $request->amount;
       $user->save();

        /* return redirect('/user/'.$id.'/edit')->flash('Updated user'); */
        return redirect('/user/' . $user->id);
    }
}
