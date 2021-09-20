<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggungJawab extends Model
{
    use HasFactory;

    public function user() 
    {
        return $this->hasMany(User::class, 'tanggung_jawab_id');
    }
}
