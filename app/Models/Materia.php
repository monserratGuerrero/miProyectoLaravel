<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    
    //indicar que guarde 
    protected $fillable=['nombre', 'seccion','horario'];
    
    
    
}
