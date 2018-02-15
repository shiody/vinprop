<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class WaterSource extends Model
{
    protected $table = 'water_sources';
    protected $primaryKey = 'water_src_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'water_src_name', 'user_id', 'status'
    ];
}
