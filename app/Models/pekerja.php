<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pekerja extends Model
{
    //
    protected $table="pekerja";
    protected $primaryKey="id";
     public $timestamps=false;
     protected $guarded = ['pekerja'];

       protected $fillable = ['nama_pekerja'];
    
}
