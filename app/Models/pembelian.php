<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    //
    protected $table = 'pemebelian';
    protected $guarded = ['id'];
    protected $primarykey = ['id'];
}
