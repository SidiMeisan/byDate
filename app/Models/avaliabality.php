<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avaliabality extends Model
{
    use HasFactory;

    /**
     * table to store teachers records.
     */
    protected $table = 'avaliabality';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'time_from',
        'time_to',
        'days',
    ];

    public $timestamps = false;
}
