<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'apaterno',
        'amaterno',
    ];

    public function libros()
    {
        return $this->hasMany('App\Models\AutorLibro', 'autor_id');
    }
}
