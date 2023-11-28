<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'categoria_id',
        'editorial_id',
        'titulo',
        'resenia',
        'isbn',
        'anio_edicion',
        'imagen',
        'precio',
    ];

    public function categoria()
    {
        return $this->belongsTo(
            'App\Models\Categoria',
            'categoria_id',
            'id'
        )
            ->withDefault();
    }

    public function editorial()
    {
        return $this->belongsTo(
            'App\Models\Editorial',
            'editorial_id',
            'id'
        )
            ->withDefault();
    }

    public function autores()
    {
        return $this->hasMany('App\Models\AutorLibro', 'libro_id');
    }
}
