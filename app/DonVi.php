<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonVi extends Model
{
    protected $fillable = ['MST', 'TenDonVi', 'DiaChi'];
    protected $table = 'donvi';
    public $timestamps = false;
}
