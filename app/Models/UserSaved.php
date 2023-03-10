<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSaved extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'ad_id'
    ];

    // CONNECTIONS
    public function users() {
        return $this->hasMany(User::class);
    }

    public function ads() {
        return $this->hasMany(Ad::class);
    }
}
