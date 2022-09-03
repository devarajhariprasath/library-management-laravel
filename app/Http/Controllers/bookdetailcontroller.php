<?php

namespace App\Http\Controllers;

use App\Models\bookdetail;
use Illuminate\Http\Request;

class bookdetailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addbooks');
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
            'title'=>'required',
            'description'=>'required',
            'genre'=>'required',
            'price'=>'required',
        ]);

            bookdetail::create($request->all());

        return redirect()->route('index')
                       ->with('success','member created successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bookdetail  $bookdetail
     * @return \Illuminate\Http\Response
     */
    public function show(bookdetail $bookdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bookdetail  $bookdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(bookdetail $bookdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bookdetail  $bookdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookdetail $bookdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bookdetail  $bookdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookdetail $bookdetail)
    {
        //
    }
}
