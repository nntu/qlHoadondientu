<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileHoaDon extends Model
{
    //

    protected $fillable = ['mahd', 'loaifile', 'tenfile','duongdanluutru'];
    protected $table = 'filehoadon';
}
