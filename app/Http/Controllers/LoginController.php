<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//use App\Http\Controllers\LoginController


class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
       
        $data = $request->input();
        $email = $data['email'];
        //print_r($email);
        $password = $data['password'];

        $users = DB::select("select * from registers where email = '$email' and password = '$password'");
        
        if($users)
        {
            $request->session()->put('email', $data['email']);
            /*$request->session()->put('f_name', $users['f_name']);
            $request->session()->put('l_name', $users['l_name']);
            $request->session()->put('phone_no', $users['phone_no']);
            $request->session()->put('subscription', $users['subscription']);*/
            //return view('todo_login',['users'=>$users]);

            return view('todo_login');
        }else
        {

            return view('welcome');
        }
        
       
        
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
