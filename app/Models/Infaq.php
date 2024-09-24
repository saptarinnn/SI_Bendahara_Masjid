<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infaq extends Model
{
    use HasFactory;

    protected $table = 'infaq';
    protected $guarded = [];

    public function bendahara()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
