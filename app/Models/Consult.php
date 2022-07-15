<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'sintomas',
    ];

    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }

    public function animal()
    {
        return $this->belongsTo('app\Models\Animal');
    }
}
