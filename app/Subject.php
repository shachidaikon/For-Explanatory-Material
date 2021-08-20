<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subject'
        ];
    
    public function Students()
    {
        return $this->belongsToMany('App\Student');
    }
    
    public $timestamps = false;
}

