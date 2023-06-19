<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $fillable = ['id', 'L_Leite', 'QTD_Racao', 'Peso', 'Data_Nasc', 'Abate' ];
}
