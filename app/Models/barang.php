<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
    protected $table="barang";
    protected $primaryKey="id";
     public $timestamps=false;
     protected $guarded = ['id'];
       protected $fillable = ['nama_barang'];
    
}

