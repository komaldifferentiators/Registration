<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        //print_r("test");die;

       // $credentials = $request->only('email', 'password');
        //print_r($credentials);die;

        

        if (Auth::attempt($credentials)) {
           // $request->session()->regenerate();
            //print_r("test");die;
            return view('todo_login');
        }

        /*return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);*/

        //return view('todo_login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
}
