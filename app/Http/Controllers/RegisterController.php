<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = ['f_name:required' => 'First name is required'];
         $this->validate($request,[
                'f_name'        =>      'required',
                'l_name'        =>      'required',
                'email'         =>      'required|email|unique:registers',
                'password'      =>      'required|min:6',
                'phone_no'      =>      'required|max:10',
                'subscription'  =>      'required',
            ],$message);

        $res = new register;
        $res->f_name = $request->input('f_name');
        $res->l_name = $request->input('l_name');
        $res->email = $request->input('email');
        $res->password = md5($request->input('password'));
        $res->phone_no = $request->input('phone_no');
        $res->subscription = $request->input('subscription');
        $res->save();

       


        /*$data = $request->input();
        $request->session()->put('user', $data['f_name']);
         $request->session()->put('user1', $data['l_name']);
          $request->session()->put('user2', $data['email']);
           $request->session()->put('user3', $data['phone_no']);
            $request->session()->put('user4', $data['subscription']);*/
        //echo session('user');die;

         //$request->session()->flash('msg','Data Inserted Successfully');
        return redirect('todo_create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
