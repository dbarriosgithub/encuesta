<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model
{
    protected $primaryKey='id';

    protected $table = 'corporations';

    protected $fillable = ['fecha_inicio','fecha_finalizacion','responsable_name','por_avance','objetivos','firma'];

    protected $guarded = ['id'];
            
}
