<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ListType extends Model
{
    protected $table = 'list_types';
    protected $primaryKey = 'list_type_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'list_type_name', 'user_id', 'status'
    ];
}
