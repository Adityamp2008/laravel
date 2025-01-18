<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pekerja extends Model
{
    //
    protected $table="pekerja";
    protected $primaryKey="id_";
     public $timestamps=false;
     protected $guarded = ['id_pekerja'];

       protected $fillable = ['nama_pekerja'];
    
}
