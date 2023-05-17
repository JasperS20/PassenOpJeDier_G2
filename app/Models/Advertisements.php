<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'animal',
        'price',
        'date_start',
        'date_end',
        'description',
        'img'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
