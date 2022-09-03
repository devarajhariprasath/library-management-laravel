<?php

namespace App\Http\Controllers;

use App\Models\memberregistration;
use Illuminate\Http\Request;

class memberregistrationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
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
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'confirmpassword'=>'required',
            'email'=>'required',
            'contact'=>'required',
        ]);

        memberregistration::create($request->all());

        return redirect()->route('index')
                       ->with('success','member created successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\memberregistration  $memberregistration
     * @return \Illuminate\Http\Response
     */
    public function show(memberregistration $memberregistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\memberregistration  $memberregistration
     * @return \Illuminate\Http\Response
     */
    public function edit(memberregistration $memberregistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\memberregistration  $memberregistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, memberregistration $memberregistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\memberregistration  $memberregistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(memberregistration $memberregistration)
    {
        //
    }
}
