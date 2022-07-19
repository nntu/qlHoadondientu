<?php

namespace App\Http\Controllers;

use App\HDDienTu;

use App\DonVi;
use Illuminate\Http\Request;

use App\FileHoaDon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class HDDienTuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $dshoadon = HDDienTu::all();

        $dsdonvi = Donvi::all();

        return view('hddientu.index')->with(
            ['dshoadon' => $dshoadon,
            'dsdonvi' => $dsdonvi, ]
        );
    }
    public function getdatatable(Request $request)
    {
        $ngaydau = $request['ngaydau'];
        $ngaycuoi = $request['ngaycuoi'];
        $mst = $request['mst'];

        $dbhd = new \App\HDDienTu();
        \Log::info($mst);
        $dshoadon = $dbhd->ds_HoaDon($ngaydau, $ngaycuoi, $mst);

        return datatables()->of($dshoadon)->addColumn('action', 'action_button')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dsdonvi = DonVi::all();

        return view('hddientu.create', ['dsdonvi' => $dsdonvi]);
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
        $hoadon = HDDienTu::create($request->all());
        $hoadonjson = $hoadon->toArray();

        $duongdanluu = 'hoadon/'.$hoadon->MST.'/'.str_replace('-', '/', $hoadon->ngayhoadon).'/'.$hoadon->sohoadon;

        if ($request->hasfile('filepdf')) {
            foreach ($request->file('filepdf') as $file) {
                $name = $file->getClientOriginalName();
                $filepdf = $hoadon->sohoadon.'_'.str_replace(' ', '_', vn_to_str($name));
                Storage::putFileAs($duongdanluu, $file, $filepdf);
                $filehd = new FileHoaDon();
                $filehd->tenfile = $filepdf;
                $filehd->mahd = $hoadon->id;
                $filehd->loaifile = 'PDF';
                $filehd->duongdanluutru = $duongdanluu;
                $filehd->save();
                $hoadonjson['file'][] = [$filehd->loaifile => $filepdf];
            }
        }

        if ($request->hasfile('filehoadon')) {
            foreach ($request->file('filehoadon') as $file) {
                $name = $file->getClientOriginalName();
                $loaifile = $file->getClientOriginalExtension();
                $filepdf = $hoadon->sohoadon.'_'.str_replace(' ', '_', vn_to_str($name));
                Storage::putFileAs($duongdanluu, $file, $filepdf);
                $filehd = new FileHoaDon();
                $filehd->tenfile = $filepdf;
                $filehd->mahd = $hoadon->id;
                $filehd->loaifile = str_replace('.', '', $loaifile);
                $filehd->duongdanluutru = $duongdanluu;
                $filehd->save();
                $hoadonjson['file'][] = [$filehd->loaifile => $filepdf];
            }
        }
        Storage::disk('local')->put($duongdanluu.'/thongtinhd_'.$hoadon->sohoadon.'.json', json_encode($hoadonjson, JSON_PRETTY_PRINT));

        return redirect()->route('hoadon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HDDienTu  $hDDienTu
     * @return \Illuminate\Http\Response
     */
    public function show(HDDienTu $hDDienTu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HDDienTu  $hDDienTu
     * @return \Illuminate\Http\Response
     */
    public function edit(HDDienTu $hDDienTu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HDDienTu  $hDDienTu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HDDienTu $hDDienTu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HDDienTu  $hDDienTu
     * @return \Illuminate\Http\Response
     */
    public function destroy(HDDienTu $hDDienTu)
    {
        //
    }
}
