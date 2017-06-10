<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $primaryKey='id';

  protected $table = 'jobs';

  protected $fillable = ['sede','actiname','responsable','con_idcorporation'];

  protected $guarded = ['id'];
}
