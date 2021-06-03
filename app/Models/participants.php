<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    use HasFactory;

    /**
     * table to store teachers records.
     */
    protected $table = 'participant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_meeting',
        'name',
        'email',
        'guest',
        'date',
        'time',
        'prepare',
        'timezone',
    ];
    public $timestamps = false;
}
