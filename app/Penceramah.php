<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penceramah extends Model
{
    protected $table = 'penceramah';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'status'
    ];
}
