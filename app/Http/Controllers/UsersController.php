<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => '',
            'password' => 'min:6',
            'companyname' => '',
            'companystreetaddress' => '',
            'companycityaddress' => '',
            'employeename' => '',
            'employeestreetaddress' => '',
            'employeecityaddress' => '',
            'password-repeat' => 'required|same:password'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())

            return Redirect::to('users/create')->withInput()->withErrors($validator->messages());

        User::create(array(
            'name' => Input::get('name'),
            'password' => Hash::make(Input::get('password')),
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if ($user == null)

            return Redirect::to('users');

        return View::make('profile')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if ($user == null)

            return Redirect::to('users');

        return View::make('edit')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'unique:users',
            'password' => 'min:6',
            'companyname' => 'nullable',
            'companystreetaddress' => 'nullable',
            'companycityaddress' => 'nullable',
            'employeename' => 'nullable',
            'employeestreetaddress' => 'nullable',
            'employeecityaddress' => 'nullable'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
            return Redirect::to('users/{{ $id }}/edit')->withInput()->withErrors($validator->messages());

        $user = User::find($id);

        if (Input::has('name')) $user->name = Input::get('name');
        if (Input::has('password')) $user->password = Hash::make(Input::get('name'));
        if (Input::has('companyname')) $user->companyname = Input::get('companyname');
        if (Input::has('companystreetaddress')) $user->companystreetaddress = Input::get('companystreetaddress');
        if (Input::has('companycityaddress')) $user->companycityaddress = Input::get('companycityaddress');
        if (Input::has('employeename')) $user->employeename = Input::get('employeename');
        if (Input::has('employeestreetaddress')) $user->employeestreetaddress = Input::get('employeestreetaddress');
        if (Input::has('employeecityaddress')) $user->employeecityaddress = Input::get('employeecityaddress');
        $user->save();

        return Redirect::to('/profile')->with('success', 'Profile Successfully Updated')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
