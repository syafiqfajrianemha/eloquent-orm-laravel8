<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Stadiums extends Model
{
    // use HasFactory;

    protected $table = 'stadiums';

    protected $fillable = [
        'name',
        'capacity',
        'address',
        'created_at',
        'updated_at'
    ];

    // Relationships
    public function clubs()
    {
        return $this->hasOne(Clubs::class, 'stadiums_id');
    }
}
