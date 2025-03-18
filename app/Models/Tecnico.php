<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $primaryKey = 'Cod_Tecnico';
    protected $table = 'tecnico';
    use HasFactory;

    public $timestamps = false;
    protected $fillable =
        ['Nombres', 'Apellidos', 'Num_CC', 'Fecha_Ingreso', 'Direccion', 'Telefono', 'Fecha_Nac'];

        public function servicio(){
            return $this->hasMany('App\Models\Servicio');
            }
}
