<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foglalt extends Model
{
    protected $table = "foglalt";
    protected $primaryKey = "foglalt_id";
    public $timestamps = false;

    protected $fillable = [
        'allat_id',
        'datum',
        'onkentes_id',
        'elfogadas',
        'teljesitve'
    ];
}
