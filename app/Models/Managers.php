<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    // use HasFactory;

    protected $table = 'managers';

    protected $fillable = [
        'clubs_id',
        'photo',
        'name',
        'old',
        'nationality',
        'created_at',
        'updated_at'
    ];

    // Relationships
    public function clubs()
    {
        return $this->belongsTo(Clubs::class, 'clubs_id', 'id');
    }
}
