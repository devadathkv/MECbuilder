<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'designation',   // as per your migration
        'organization',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
