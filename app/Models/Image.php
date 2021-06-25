<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Image extends Model
{
    use HasFactory;

    protected $fillable = [ 'path', 'catalogos_id'];

    public function catalogos() {
        return $this->belongsTo('App\Models\Catalogos', 'catalogos_id');
    }

    // public function url() {
    //     return Storage::url($this->path);
    // }
}
