<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadenaComercial extends Model
{
    use HasFactory;

    protected $table = 'cadenas_comerciales';

    protected $fillable = ['id', 'nombre', 'estatus'];

    public function findCadenaComercialById($id) {
        return CadenaComercial::find($id);
    }
}
