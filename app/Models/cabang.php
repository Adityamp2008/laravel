<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    //
    protected $table="cabang";
    protected $primaryKey="id";
     public $timestamps=false;
     protected $guarded = ['id'];

     protected $fillable = ['nama_cabang'];
}
