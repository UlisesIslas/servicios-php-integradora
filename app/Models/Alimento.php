<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

    protected $table = 'alimentos';

    protected $fillable = ['id', 'nombre'];

    public function findAlimentoById($id) {
        return Alimento::find($id);
    }
}
