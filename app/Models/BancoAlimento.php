<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BancoAlimento extends Model
{
    use HasFactory;

    protected $table = 'bancos_alimentos';

    protected $fillable = ['id', 'name', 'municipio_id'];

    public function findBancoAlimentoById($id) {
        return BancoAlimento::find($id);
    }

}
