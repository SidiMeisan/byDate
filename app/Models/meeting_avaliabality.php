<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meeting_avaliabality extends Model
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
        'id_meeting',
        'date',
        'time',
    ];

    public $timestamps = false;
}
