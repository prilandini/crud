<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'id', 'do', 'status',
    ];
    // protected $table = 'todos';
    
}
