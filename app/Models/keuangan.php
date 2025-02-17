<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    //
    protected $table="keuangan";
    protected $primaryKey="id";
     public $timestamps=false;
     protected $guarded = ['id'];
     protected $fillable = ['masuk'];
}