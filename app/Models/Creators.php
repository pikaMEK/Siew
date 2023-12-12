<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creators extends Model
{
    use HasFactory;

    public function musics()
    {
        return $this->hasMany(musics::class, 'foreign_key');
    }
}
