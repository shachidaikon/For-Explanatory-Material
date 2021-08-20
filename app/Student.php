<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'name',
        'age',
        'grade',
        
        ];
    
    public function Subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
    

}
