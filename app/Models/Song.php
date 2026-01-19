<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable=["title","yearRelese","autor","img"];
    public function user(){
    return $this->belongsTo(User::class);
}
}
