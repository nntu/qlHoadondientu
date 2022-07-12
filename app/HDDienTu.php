<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HDDienTu extends Model
{
    protected $fillable = ['MST', 'mauso', 'kyhieu', 'sohoadon', 'sotien', 'matracuu', 'diachitracuu', 'ngayhoadon', 'nguoithanhtoan', 'ngaythanhtoan'];
    protected $table = 'hddientu';

    public function ds_HoaDon($ngaydau, $ngaycuoi, $mst)
    {
        \Log::info([$mst]);
        $resules = $this->select('hddientu.id', 'hddientu.MST', 'TenDonVi', 'mauso', 'kyhieu', 'sohoadon', 'sotien', 'matracuu', 'diachitracuu', 'ngayhoadon', 'nguoithanhtoan', 'ngaythanhtoan')
            ->leftJoin('donvi', 'donvi.MST', '=', 'hddientu.MST')
            ->whereDate('ngayhoadon', '>=', $ngaydau)
            ->whereDate('ngayhoadon', '<=', $ngaycuoi);

        if ($mst == null || $mst == 'All' || $mst = '') {
            \Log::info('dk ko dung');

            return $resules->get();
        } else {
            \Log::info($mst);

            return  $resules->where('hddientu.MST', '=', $mst)->get();
        }
    }
}
