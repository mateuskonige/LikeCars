<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogos extends Model
{
    use HasFactory;

    protected $fillable = [ 'montadoraCarro', 'nomeCarro','corCarro', 'anoCarro', 'descricaoCarro', 'precoCarro', 'kmCarro', 'path'];

    public function image() {
        return $this->hasOne('App\Models\Image');
    }
}
