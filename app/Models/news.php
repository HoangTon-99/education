<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table="news";
public function category(){
    return $this->belongsTo('App\category','catid','id');
}
}
