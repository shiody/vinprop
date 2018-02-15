<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PropertyType extends Model
{
    protected $table = 'property_types';
    protected $primaryKey = 'prop_type_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prop_type_name', 'user_id', 'status'
    ];
}
