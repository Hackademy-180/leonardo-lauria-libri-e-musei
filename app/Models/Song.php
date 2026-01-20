<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable=["title","yearRelese","autor","img","user_id"];
    public function user(){
    return $this->belongsTo(User::class);
    }
    public function genres(){
    return $this->belongsToMany(Genre::class);
}
}

