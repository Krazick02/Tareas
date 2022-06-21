<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia',
    ];

    protected $dates=['fecha_limite'];

    public const urgencias=['Baja','Normal','Alta'];
    public function urgencia(){
        return self::urgencias[$this->urgencia];
    }
    public function finalizada(){
        return $this->finalizada==1?'si':'no';
    }
}
