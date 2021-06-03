<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    use HasFactory;

    /**
     * table to store teachers records.
     */
    protected $table = 'meeting';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'name',
        'description',
        'time_from',
        'time_to',
        'date',
        'duration',
        'timezone',
        'url',
    ];
    public $timestamps = false;
}
