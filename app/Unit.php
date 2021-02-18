<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';
    
    protected $fillable = [
        'unit_name','unit_description'
    ];
    
}
