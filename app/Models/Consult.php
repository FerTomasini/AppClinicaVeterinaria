<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeanimal',
        'peso',
        'idade',
        'user_name',
        'dataconsulta',
        'descricao'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
