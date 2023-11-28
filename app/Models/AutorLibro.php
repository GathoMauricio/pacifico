<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorLibro extends Model
{
    use HasFactory;

    protected $table = 'autor_libro';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'autor_id',
        'libro_id',
    ];

    public function autor()
    {
        return $this->belongsTo(
            'App\Models\Autor',
            'autor_id',
            'id'
        )
            ->withDefault();
    }

    public function libro()
    {
        return $this->belongsTo(
            'App\Models\Libro',
            'libro_id',
            'id'
        )
            ->withDefault();
    }
}
