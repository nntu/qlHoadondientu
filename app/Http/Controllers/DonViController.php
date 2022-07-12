<?php

namespace App\Http\Controllers;

use App\DonVi;
use Illuminate\Http\Request;
use DataTables;
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
        //
        $dsdonvi = DonVi::all();
        return view('donvi.index')->with('dsdonvi', $dsdonvi);
    }
    public function getdatatable(Request $request)
    {
        if ($request->ajax()) {

            $dsdonvi = DonVi::all();
            return Datatables::of($dsdonvi)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                   // if (\Session::get('donvi_edit'))
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                  //  if (\Session::get('donvi_delete'))
                        $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
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

        $request->validate([
            'MST' => 'required',
            'TenDonVi' => 'required',
        ]);

        DonVi::create($request->all());

        return redirect()->route('donvi.index')->with('success','Post created successfully.');
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
