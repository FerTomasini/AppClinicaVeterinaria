<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'raca',
        'idade',
    ];

    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }

    public function consults()
    {
        return $this->hasMany('app\Models\Consults');
    }
}
