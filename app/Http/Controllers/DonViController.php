<?php

namespace App\Http\Controllers;

use App\DonVi;
use Illuminate\Http\Request;

class DonViController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donvis = DonVi::latest()->paginate(5);

        return view('donvi.index',compact('donvis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donvi.create');
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
     * @param  \App\DonVi  $donVi
     * @return \Illuminate\Http\Response
     */
    public function show(DonVi $donVi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DonVi  $donVi
     * @return \Illuminate\Http\Response
     */
    public function edit(DonVi $donVi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DonVi  $donVi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonVi $donVi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DonVi  $donVi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonVi $donVi)
    {
        //
    }
}
